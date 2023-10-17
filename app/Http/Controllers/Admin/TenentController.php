<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        return view("admin.tenent.index");
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
        return view("admin.tenent.addtenant");
    }

    public function tenantInfo(Request $request)
    {
        $tenantUser = new User();
        $tenantUser->first_name = $request->fname;
        $tenantUser->middle_name = $request->middle_name;
        $tenantUser->last_name = $request->lname;
        $tenantUser->phone_number = $request->phone_number;
        $tenantUser->email = $request->email;
        $tenantUser->registration_date = $request->date;
        $tenantUser->country = $request->country;
        $tenantUser->national_id = $request->passport;
        $tenantUser->state = $request->fname;
        $tenantUser->city = $request->city;
        $tenantUser->postal_address = $request->postal_address;
        $tenantUser->physical_address = $request->physical_address;
        $tenantUser->residential_address = $request->residential_address;
        $tenantUser->password = Hash::make($request->password);
        $tenantUser->user_type = 'tenant';
        $tenantUser->gender = $request->gender;
        $tenantUser->DOB = $request->dob;
        $tenantUser->martial_status = $request->martial_status;
        $tenantUser->postal_code = $request->postal_code;
        $tenantUser->status = 1;
        $result = $tenantUser->save();
        $user_id = User::where('email',$request->email)->pluck('id')->first();
        if($result && $user_id){
            return response()->json([
                'success' => 'success',
                'userId' => $user_id
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
