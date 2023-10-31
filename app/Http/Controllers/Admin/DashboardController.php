<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyExtraCharges;
use App\Models\PropertyLateFee;
use App\Models\PropertyPaymentMethod;
use App\Models\PropertyUnit;
use App\Models\Property;
use App\Models\PropertyUtility;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $pagedata['breadcrumbs'] = [
            ['link' => "dashboard", 'name' => "Dashboard"], ['name' => "Index"]
        ];
        $pagedata['user']=User::all();
        $pagedata['totalUser']=User::get()->count();
        $pagedata['property']=Property::get()->count();
        return view('admin.dashboard.index', $pagedata);
    }

    public function fetchUnits(Request $request) {
        $data['units'] = PropertyUnit::where("property_id", $request->id)->get();
        $data['extra_charges']=PropertyExtraCharges::with('chargeName')->where("property_id", $request->id)->get();
        $data['late_fee']=PropertyLateFee::where('property_id',$request->id)->get();
        $data['utility']=PropertyUtility::with('util_name')->where('property_id',$request->id)->get();
        $data['payment']=PropertyPaymentMethod::with('payment_name')->where('property_id',$request->id)->get();
        return response($data);
    }

public function fetchPayment(Request $request){
    $data['payment']=Payment::with(["payment_method",'tenant_info.user'])->find($request->id);
    return response($data);
}
}
