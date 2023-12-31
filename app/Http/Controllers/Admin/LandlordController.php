<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pagedata['breadcrumbs'] = [
            ['link' => "admin/landlord", 'name' => "Landlords"], ['name' => "home"]
        ];

        $pagedata['users'] = User::whereUserType('landlord')->get();
        return view('admin.landlord.index', $pagedata);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagedata['breadcrumbs'] = [
            ['link' => "admin/landlord", 'name' => "Landlords"], ['name' => "Create"]
        ];
        return view('admin.landlord.create', $pagedata);
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
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email|unique:users,email',
                'registration_date' => 'required|date',
                'country' => 'required',
                'national_id' => 'required',
                'state' => 'required',
                'city' => 'required',
                'postal_address' => 'required',
                'physical_address' => 'required',
                'residential_address' => 'required',
                'password' => 'required|confirmed',

            ]);
            $data = $req->except('_token');
            User::create($data);
            $message = 'Your Landlord account has been created successfully!';
            if ($req->has('phone_number')) {
                sendOnfonMessage($req->phone_number, $message);
            }
            return redirect()->route('admin.landlord.index')->with('success', 'Landlord added successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
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
        $pagedata['breadcrumbs'] = [
            ['link' => "admin/landlord", 'name' => "Landlords"], ['name' => "View"]
        ];

        $pagedata['user'] = User::find($id);
        return view('admin.landlord.view.index', $pagedata);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagedata['breadcrumbs'] = [
            ['link' => "admin/landlord", 'name' => " Landlords"], ['name' => "Edit"]
        ];

        $pagedata['user'] = User::find($id);
        return view('admin.landlord.create', $pagedata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $data = $req->except('_token');
        $user = User::find($id)->update($data);
        if ($user) {
            return redirect()->route('admin.landlord.index')->with('success', 'Record updated successfully');
        } else {
            return redirect()->back()->with('error', 'User not found');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
    public function block($id)
    {
        $user = User::find($id)->update(['status' => '2']);
        if ($user) {
            return redirect()->back()->with('success', 'User blocked successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
    public function unblock($id)
    {
        $user = User::find($id)->update(['status' => '1']);
        if ($user) {
            return redirect()->back()->with('success', 'User unblocked successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
}
