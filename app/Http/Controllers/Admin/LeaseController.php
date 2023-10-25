<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        $pagedata['lease']=Lease::all();
        return view("admin.leases.index",$pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagedata['property']=Property::all();
        $pagedata['leasetype']=LeaseType::all();
        $pagedata['utility']=Utility::all();
        $pagedata['tenant']=TenantInfo::get();
        $pagedata['unit']=PropertyUnit::all();

        return view("admin.leases.addlease",$pagedata);
    }
    public function view()
    {
        return view('admin.leases.view.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'form.property_id'=>'required',
            'form.property_unit_id'=>'required',
            'form.lease_type_id'=>'required',
            'form.rent_amount'=>'required',
            'form.start_date'=>'required',
            'form.due_on'=>'required',
            'form.rental_deposit_amount'=>'required',
            'form.tenant_info_id'=>'required',
            'form.generate_invoice'=>'required',
        ]);


       $data= $request->except('_token');
        $RandomCode = Str::random(4);
        $leaseCode = 'LS' . $RandomCode;
       $Info=$data['form'];
       $Info['lease_code'] = $leaseCode;
       $payment_rows = [];
       $utiName=$data['deposit']['utility_names'];
       $depAmount=$data['deposit']['deposit_amounts'];
       for ($i = 0; $i < count($utiName); $i++) {
        // Create a new row with payment method and description
        $row = [($utiName[$i] ?? 'N/A'), ($depAmount[$i] ?? "0")];
        $payment_rows[] = $row;
    };
    $lease=Lease::create($Info);

    // 

    foreach($payment_rows as $payment){
        LeaseDepositAmount::create([
            'lease_id'=>$lease->id,
            'utility_name'=>$payment[0],
            'deposit_amount'=>$payment[1],
        ]);
    }

    return redirect()->route('admin.leases.index')->with(['success'=>'Lease Create Successfully']);



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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
