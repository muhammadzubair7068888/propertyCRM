<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
   
    //    $req->validate([
    //     'first_name' => 'required',
    //     'middle_name' => 'required',
    //     'last_name' => 'required',
    //     'gender' => 'required',
    //     'phone_number' => 'required',
    //     'email' => 'required|email|unique:users,email',
    //     'registration_date' => 'required|date',
    //     'country' => 'required',
    //     'national_id' => 'required',
    //     'state' => 'required',
    //     'city' => 'required',
    //     'postal_address' => 'required',
    //     'physical_address' => 'required',
    //      'password' => 'required|confirmed',
    //    ]);
    //    $data = $req->except('_token', 'password_confirmation','tenant-type');
    //    $data['password'] = Hash::make($req->password);

       $user = User::create([
        'first_name'=>$req->first_name,
        'middle_name'=>$req->middle_name,
        'last_name'=>$req->last_name,
        'gender'=>$req->gender,
        'phone_number'=>$req->phone_number,
        'email'=>$req->email,
        'registration_date'=>$req->registration_date,
        'country'=>$req->country,
        'national_id'=>$req->national_id,
        'state'=>$req->state,
        'city'=>$req->city,
        'postal_address'=>$req->postal_address,
        'physical_address'=>$req->physical_address,
        'password'=>Hash::make($req->password),
       ]);

       return redirect()->route('admin.tenant.index')->with('success','Landlord added successfully');
       
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
