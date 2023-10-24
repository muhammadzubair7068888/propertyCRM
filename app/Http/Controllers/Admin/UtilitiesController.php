<?php

namespace App\Http\Controllers\admin;
use App\Models\MainUtility;
use App\Models\Property;
use App\Models\Utility;
use App\Models\PropertyUnit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagedata['mainUtilities']=MainUtility::get();

        return view("admin.utilities.index",$pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagedata['property']=Property::all();
        $pagedata['utility']=Utility::all();
        $pagedata['propertyUnit']=PropertyUnit::all();
        return view("admin.utilities.addutilities",$pagedata);
    }
    public function view(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->except('_token');
        $result = MainUtility::create($data);
        return redirect()->route('admin.utilities.index')->with('success', 'Utility added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['index']=MainUtility::find($id);
        return view('admin.utilities.viewutilitysumary',$data);
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
        $index=MainUtility::find($id);
     
        $index->delete();
       return redirect()->route('admin.utilities.index')->with('danger','Record has been Deleted Successfully!');
    }
}
