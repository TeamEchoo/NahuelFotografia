<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Photo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $album= Album::where('category', 'Home')->get();
        $photos= Photo::where('album_id', $id)->get();
        return view('home', compact('photos'));
    }


    public function contact(){

        return view('contact');
    
    }
}
