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
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $albums= Album::where('category', 'Overview');
        $photos= [];
        foreach($albums as $album){
            array_push($photos, $album->photos());
        }

        return view('home',['photos' => $photos]);
    }

    public function album($category)
    {

        $albums= Album::where('category', $category)->get();
        return view('album', ['albums' => $albums]);
    }

    public function gallery($id)
    {

        $album = Album::find($id);
        $photos= $album->photos()->get();
        return view('gallery', ['album' => $album, 'photos' => $photos]);
    }


    public function contact()
    {

        
        return view('contact');
    
    }
}
