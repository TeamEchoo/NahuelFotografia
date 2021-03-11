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
    public function home()
    {
        $albums= Album::where('category','Overview')->get();
        $photos= [];
        foreach($albums as $album){
            foreach($album->photos as $photo){    
                array_push($photos, $photo);
            }
        };
      
        return view('home',['photos' => $photos]);
    }

    public function editorial()
    {
        $albums= Album::where('category', 'Editorial')->get();
        $photos= [];
        foreach($albums as $album){
            foreach($album->photos as $photo){    
                array_push($photos, $photo);
            }
        };
      
        return view('home',['photos' => $photos]);
    }

    public function more($category)
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
