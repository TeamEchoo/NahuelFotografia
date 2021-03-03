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
        // $albums= Album::where('category', 'Home');
        // $photos= Photo::where("album_id", 1)->get();
        return view('home');
    }

    public function gallery(){

        // $album= Album::find($id);
        return view('gallery');
    }

    public function album($category){

        $album= Album::where('category', $category);
        return view('albumGallery', compact('album'));
    }

    public function contact(){

        return view('contact');
    
    }
}
