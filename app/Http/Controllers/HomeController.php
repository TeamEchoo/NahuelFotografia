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
        $album= Album::where('category','Overview')->first();
        $photos= $album->photos;
        
        return view('home',['photos' => $photos]);
    }

    public function editorial($category)
    {
            
        $album= Album::where('category', $category)->first();
        $photos= $album->photos;
        return view('home',['photos' => $photos]);
    }


    public function more($category){
        
        $albums = Album::where('category', $category)->get();
        $photos= [];
        foreach($albums as $album){
 
            $albumPhotos= $album->photos;
            foreach ($albumPhotos as $photo){
            array_push($photos, $photo);
        }
        }

        return view('album', ['albums' => $albums, 'photos' => $photos]);
        }


    public function gallery($id)
    {
        $galleryAlbum = Album::find($id);
        $photos= $album->photos()->get();
        return view('gallery', ['album' => $galleryAlbum, 'photos' => $photos]);
    }


    public function contact()
    {
        return view('contact');
    
    }
}
