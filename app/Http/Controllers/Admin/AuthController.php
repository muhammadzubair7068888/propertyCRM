<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_basic()
    {
        $pageConfigs = ['blankPage' => true];

        return view('auth/auth-login', ['pageConfigs' => $pageConfigs]);
    }
}
