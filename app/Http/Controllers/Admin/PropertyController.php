<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PropertyType;
use App\Models\Property;
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
      return view("admin.property.index");
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
      return view('admin.property.viewproperty.index');
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
        //     'user_id' => 'required',
        //     'property_name' => 'required',
        //     'property_code' => 'required',
        //     'location' => 'required',
        //     'agent_commission_value' => 'required',
        //     'agent_commission_type' => 'required'
        // ]);

        // $property_data = $request->property;
        // $data = $request;
        // $payment_method = $request->payment_method;
        // dd($data);
        // // Use the Eloquent model to create a new record
        // $property = Property::create($property_data);
        // foreach($payment_method as $value)
        // PropertyPaymentMethod::create([
        //     'property_id'=>$property->id,
        //     'payment_method_id'=>$value,
        //     'payment_description'=>$request->value
        // ]);

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
