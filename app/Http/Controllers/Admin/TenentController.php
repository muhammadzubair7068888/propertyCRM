<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TenantInfo;
use App\Models\TenantType;
use App\Models\User;
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
        $pagedata['tenants'] = TenantInfo::whereHas('user', function ($query) {
            $query->whereUserType('tenant');
        })->get();
        return view("admin.tenent.index", $pagedata);
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
        $pagedata['types'] = TenantType::get();
        return view("admin.tenent.addtenant", $pagedata);
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
        try {
            $req->validate([
                'form.tenantInfo.tenant_type' => 'required',
                'form.user.status' => 'required',
                'form.user.first_name' => 'required',
                'form.user.middle_name' => 'required',
                'form.user.last_name' => 'required',
                'form.user.gender' => 'required',
                'form.user.registration_date' => 'required|date',
                'form.user.national_id' => 'required',
                'form.user.martial_status' => 'required',
                'form.user.phone_number' => 'required',
                'form.user.email' => 'required|email|unique:users,email',
                'form.user.country' => 'required',
                // 'form.user.state' => 'required',
                'form.user.city' => 'required',
                'form.user.postal_code' => 'required',
                'form.user.postal_address' => 'required',
                'form.user.physical_address' => 'required',
                'form.user.user_type' => 'required',
                'form.user.password' => 'required|confirmed',

                'form.tenantInfo.kin_name' => 'required',
                'form.tenantInfo.kin_phone_number' => 'required',
                'form.tenantInfo.kin_relation' => 'required',

                'form.tenantInfo.kin_emergency_name' => 'required',
                'form.tenantInfo.kin_emergency_phone_number' => 'required',
                'form.tenantInfo.kin_emergency_emial' => 'required|email|unique:tenant_infos,kin_emergency_emial',
                'form.tenantInfo.kin_emergency_relation' => 'required',

                'form.tenantInfo.kin_emergency_postal_address' => 'required',
                'form.tenantInfo.kin_emergency_physical_address' => 'required',
                'form.tenantInfo.employment_status' => 'required',

                'form.tenantInfo.employment_position' => 'required',
                'form.tenantInfo.employment_contact_phone' => 'required',
                'form.tenantInfo.employment_contact_email' => 'required|email|unique:tenant_infos,employment_contact_email',

                'form.tenantInfo.employment_postal_address' => 'required',
                'form.tenantInfo.employment_physical_address' => 'required',
                'form.tenantInfo.business_name' => 'required',
                'form.tenantInfo.licence_name' => 'required',
                'form.tenantInfo.tax_id' => 'required',
                'form.tenantInfo.bussiness_address' => 'required',
                'form.tenantInfo.bussiness_industry' => 'required',
                'form.tenantInfo.bussiness_description' => 'required',
            ]);
            $data = $req->except('_token','password_confirmation');
            $userTenant = $data['form']['user'];
            $tenantInfo = $data['form']['tenantInfo'];
           
            $user = User::create($userTenant);
            $tenantInfo['user_id'] = $user->id;

            TenantInfo::create($tenantInfo);

            return redirect()->route('admin.tenant.index')->with('success', 'Tenant added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
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
