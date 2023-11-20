<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lease;
use App\Models\TenantInfo;

use App\Models\VacateNotice;
use Illuminate\Http\Request;

class VacateNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pagedata['notices']=VacateNotice::get();
        $pagedata['tenant']=TenantInfo::get();
        return view('admin.vacateNotice.index',$pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.vacateNotice.viewvacantnotice');
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
    'tenant_info_id'=>'required',
    'lease_id'=>'required',
    'vacate_date'=>'required',
    'vacate_reason'=>'required'
   ]);
//    dd($request);

   $data=$request->except('_token');
    // dd($data);
   if($data){
    $vacate = VacateNotice::create($data);
    $message = 'Your VacatNotice has been created successfully!';
    sendTwilioMessage($vacate->tenantInfo->user->phone_number, $message);
    return redirect()->route('admin.vacate_notice.index')->with('success','Notice added successfully!');
    }else{
        return redirect()->route('admin.vacate_notice.index')->with('error','Notice does not added !');
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagedata['notice']=VacateNotice::find($id);

        return view('admin.vacateNotice.viewvacantnotice',$pagedata);
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
    public function update(Request $request)
    {
    //  dd($request);
    try{
        $id=$request->tenant_modal_id;

        $notice=$request->except('_token');
        VacateNotice::find($id)->update($notice);
        return redirect()->back()->with('success','Notice Update Successfully!');
    }catch(\Exception $e){
        return redirect()->back()->with('error',$e->getMessage());
    }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $notice=VacateNotice::find($id);
      if($notice){
        $notice->delete();
        return redirect()->back()->with('success','Notice Delete Successfully!');
      }else{
        return redirect()->back()->with('error','Notice does not exist!');
      }

    }

    public function vacatelease(Request $req){
        // dd($req);
        $datapage['lease']=Lease::where('tenant_info_id',$req->id)->get();
        return response($datapage);
    }

    public function editnote(Request $req){

     $notice=VacateNotice::find($req->id);
     return response($notice);
    }
}
