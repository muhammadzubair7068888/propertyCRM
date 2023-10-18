<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TenantInfo;
use App\Models\TenantType;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class TenentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $pagedata['tenants'] = User::whereUserType('tenant')->get(); 
        return view("admin.tenent.index",$pagedata);
    }
    public function view()
    {
       
        return view('admin.tenent.view.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagedata['types']= TenantType::get();
        return view("admin.tenent.addtenant",$pagedata);
    }

    public function tenantInfo(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // dd($req);
       $req->validate([
        'tenant_type'=>'required',
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'registration_date' => 'required|date',
        'national_id' => 'required',
        'martial_status' => 'required',
        'phone_number' => 'required',
        'email' => 'required|email|unique:users,email',
        'country' => 'required',
        'city' => 'required',
        'postal_code' => 'required',
        'postal_address' => 'required',
        'physical_address' => 'required',
        'user_type' => 'required',
        'password' => 'required|confirmed',

        'kin_name'=>'required',
        'kin_phone_number'=>'required',
        'kin_relation'=>'required',

        'kin_emergency_name'=>'required',
        'kin_emergency_phone_number'=>'required',
        'kin_emergency_emial'=>'required|email|unique:tenant_infos,kin_emergency_emial',
        'kin_emergency_relation'=>'required',

        'kin_emergency_postal_address'=>'required',
        'kin_emergency_physical_address'=>'required',
        'employment_status'=>'required',

        'employment_position'=>'required',
        'employment_contact_phone'=>'required',
        'employment_contact_email'=>'required|email|unique:tenant_infos,employment_contact_email',

        'employment_postal_address'=>'required',
        'employment_physical_address'=>'required',
        'business_name'=>'required',
        'licence_name'=>'required',
        'tax_id'=>'required',
        'bussiness_address'=>'required',
        'bussiness_industry'=>'required',
        'bussiness_description'=>'required',
    ]);
    //    $data = $req->except('_token');
    //    User::create($data);


    

        $tenant =  User::create([
        'first_name'=>$req->first_name,
        'middle_name'=>$req->middle_name,
        'last_name'=>$req->last_name,
        'gender'=>$req->gender,
        'registration_date'=>$req->registration_date,
        'national_id'=>$req->national_id,
        'martial_status'=>$req->martial_status,
        'phone_number'=>$req->phone_number,
        'email'=>$req->email,
        'country'=>$req->country,
        'city'=>$req->city,
        'postal_code'=>$req->postal_code,
        'postal_address'=>$req->postal_address,
        'physical_address'=>$req->physical_address,
        'user_type'=>$req->user_type,
        'password'=>Hash::make($req->password),
       ]);

       TenantInfo::insert([
        'user_id'=>$tenant->id,
        'tenant_type'=>$req->tenant_type,
        'kin_name'=>$req->kin_name,
        'kin_phone_number'=>$req->kin_phone_number,
        'kin_relation'=>$req->kin_relation,
        'kin_emergency_name'=>$req->kin_emergency_name,
        'kin_emergency_phone_number'=>$req->kin_emergency_phone_number,
        'kin_emergency_emial'=>$req->kin_emergency_emial,
        'kin_emergency_relation'=>$req->kin_emergency_relation,
        'kin_emergency_postal_address'=>$req->kin_emergency_postal_address,
        'kin_emergency_physical_address'=>$req->kin_emergency_physical_address,
        'employment_status'=>$req->country,
        'employment_position'=>$req->employment_position,
        'employment_contact_phone'=>$req->employment_contact_phone,
        'employment_contact_email'=>$req->employment_contact_email,
        'employment_postal_address'=>$req->employment_postal_address,
        'employment_physical_address'=>$req->employment_physical_address,
        'business_name'=>$req->business_name,
        'licence_name'=>$req->licence_name,
        'tax_id'=>$req->tax_id,
        'bussiness_address'=>$req->bussiness_address,
        'bussiness_industry'=>$req->bussiness_industry,
        'bussiness_description'=>$req->bussiness_description,
        'created_at'=>now(),
        'updated_at'=>now(),
       ]);

       return redirect()->route('admin.tenant.index')->with('success','Tenant added successfully');
       
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
