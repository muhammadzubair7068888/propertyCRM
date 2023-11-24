<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PropertyType;
use App\Models\Property;
use App\Models\PropertyUnit;
use App\Models\Lease;
use App\Models\PropertyPaymentMethod;
use App\Models\PropertyExtraCharges;
use App\Models\PropertyLateFee;
use App\Models\PropertyUtility;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Utility;
use App\Models\VacateNotice;
use App\Models\ExtraCharges;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::all();
      return view("admin.property.index",['property'=>$property]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $pagedata['landlords'] = User::whereUserType('landlord')->whereStatus('1')->get();
      $pagedata['propertyTypes'] = PropertyType::get();
      $pagedata['paymentMethod'] = PaymentMethod::get();
      $pagedata['extracharges'] = ExtraCharges::get();


      return view('admin.property.create',$pagedata);
    }

    public function view()

    {


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

            'property.property_name' => 'required',
            'property.property_code' => 'required',
             'property.location' => 'required',
            //  'property.user_id' => 'required',
            //  'property.property_type_id' => 'required',
             'property.agent_commission_value' => 'required',
             'property.agent_commission_type' => 'required',

            //  'payment[payment_method][]' => 'required',
            'extra.extra_charge_name.*' => 'required',
            'extra.extra_charges_value.*' => 'required|numeric',
            'extra.extra_charges_type.*' => 'required',
            'extra.extra_frequency.*' => 'required',


            'late.late_fee_name.*' => 'required',
            'late.late_fee_value.*' => 'required|numeric',
            'late.late_fee_type.*' => 'required',
            'late.late_fee_grace_period.*' => 'required|numeric',
            'late.late_fee_frequency.*' => 'required',

            'utility.utility_name.*' => 'required',
            'utility.utility_cost.*' => 'required|numeric',
            'utility.fix_fee.*' => 'required|numeric',
        ],
        [
            'property.property_name.required' => 'Property Name is required!',
            'property.property_code.required' => 'Property Code is required!',
            'property.location.required' => 'Property Location is required!',

            'property.agent_commission_value.required' => 'Agent Commission Value is required!',
            'property.agent_commission_type.required' => 'Agent Commission Type is required!',

            'extra.extra_charge_name.*.required' => 'Required.',
            // 'extra.extra_charge_name.*.exists' => 'The selected Extra Charges Name is invalid.',

            'extra.extra_charges_value.*.required' => ' Required.',
            'extra.extra_charges_value.*.numeric' => 'This field must be a number.',
            'extra.extra_charges_type.*.required' => ' Required.',
           'extra.extra_frequency.*.required' => ' Required.',


           'late.late_fee_name.*.required' => ' Required',
           'late.late_fee_value.*.required' => ' Required',
           'late.late_fee_value.*.numeric' => ' Late Fee Value field must be a number.',
           'late.late_fee_type.*.required' => ' Required',
           'late.late_fee_grace_period.*.required' => ' Required',
           'late.late_fee_grace_period.*.numeric' => 'The Grace Period (Days) field must be a number.',
           'late.late_fee_frequency.*.required' => 'Required',

           'utility.utility_name.*.required' => 'Required.',
           'utility.utility_cost.*.required' => 'Required.',
           'utility.utility_cost.*.numeric' => 'The Variable Cost field must be a number.',
           'utility.fix_fee.*.required' => 'Required.',
           'utility.fix_fee.*.numeric' => 'The Fixed Fee field must be a number.',
        ]);

        $data = $request->except('_token');
        $property_data = $request->property;
        $payments = $request->payment;
        $extras = $request->extra;
        $lates = $request->late;
        $utilities = $request->utility;
        $units = $request->unit;
        // dd($units);


        $payment_rows = [];

        $paymentMethods = $data["payment"]["payment_method"];
        $paymentDescriptions = $data["payment"]["payment_description"];

        $extra_rows = [];

        $charge_name = $extras["extra_charge_name"];
        $charge_value = $extras["extra_charges_value"];
        $charge_type = $extras["extra_charges_type"];
        $charge_frequency = $extras["extra_frequency"];

        $late_rows = [];

        $fee_name = $lates["late_fee_name"];
        $fee_value = $lates["late_fee_value"];
        $fee_type = $lates["late_fee_type"];
        $grace_period = $lates["late_fee_grace_period"];
        $fee_frequency = $lates["late_fee_frequency"];

        $utility_rows = [];

        $utility_name = $utilities["utility_name"];
        $utility_cost = $utilities["utility_cost"];
        $fix_fee = $utilities["fix_fee"];


        $units = $request->unit;
        $unit_rows = [];
        $unit_name = $units['unit_name'];
        $status = $units['unit_status'];
        $floor = $units['unit_floor'];
        $rent_amount = $units['rent_amount'];
        $unit_type = $units['unit_type'];
        $bed_rooms = $units['bed_rooms'];
        $bath_rooms = $units['bath_rooms'];
        $total_rooms = $units['total_rooms'];
        $square_foot = $units['square_foot'];

            // Payment
            for ($i = 0; $i < count($paymentMethods); $i++) {
                // Create a new row with payment method and description
                $row = [($paymentMethods[$i] ?? '1'), ($paymentDescriptions[$i] ?? "N/A")];
                $payment_rows[] = $row;
            }

            // Extra
            for ($i = 0; $i < count($charge_name); $i++) {
                // Create a new row with payment method and description
                $row = [($charge_name[$i] ?? '1'), $charge_value[$i] ?? "N/A",$charge_type[$i] ?? "N/A",$charge_frequency[$i] ?? "N/A"];
                $extra_rows[] = $row;
            }

            // Late
            for ($i = 0; $i < count($fee_name); $i++) {
                // Create a new row with payment method and description
                $row = [($fee_name[$i] ?? '1'), ($fee_value[$i] ?? "N/A"),($fee_type[$i] ?? "N/A"),($grace_period[$i] ?? "N/A"),($fee_frequency[$i] ?? "N/A")];
                $late_rows[] = $row;
            }

            // Utility
            for ($i = 0; $i < count($utility_name); $i++) {
                // Create a new row with payment method and description
                $row = [($utility_name[$i] ?? '1'), ($utility_cost[$i] ?? "N/A"),($fix_fee[$i] ?? "N/A")];
                $utility_rows[] = $row;
            }

            // Unit
            for ($i = 0; $i < count($status); $i++) {
                // Create a new row with payment method and description
                $row = [($status[$i] ?? '1'),($unit_name[$i] ?? 'N/A'), ($floor[$i] ?? "N/A"),($rent_amount[$i] ?? "N/A"),($unit_type[$i] ?? "N/A"),($bed_rooms[$i] ?? "N/A"),($bath_rooms[$i] ?? "N/A"),($total_rooms[$i] ?? "N/A"),($square_foot[$i] ?? "N/A")];
                $unit_rows[] = $row;
            }

        $property = Property::create($property_data);
        foreach($payment_rows as $payment){
            // PropertyPaymentMethod::wherePropertyId($id)->update([
            PropertyPaymentMethod::create([
                'property_id'=>$property->id,
                'payment_method_id'=>$payment[0],
                'payment_description'=>$payment[1],
            ]);
        }
        foreach($extra_rows as $extra){
            PropertyExtraCharges::create([
                'property_id'=>$property->id,
                'extra_charges_id'=>$extra[0],
                'extra_charges_value'=>$extra[1],
                'extra_charges_Type'=>$extra[2],
                'extra_charges_frequency'=>$extra[3],
            ]);
        }

        foreach($late_rows as $late){
            PropertyLateFee::create([
                'property_id'=>$property->id,
                'late_fee_name'=>$late[0],
                'late_fee_value'=>$late[1],
                'late_fee_type'=>$late[2],
                'late_fee_grace_period'=>$late[3],
                'late_fee_frequency'=>$late[4],
            ]);
        }
        foreach($utility_rows as $utility){
            PropertyUtility::create([
                'property_id'=>$property->id,
                'utilities_id'=>$utility[0],
                'variable_cost'=>$utility[1],
                'fixed_fee'=>$utility[2],
            ]);
        }

        $unit_rows = [];
        foreach ($units['unit_name'] as $key => $unit_name) {
            PropertyUnit::create([
                'property_id' => $property->id,
                'unit_status' => $units['unit_status'][$key] ?? '1',
                'unit_name' => $unit_name,
                'unit_floor' => $units['unit_floor'][$key] ?? 'N/A',
                'rent_amount' => $units['rent_amount'][$key] ?? 'N/A',
                'unit_type' => $units['unit_type'][$key] ?? 'N/A',
                'bed_room' => $units['bed_rooms'][$key] ?? 'N/A',
                'bath_room' => $units['bath_rooms'][$key] ?? 'N/A',
                'total_room' => $units['total_rooms'][$key] ?? 'N/A',
                'square_foot' => $units['square_foot'][$key] ?? 'N/A',
            ]);
        }
        return redirect()->route('admin.properties.index')->with('success', 'Record updated successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $pagedata['property']=Property::find($id);
        $pagedata['propertyUnit']=PropertyUnit::all();
        $pagedata['lease']=Lease::all();
        $pagedata['invoice']=Invoice::all();
        $pagedata['payment']=Payment::all();
        $pagedata['vacateNotice']=VacateNotice::all();
        return view('admin.property.viewproperty.index',$pagedata);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
      $pagedata['landlords'] = User::whereUserType('landlord')->whereStatus('1')->get();
      $pagedata['propertyTypes'] = PropertyType::get();
      $pagedata['paymentMethod'] = PaymentMethod::get();
      $pagedata['extracharges'] = ExtraCharges::get();
      $pagedata['propertyMethodType'] = PropertyPaymentMethod::where('property_id',$id)->first();
      $pagedata['property'] = Property::find($id);

        return view('admin.property.editproperty.index',$pagedata);
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
        $pagedata['property'] = Property::find($id);
        $pagedata['paymentMethod'] = PaymentMethod::all();
        $pagedata['propertyMethodType'] = PropertyPaymentMethod::all();
        $pagedata['extracharges'] = ExtraCharges::all();
        $pagedata['propertyTypes'] = PropertyType::all();
        $pagedata['utility'] = Utility::all();
        $pagedata['unitDetail'] = $pagedata['property']->property_unit[0];
        $pagedata['landlords'] = User::whereUserType('landlord')->whereStatus('1')->get();
        // $pagedata['propertyTypes'] = PropertyType::get();
        // $pagedata['paymentMethod'] = PaymentMethod::get();
        // $pagedata['propertyMethodType'] = PropertyPaymentMethod::where('property_id',$id)->first();
        return view('admin.property.editproperty.index',$pagedata);
    }
    public function updateData(Request $request ,$id){
        $data = $request->except('_token','property.user_id');
        $property_data = $request->property;
        // dd($property_data);
        $payments = $request->payment;
        $extras = $request->extra;
        $lates = $request->late;
        $utilities = $request->utility;
        $units = $request->unit;

        $property = Property::find($id);
        $property->update($property_data);
        // return redirect()->route('admin.properties.index')->with('success', 'Updated data successfully');
        $payment_rows = [];

        $paymentMethods = $payments["payment_method"];
        $paymentDescriptions = $payments["payment_description"];
        // Payment
        for ($i = 0; $i < count($paymentMethods); $i++) {
            // Create a new row with payment method and description
            $row = [($paymentMethods[$i] ?? '1'), ($paymentDescriptions[$i] ?? "N/A")];
            $payment_rows[] = $row;
        }
        foreach($payment_rows as $payment){
            PropertyPaymentMethod::wherePropertyId($id)->update([
                'payment_method_id'=>$payment[0],
                'payment_description'=>$payment[1],
            ]);
        }
        // return redirect()->route('admin.properties.index')->with('success','Record updated successfully');
        $extra_rows = [];

        $charge_name = $extras["extra_charge_name"];
        $charge_value = $extras["extra_charges_value"];
        $charge_type = $extras["extra_charges_type"];
        $charge_frequency = $extras["extra_frequency"];

        for ($i = 0; $i < count($charge_name); $i++) {
            // Create a new row with payment method and description
            $row = [($charge_name[$i] ?? '1'), $charge_value[$i] ?? "N/A",$charge_type[$i] ?? "N/A",$charge_frequency[$i] ?? "N/A"];
            $extra_rows[] = $row;
        }
        foreach($extra_rows as $extra){
            PropertyExtraCharges::wherePropertyId($id)->update([
                'property_id'=>$property->id,
                'extra_charges_id'=>$extra[0],
                'extra_charges_value'=>$extra[1],
                'extra_charges_Type'=>$extra[2],
                'extra_charges_frequency'=>$extra[3],
            ]);


        }


        $late_rows = [];

        $fee_name = $lates["late_fee_name"];
        $fee_value = $lates["late_fee_value"];
        $fee_type = $lates["late_fee_type"];
        $grace_period = $lates["late_fee_grace_period"];
        $fee_frequency = $lates["late_fee_frequency"];

        for ($i = 0; $i < count($fee_name); $i++) {
            // Create a new row with payment method and description
            $row = [($fee_name[$i] ?? '1'), ($fee_value[$i] ?? "N/A"),($fee_type[$i] ?? "N/A"),($grace_period[$i] ?? "N/A"),($fee_frequency[$i] ?? "N/A")];
            $late_rows[] = $row;
        }

        foreach($late_rows as $late){
            PropertyLateFee::wherePropertyId($id)->update([
                'property_id'=>$property->id,
                'late_fee_name'=>$late[0],
                'late_fee_value'=>$late[1],
                'late_fee_type'=>$late[2],
                'late_fee_grace_period'=>$late[3],
                'late_fee_frequency'=>$late[4],
            ]);

        }


        $utility_rows = [];

        $utility_name = $utilities["utility_name"];
        $utility_cost = $utilities["utility_cost"];
        $fix_fee = $utilities["fix_fee"];

        for ($i = 0; $i < count($utility_name); $i++) {
            // Create a new row with payment method and description
            $row = [($utility_name[$i] ?? '1'), ($utility_cost[$i] ?? "N/A"),($fix_fee[$i] ?? "N/A")];
            $utility_rows[] = $row;
        }
        foreach($utility_rows as $utility){
            PropertyUtility::wherePropertyId($id)->update([
                'property_id'=>$property->id,
                'utilities_id'=>$utility[0],
                'variable_cost'=>$utility[1],
                'fixed_fee'=>$utility[2],
            ]);

        }

        $unit_rows = [];

        $unit_name = $units['unit_name'];
        $status = $units['status'];
        $floor = $units['unit_floor'];
        $rent_amount = $units['rent_amount'];
        $unit_type = $units['unit_type'];
        $bed_rooms = $units['bed_rooms'];
        $bath_rooms = $units['bath_rooms'];
        $total_rooms = $units['total_rooms'];
        $square_foot = $units['square_foot'];
           // Unit
           for ($i = 0; $i < count($status); $i++) {
            // Create a new row with payment method and description
            $row = [($status[$i] ?? '1'),($unit_name[$i] ?? 'N/A'), ($floor[$i] ?? "N/A"),($rent_amount[$i] ?? "N/A"),($unit_type[$i] ?? "N/A"),($bed_rooms[$i] ?? "N/A"),($bath_rooms[$i] ?? "N/A"),($total_rooms[$i] ?? "N/A"),($square_foot[$i] ?? "N/A")];
            $unit_rows[] = $row;
        }

        foreach ($unit_rows as $unit) {
            PropertyUnit::wherePropertyId($id)->update([
                'property_id' => $property->id,
                'unit_name' => $unit[1],  // Corrected index for unit_name
                'unit_status' => $unit[0],  // Corrected index for status
                'unit_floor' => $unit[2],
                'rent_amount' => $unit[3],
                'unit_type' => $unit[4],
                'bed_room' => $unit[5],
                'bath_room' => $unit[6],
                'total_room' => $unit[7],
                'square_foot' => $unit[8],
            ]);
        }

        return redirect()->route('admin.properties.index')->with('success', 'Records updated successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $property=Property::find($id);

            if($property){
                $property->propertyPaymentMethod->each(function($paymentMethod){
                    $paymentMethod->delete();
                });
                $property->propertyExtra->each(function($extra) {
                    $extra->delete();
                });
                $property->property_unit->each(function($unit){
                    $unit->delete();
                });
                $property->leases->each(function($lease){
                    $lease->delete();
                });
                $property->propertyUtility->each(function($utility){
                    $utility->delete();
                });
                $property->propertyLateFee->each(function($lateFee){
                    $lateFee->delete();
                });
                $property->delete();

                return redirect()->route('admin.properties.index')->with('success','Record has been Deleted Successfully!');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
