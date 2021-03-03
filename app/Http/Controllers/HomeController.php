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
        $photos= Photo::all();
        return view('home', ['photos' => $photos, 'albums' => $albums]);
    }

    public function gallery($title){

        $album= Album::where($title)->get();
        dd($album);
        $album->$title;
        return view('gallery');
    }

    public function album($category){

        $album= Album::where('category', $category)->get();
        return view('gallery', compact('album'));
    }

    public function contact(){

        return view('contact');
    
    }
}
