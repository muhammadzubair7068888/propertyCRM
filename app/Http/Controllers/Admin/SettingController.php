<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ExtraCharges;
use App\Models\GeneralSetting;
use App\Models\LeaseSetting;
use App\Models\LeaseType;
use App\Models\PropertyAmenities;
use App\Models\PropertyType;
use App\Models\PropertyUnitType;
use App\Models\TenantSetting;
use App\Models\TenantType;
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
        $pagedata['tenantType'] = TenantType::get();
        $pagedata['leaseType'] = LeaseType::get();
        $pagedata['extraCharge'] = ExtraCharges::get();
        $pagedata['tenantSetting'] = TenantSetting::first();
        $pagedata['generalSetting'] = GeneralSetting::first();
        $pagedata['leaseSetting'] = LeaseSetting::first();

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

        try {
            $request->validate([
                'company_name' => 'required',
                'email' => 'required',
                'p_number' => 'required',
                'phy_address' => 'required',
                'postal_address' => 'required',
                'website_url' => 'required',
                'zip_code' => 'required',
            ]);
            
            $setting = GeneralSetting::find($id);
            
            $data = $request->except('_token');
            
            // Check if a new logo file has been uploaded
            if ($request->hasFile('logo')) {
                // Delete the previous logo if it exists
                if (file_exists(public_path($setting->logo))) {
                    unlink(public_path($setting->logo));
                }
                
                $file = $request->file('logo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('upload/images/', $filename);
                $data['logo'] = 'upload/images/' . $filename;
            }
        
            $setting->update($data);
            
            return redirect()->back()->with('success', 'Setting Update Successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    public function updatelease(Request $request, $id)
    {

        try {
            $request->validate([
                'lease_number_prefix' => 'required',
                'invoice_number_prefix' => 'required',
                'invoice_disclaimer' => 'required',
                'invoice_term' => 'required',
                'receipt_notes' => 'required',
                'generate_invoice' => 'required',

            ]);
            $data = $request->except('_token');


            $setting = LeaseSetting::find($id);
            $setting->delete();

            $setting->create($data);
            return redirect()->back()->with('success', 'Setting Update Successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function tenantprefixupdate(Request $request, $id)
    {
        try {
            $request->validate([
                'tenant_prefix' => 'required',
            ]);

            $data = $request->except('_token');
            $tenantpre = TenantSetting::find($id);
            $tenantpre->update($data);
            return redirect()->back()->with('success', 'Tenant Prefix Update Successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
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
        //
    }

}
