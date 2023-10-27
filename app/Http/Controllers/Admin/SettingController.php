<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyAmenities;
use App\Models\PropertyType;
use App\Models\PropertyUnitType;
use App\Models\Utility;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagedata['propertyType'] = PropertyType::get();
        $pagedata['propertyUtility'] = Utility::get();
        $pagedata['propertyAmenities'] = PropertyAmenities::get();
        $pagedata['propertyUnitType'] = PropertyUnitType::get();


        return view('admin.setting.index', $pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function view()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required',
        ]);
        
        $data = $request->except('_token');
        PropertyType::create($data);
        return redirect()->route('admin.setting.index')->with('success', 'Added Successfully!');
    }

    public function utilitystore(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required',
        ]);
        
        $data = $request->except('_token');
        Utility::create($data);
        return redirect()->route('admin.setting.index')->with('success', 'Added Successfully!');
    }
    public function amenitystore(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required',
        ]);
        
        $data = $request->except('_token');
        PropertyAmenities::create($data);
        return redirect()->route('admin.setting.index')->with('success', 'Added Successfully!');
    }
    public function unitstore(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required',
        ]);
        
        $data = $request->except('_token');
        PropertyUnitType::create($data);
        return redirect()->route('admin.setting.index')->with('success', 'Added Successfully!');
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
