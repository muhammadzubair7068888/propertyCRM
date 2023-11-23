<?php

namespace App\Http\Controllers\admin;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Lease;
use App\Models\LeaseDepositAmount;
use App\Models\LeaseType;
use App\Models\Property;
use App\Models\PropertyUnit;
use App\Models\TenantInfo;
use App\Models\User;
use App\Models\Utility;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagedata['lease'] = Lease::all();
        return view("admin.leases.index", $pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagedata['property'] = Property::all();
        $pagedata['leasetype'] = LeaseType::all();
        $pagedata['utility'] = Utility::all();
        $pagedata['tenant'] = TenantInfo::all();
        $pagedata['unit'] = PropertyUnit::all();

        return view("admin.leases.addlease", $pagedata);
    }
    public function view($id)
    {
        $pagedata['lease'] = Lease::find($id);
        $pagedata['utility'] = Utility::all();


        return view('admin.leases.view.index', $pagedata);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//     public function store(Request $request)
//     {

//         $request->validate([
//             'form.property_id'=>'required',
//             // 'form.property_unit_id'=>'required',
//             'form.lease_type_id'=>'required',
//             'form.rent_amount'=>'required',
//             'form.start_date'=>'required',
//             'form.due_on'=>'required',
//             'form.rental_deposit_amount'=>'required',
//             'form.tenant_info_id'=>'required',
//             'form.generate_invoice'=>'required',
//         ]);



//        $data= $request->except('_token');
//        $RandomCode=Lease::max('id');
//        if(!$RandomCode){
//         $RandomCode=0;
//        }

//         $leaseCode = 'LS00' . ++$RandomCode;
//        $Info=$data['form'];
//        $Info['lease_code'] = $leaseCode;
//        $payment_rows = [];
//        $utiName=$data['deposit']['utility_names'];
//        $depAmount=$data['deposit']['deposit_amounts'];
//        for ($i = 0; $i < count($utiName); $i++) {
//         // Create a new row with payment method and description
//         $row = [($utiName[$i] ?? 'N/A'), ($depAmount[$i] ?? "0")];
//         $payment_rows[] = $row;
//     };
//     $lease=Lease::create($Info);

//      foreach($payment_rows as $payment){
//         LeaseDepositAmount::create([
//             'lease_id'=>$lease->id,
//             'utility_name'=>$payment[0],
//             'deposit_amount'=>$payment[1],
//         ]);
//     }


//     $last_invoice = Invoice::max("id");
//     if(!$last_invoice) {
//         $last_invoice = 0;
//     }
//     $invoiceCode = 'INV00' . ++$last_invoice;
//     $lease_id=$lease->id;

//     $invoice =Invoice::create([
//         'lease_id'=>$lease_id,
//         'invoice_number'=>$invoiceCode
//     ]);


//     return redirect()->route('admin.leases.index')->with(['success'=>'Lease Create Successfully']);
//   }


public function store(Request $request)
{
    $request->validate([
        'form.property_id' => 'required',
        'form.property_unit_id' => 'required',
        'form.lease_type_id' => 'required',
        'form.rent_amount' => 'required|numeric',
        'form.start_date' => 'required|date',
        'form.due_on' => 'required',
        'form.rental_deposit_amount' => 'required|numeric',
        'deposit.utility_names' => 'required|array|min:1',
        'deposit.utility_names.*' => 'required',
        'form.tenant_info_id' => 'required',
        'form.generate_invoice' => 'required',
],[
    'form.property_id.required' => 'The property field is required.',
    'form.property_unit_id.required' => 'The property unit is required.',
    'form.lease_type_id.required' => 'The lease type is required.',
    'form.rent_amount.required' => 'The rent field is required.',
    'form.start_date.required' => 'The date field is required.',
    'form.due_on.required' => 'The due on field is required.',
    'form.rental_deposit_amount.required' => 'The deposit field is required.',
    'form.utility_names.required' => 'The property field is required.',
    'form.generate_invoice.required' => 'The invoice field is required.',
    'form.tenant_info_id.required' => 'The tenant field is required.',

]);

    // Additional validation for unique lease code
    $request->validate([
        'form.lease_code' => Rule::unique('leases', 'lease_code'),
    ]);

    $data = $request->except('_token');
    $RandomCode = Lease::max('id');

    if (!$RandomCode) {
        $RandomCode = 0;
    }

    $leaseCode = 'LS00' . ++$RandomCode;
    $Info = $data['form'];
    $Info['lease_code'] = $leaseCode;

    $payment_rows = [];
    $utiName = $data['deposit']['utility_names'];
    $depAmount = $data['deposit']['deposit_amounts'];

    for ($i = 0; $i < count($utiName); $i++) {
        // Create a new row with payment method and description
        $row = [($utiName[$i] ?? 'N/A'), ($depAmount[$i] ?? "0")];
        $payment_rows[] = $row;
    }

    $lease = Lease::create($Info);

    foreach ($payment_rows as $payment) {
        LeaseDepositAmount::create([
            'lease_id' => $lease->id,
            'utility_name' => $payment[0],
            'deposit_amount' => $payment[1],
        ]);
        // $message = 'Your Lease Invoice has been created successfully!';
        // if ($lease->tenant_info->user->phone_number) {
        //     sendOnfonMessage($lease->tenant_info->user->phone_number, $message);
        // }
        return redirect()->route('admin.leases.index')->with(['success' => 'Lease Create Successfully']);
    }

    $last_invoice = Invoice::max("id");

    if (!$last_invoice) {
        $last_invoice = 0;
    }

    $invoiceCode = 'INV00' . ++$last_invoice;
    $lease_id = $lease->id;

    $invoice = Invoice::create([
        'lease_id' => $lease_id,
        'invoice_number' => $invoiceCode
    ]);

    return redirect()->route('admin.leases.index')->with(['success' => 'Lease Created Successfully']);
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagedata['leaseInfo'] = Lease::find($id);
        // Fetch Property model separately using its own primary key
        $propertyId = $pagedata['leaseInfo']->property_id;
        $pagedata['selected_property'] = Property::find($propertyId);
        // The rest of your code remains unchanged...
        $pagedata['property'] = Property::all();
        $pagedata['leasetype'] = LeaseType::all();
        $pagedata['utility'] = Utility::all();
        $pagedata['tenant'] = TenantInfo::all();
        $pagedata['unit'] = PropertyUnit::all();
        return view('admin.leases.edit', $pagedata);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->except('_token');

        Lease::find($id)->update($data['form']);

        $leaseDeposit = LeaseDepositAmount::find($id);

        $utilityName = $request->deposit['utility_names'];

        $depositAmount = $request->deposit['deposit_amounts'];

        $leaseDeposit->update([
            'lease_id' => $id,
            'utility_name' => $utilityName[0],
            'deposit_amount' => $depositAmount[0],
        ]);
        return redirect()->route('admin.leases.index')->with(['success'=>'Lease Update Successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property=Lease::find($id);
        // dd($property)
        $property->delete();
         return redirect()->route('admin.leases.index')->with('success','Record has been deleted');

    }
}
