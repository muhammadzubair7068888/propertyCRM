<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login_page()
    {
        $pageConfigs = ['blankPage' => true];

        return view('auth.login', ['pageConfigs' => $pageConfigs]);
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'email',
            'password' => 'required'
        ]);
        $user = User::whereEmail($req->email)->whereStatus('1')->first();

        if (Hash::check($req->password, $user->password)) {
            Auth::login($user);
            return redirect()->route(route_name('.home'))->with('success','Logged in successfully');
        } else {
            return redirect()->back()->with('error','User Not Found');
        }
    }

    public function logout()
    {     
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
