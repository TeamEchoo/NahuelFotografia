<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Photo;

class NahuelAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.login');
    }

    public function loginOk()
    {
        if(! Auth()){
            return back()->flash('Wrong credentials, plese try again');
        }
        return redirect()->route('album');
    }

    // public function dashboard()
    // {
        
    //     return redir('admin.dashboardCategory');
    // }

}