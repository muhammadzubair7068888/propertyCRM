<?php

namespace App\Http\Controllers\landlord;
use App\Models\Property;
use App\Models\PropertyUnit;
use App\Models\Lease;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\VacateNotice;
use App\Http\Controllers\Controller;
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
        $pagedata['property']=Property::all();
        return view('landlord.Property.index',$pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
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
        return view('landlord.property.property-detail-tabs.index',$pagedata);
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
