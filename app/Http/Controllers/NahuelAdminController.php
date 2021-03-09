<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class NahuelAdminController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        if(! Auth()){
            return back()->flash('Wrong credentials, plese try again');
        }
        return view('admin.adminDashboard', compact('albums'));
    }

}