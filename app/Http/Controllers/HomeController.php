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
        $albums = Album::where('category', 'Overview')->get();
        $photos= [];

        foreach($albums as $album){
 
            $albumPhotos= $album->photos;
            array_push($photos, $albumPhotos);
            }

        $photos= collect($photos)->collapse()->all();

        return view('home', ['albums' => $albums, 'photos' => $photos]);
    }

    public function categoryAlbum($category)
    {
        
        $albums = Album::where('category', $category)->get();
        $photos= [];

        foreach($albums as $album){
 
            $albumPhotos= $album->photos;
            array_push($photos, $albumPhotos);
            }

        $photos= collect($photos)->collapse()->all();
        
        if($category == 'Editorial'){
            return view('home', ['photos' => $photos]);
        }
        
        else{
        return view('album', ['albums' => $albums, 'photos' => $photos]);
        }
        }


    public function gallery($id)
    {
        $galleryAlbum = Album::find($id);
        $photos= $galleryAlbum->photos()->get;
        return view('gallery', ['album' => $galleryAlbum, 'photos' => $photos]);
    }


    public function contact()
    {
        return view('contact');
    
    }
}
