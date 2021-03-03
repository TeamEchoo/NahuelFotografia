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
        $albums= Album::where('category', 'Home')->get();
        $photos= Photo::where("album_id", $albums->id)->get();
        return view('home', compact('photos'));
    }

    // public function gallery(){

    //     // $album= Album::find($id);
    //     return view('gallery');
    // }

    // public function album($category){

    //     $album= Album::where('category', $category);
    //     return view('gallery', compact('album'));
    // }

    // public function contact(){

    //     return view('contact');
    
    // }
}
