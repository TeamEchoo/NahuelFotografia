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
        $albums= Album::where('category', 'Home');
        $photos=[];
        foreach($albums as $album){
            $photo= Photo::where("album_id", $album->id)->get();
            array_push($photos, $photo);
        }
        return view('home', compact('photos'));
    }


    public function contact(){

        return view('contact');
    
    }
}
