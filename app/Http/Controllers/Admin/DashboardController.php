<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $pagedata['breadcrumbs'] = [
            ['link' => "dashboard", 'name' => "Dashboard"], ['name' => "Index"]
        ];
        return view('admin.dashboard.index', $pagedata);
    }
}
