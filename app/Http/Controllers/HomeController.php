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
        $photos= Photo::all();
        return view('home',['photos' => $photos]);
    }

    public function album($category){

        $albums= Album::where('category', $category)->get();
        return view('album', ['albums' => $albums]);
    }

public function gallery(){

        // return view('gallery');
    }


    public function contact(){

        return view('contact');
    
    }
}
