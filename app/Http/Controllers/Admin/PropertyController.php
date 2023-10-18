<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PropertyType;
use App\Models\Property;
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
        $request->validate([
            'user_id' => 'required',
            'property_name' => 'required',
            'property_code' => 'required',
            'location' => 'required',
            'agent_commission_value' => 'required',
            'agent_commission_type' => 'required',
            'payment_method' => 'required',
            'payment_description' => 'required',
            'extra_charge_name' => 'required',
            'extra_charge_value' => 'required',
            'extra_charge_type' => 'required',
            'extra_charge_frequency' => 'required',
            'late_fee_name' => 'required',
            'late_fee_type' => 'required',
            'late_fee_value' => 'required',
            'late_fee_grace_period' => 'required',
            'late_fee_frequency' => 'required',
        ]);

        $data = $request->except('_token');
     
        // Use the Eloquent model to create a new record
        Property::create($data);

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
