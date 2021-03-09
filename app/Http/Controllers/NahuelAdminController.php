<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NahuelAdminController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        if(! Auth()){
            return back()->with('Wrong credentials, plese try again');
        }
        return view('admin.adminDashboard');
    }

}