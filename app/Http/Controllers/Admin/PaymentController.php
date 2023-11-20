<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Lease;
use App\Models\Payment;

use App\Models\PaymentMethod;
use App\Models\TenantInfo;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page['payment']=Payment::all();
        $page['data'] = TenantInfo::all();
        $page['paymentmethod'] = PaymentMethod::all();
        return view('admin.payment.index',$page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment.receipt');
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
         $data=$request->except('_token');

        $index=Payment::create($data);

         return redirect()->route('admin.payment.index')->with('success','Record has been save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $pagedata['data']=Payment::find($id);
        return view('admin.payment.receipt',$pagedata);
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

    // public function fetchLease(Request $req){
    //     // dd($req);
    //     $data['lease']=Lease::where('tenant_info_id',$req->id)->get();
    //    return response($data);
    // }
    public function fetchLease(Request $req)
    {
        $tenant = TenantInfo::whereId($req->id)->first();
        $data['leases'] = $tenant->leases;
        return response()->json(['data' => $data]);
    }


}
