<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PropertyType;
use App\Models\Property;
use App\Models\PropertyPaymentMethod;
use App\Models\PropertyExtraCharges;
use App\Models\PropertyLateFee;
use App\Models\PropertyUtility;
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
        // $request->validate([
            // 'user_id' => 'required',
            // 'property.property_name' => 'required',
            // 'property[property_code]' => 'required',
            //  'property[location]' => 'required',
            //  'property[user_id]' => 'required',
            //  'property[property_type_id]' => 'required',
            //  'property[agent_commission_value]' => 'required',
            //  'property[agent_commission_type]' => 'required',
            //  'payment[payment_method][]' => 'required',
            //  'payment[payment_description][]' => 'required',
            //  'extra[extra_charge_name][]' => 'required',
            //  'extra[extra_charges_value][]' => 'required',
            //  'extra[extra_charges_type][]' => 'required',
            //  'extra[extra_frequency][]' => 'required',
            //  'late[late_fee_name][]' => 'required',
            //  'late[late_fee_value][]' => 'required',
            //  'late[late_fee_type][]' => 'required',
            //  'late[late_fee_grace_period][]' => 'required',
            //  'late[late_fee_frequency][]' => 'required',
            //  'utility[utility_name][]' => 'required',
            //  'utility[utility_cost][]' => 'required',
            //  'utility[fix_fee][]' => 'required',
        // ],
        // [
        //     'property.property_name.required' => 'Property Name is required!',
        //     'property[property_code].required' => 'Property Code is required!',
        //     'property[location].required' => 'Property Location is required!',
        //     'property[user_id].required' => 'Landlord is required!',
        //     'property[property_type_id].required' => 'Property type is required!',
        //     'property[agent_commission_value].required' => 'Agent Commission Value is required!',
        //     'property[agent_commission_type].required' => 'Agent Commission Type is required!',
        //     'payment[payment_method][].required' => 'Payment Method is required!',
        //     'payment[payment_description][].required' => 'Payment Description is required!',
        //     'extra[extra_charge_name][].required' => 'Extra Charge Name is required!',
        //     'extra[extra_charges_value][].required' => 'Required!',
        //     'extra[extra_charges_type][].required' => 'Required',
        //     'extra[extra_frequency][].required' => 'Required',
        //     'late[late_fee_name][].required' => 'Late Fee Name is required!',
        //     'late[late_fee_value][].required' => 'Late Fee Value is required!',
        //     'late[late_fee_type][].required' => 'Late Fee Type is required!',
        //     'late[late_fee_grace_period][].required' => 'Late Fee Grace Period is required!',
        //     'late[late_fee_frequency][].required' => 'Late Fee Frequency is required!',
        //     'utility[utility_name][].required' => 'Utility Name is required!',
        //     'utility[utility_cost][].required' => ' Required!',
        //     'utility[fix_fee][].required' => 'Required!',
        // ]);

        $data = $request->except('_token');
        $property_data = $request->property;
        $payments = $request->payment;
        $extras = $request->extra;
        $lates = $request->late;
        $utilities = $request->utility;

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

        $property = Property::create($property_data);
        foreach($payment_rows as $payment){
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
        $property=Property::find($id);
        return view('admin.property.viewproperty.index',['property'=>$property]);
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
