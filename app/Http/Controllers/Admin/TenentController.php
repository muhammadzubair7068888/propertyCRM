<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TenantInfo;
use App\Models\TenantType;
use App\Models\User;
use App\Models\Payment;
use App\Models\Lease;
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

        $req->validate([
            'form.tenantInfo.tenant_type_id' => 'required',
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
        ], [
            // Custom error messages for each validation rule
            'form.tenantInfo.tenant_type_id.required' => 'Required',
            'form.user.status.required' => 'Required',
            'form.user.first_name.required' => 'Required',
            'form.user.middle_name.required' => 'Required',
            'form.user.last_name.required' => 'Required',
            'form.user.gender.required' => 'Required',
            'form.user.registration_date.required' => 'Required',
            'form.user.national_id.required' => 'Required',
            'form.user.martial_status.required' => 'Required',
            'form.user.phone_number.required' => 'Required',
            'form.user.email.required' => 'Required',
            'form.user.country.required' => 'Required',
            'form.user.city.required' => 'Required',
            'form.user.postal_code.required' => 'Required',
            'form.user.physical_address.required' => 'Required',
            'form.user.postal_address.required' => 'Required',
            'form.user.user_type.required' => 'Required',
            'form.user.password.required' => 'Required',
            'form.tenantInfo.kin_name.required' => 'required',

            'form.tenantInfo.kin_phone_number.required' => 'required',
            'form.tenantInfo.kin_relation.required' => 'required',

            'form.tenantInfo.kin_emergency_name.required' => 'required',
            'form.tenantInfo.kin_emergency_phone_number.required' => 'required',
            'form.tenantInfo.kin_emergency_emial.required' => 'required',
            'form.tenantInfo.kin_emergency_relation.required' => 'required',

            'form.tenantInfo.kin_emergency_postal_address.required' => 'required',
            'form.tenantInfo.kin_emergency_physical_address.required' => 'required',
            'form.tenantInfo.employment_status.required' => 'required',

            'form.tenantInfo.employment_position.required' => 'required',
            'form.tenantInfo.employment_contact_phone.required' => 'required',
            'form.tenantInfo.employment_contact_email.required' => 'required',

            'form.tenantInfo.employment_postal_address.required' => 'required',
            'form.tenantInfo.employment_physical_address.required' => 'required',
            'form.tenantInfo.business_name.required' => 'required',
            'form.tenantInfo.licence_name.required' => 'required',
            'form.tenantInfo.tax_id.required' => 'required',
            'form.tenantInfo.bussiness_address.required' => 'required',
            'form.tenantInfo.bussiness_industry.required' => 'required',
            'form.tenantInfo.bussiness_description.required' => 'required',
        ]);


        $data = $req->except('_token', 'password_confirmation');
        $userTenant = $data['form']['user'];
        $tenantInfo = $data['form']['tenantInfo'];

        $user = User::create($userTenant);
        $tenantInfo['user_id'] = $user->id;

        TenantInfo::create($tenantInfo);
        // $message = 'Your Tenant account has been created successfully!';
        // sendOnfonMessage($req->form['user']['phone_number'], $message);
        return redirect()->route('admin.tenant.index')->with('success', 'Tenant added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagedata['breadcrumbs'] = [
            ['link' => "admin/tenants", 'name' => "Tenant"], ['name' => "View"]
        ];
        $pagedata['tenant'] = TenantInfo::find($id);
        $pagedata['lease']=Lease::all();
        $pagedata['payment']=Payment::all();
        // = $tenant->user;

        return view('admin.tenent.view.index', $pagedata);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pagedata['types'] = TenantType::get();
        $pagedata['tenant'] = TenantInfo::find($id);
        return view('admin.tenent.addtenant', $pagedata);
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

            $request->validate([
                'form.tenantInfo.tenant_type_id' => 'required',
                'form.user.status' => 'required',
                'form.user.first_name' => 'required',
                'form.user.middle_name' => 'required',
                'form.user.last_name' => 'required',
                'form.user.gender' => 'required',
                'form.user.registration_date' => 'required|date',
                'form.user.national_id' => 'required',
                'form.user.martial_status' => 'required',
                'form.user.phone_number' => 'required',
                'form.user.country' => 'required',
                'form.user.city' => 'required',
                'form.user.postal_code' => 'required',
                'form.user.postal_address' => 'required',
                'form.user.physical_address' => 'required',
                'form.user.user_type' => 'required',

                'form.tenantInfo.kin_name' => 'required',
                'form.tenantInfo.kin_phone_number' => 'required',
                'form.tenantInfo.kin_relation' => 'required',

                'form.tenantInfo.kin_emergency_name' => 'required',
                'form.tenantInfo.kin_emergency_phone_number' => 'required',
                'form.tenantInfo.kin_emergency_relation' => 'required',

                'form.tenantInfo.kin_emergency_postal_address' => 'required',
                'form.tenantInfo.kin_emergency_physical_address' => 'required',
                'form.tenantInfo.employment_status' => 'required',

                'form.tenantInfo.employment_position' => 'required',
                'form.tenantInfo.employment_contact_phone' => 'required',

                'form.tenantInfo.employment_postal_address' => 'required',
                'form.tenantInfo.employment_physical_address' => 'required',
                'form.tenantInfo.business_name' => 'required',
                'form.tenantInfo.licence_name' => 'required',
                'form.tenantInfo.tax_id' => 'required',
                'form.tenantInfo.bussiness_address' => 'required',
                'form.tenantInfo.bussiness_industry' => 'required',
                'form.tenantInfo.bussiness_description' => 'required',
            ],[
                'form.tenantInfo.tenant_type_id.required' => 'required',
                'form.user.status.required' => 'this field is required',
                'form.user.first_name.required' => 'this field is required',
                'form.user.middle_name.required' => 'this field is required',
                'form.user.last_name.required' => 'this field is required',
                'form.user.gender.required' => 'this field is required',
                'form.user.registration_date.required' => 'this field is required|date',
                'form.user.national_id.required' => 'this field is required',
                'form.user.martial_status.required' => 'this field is required',
                'form.user.phone_number.required' => 'this field is required',
                'form.user.country.required' => 'this field is required',
                'form.user.city.required' => 'this field is required',
                'form.user.postal_code.required' => 'this field is required',
                'form.user.postal_address.required' => 'this field is required',
                'form.user.physical_address.required' => 'this field is required',
                'form.user.user_type.required' => 'this field is required',

                'form.tenantInfo.kin_name.required' => 'this field is required',
                'form.tenantInfo.kin_phone_number.required' => 'this field is required',
                'form.tenantInfo.kin_relation.required' => 'this field is required',

                'form.tenantInfo.kin_emergency_name.required' => 'this field is required',
                'form.tenantInfo.kin_emergency_phone_number.required' => 'this field is required',
                'form.tenantInfo.kin_emergency_relation.required' => 'this field is required',

                'form.tenantInfo.kin_emergency_postal_address.required' => 'this field is required',
                'form.tenantInfo.kin_emergency_physical_address.required' => 'this field is required',
                'form.tenantInfo.employment_status.required' => 'this field is required',

                'form.tenantInfo.employment_position.required' => 'this field is required',
                'form.tenantInfo.employment_contact_phone' => 'required',

                'form.tenantInfo.employment_postal_address' => 'required',
                'form.tenantInfo.employment_physical_address' => 'required',
                'form.tenantInfo.business_name' => 'required',
                'form.tenantInfo.licence_name' => 'required',
                'form.tenantInfo.tax_id' => 'required',
                'form.tenantInfo.bussiness_address' => 'required',
                'form.tenantInfo.bussiness_industry' => 'required',
                'form.tenantInfo.bussiness_description' => 'required',
            ]);
            $data = $request->except('_token','form.user.email','form.tenantInfo.user_id','form.user.status');
            $tenantInfo = $data['form']['tenantInfo'];
            $userTenant = $data['form']['user'];
            $tenant = TenantInfo::find($id);
            $tenant->update($tenantInfo);
            User::find($tenant->user_id)->update($userTenant);
            return redirect()->route('admin.tenant.index')->with("success", 'Tenant Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $tenant = User::find($id);
        if ($tenant) {
            $tenant->delete();
            return redirect()->route('admin.tenant.index')->with('success', 'Tenant Delete Successfully');
        } else {
            return redirect()->route('admin.tenant.index')->with("error", "Tenant Not Found ");
        }
    }



    public function block($id)
    {
        $tenant = User::find($id);
        if ($tenant) {
            $tenant->update(['status' => '2']);
            return redirect()->back()->with('success', 'Tenant Blocked successfully.');
        } else {
            return redirect()->back()->with("success", "Not Found!");
        }
    }

    public function unblock($id)
    {
        $tenant = User::find($id);
        if ($tenant) {
            $tenant->update(['status' => '1']);
            return redirect()->back()->with('success', "Tenant Unblocked Successfully");
        } else {
            return redirect()->back()->with('success', "Tenant Unblocked Successfully");
        }
    }

}
