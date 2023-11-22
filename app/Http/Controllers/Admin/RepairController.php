<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
 use App\Models\Property;
 use App\Models\PropertyUnit;
 use App\Models\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page['property']=Property::all();
        $page['unit']=PropertyUnit::all();
        $page['repair']=Repair::all();
        return view('admin.repair.index',$page);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $request->validate([
            'property_id' => 'required',
            'property_unit_id' => 'required',
            'complaint_date' => 'required',
            'complaint_description' => 'required',
        ]);
        $data=$request->except('_token');

          Repair::create($data);

        return  redirect()->route('admin.repair')->with('success', 'Complaint has been lodged');

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
    public function updateStatus(Request $request, $id)
    {
        $status = $request->input('status');

        // Update the status in the database
        // Replace 'YourModel' and 'status' with your actual model and column names
        Repair::where('id', $id)->update(['status' => $status]);

        return response()->json(['success' => true]);
    }
}
