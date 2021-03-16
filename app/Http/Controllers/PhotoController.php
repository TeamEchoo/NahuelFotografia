<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos= Photo::all();
        return view('admin.photoDashboard', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album)
    {
        $albumId= $album;
        return view('admin.createPhoto', compact('albumId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $album)
    {
        $request->validate([
            'filename' => 'required|image|required|mimes:jpeg,png,jpg,gif,svg',
            
            ]);
        
        $image = time() . $request->file('filename')->getClientOriginalName();
        
        $photo = Photo::create([
            'title' => $request->title,
            'epigraph' => $request->epigraph,
            'person' => $request->person,
            'link' => $request->link,
            'filename' => '\storage\images/' . $image,
            'cover_image' => $request->has('cover_image'),
            'album_id' => $album
            ]);    
            
        $path = public_path() . '\storage\images/' . $image;
        Image::make($request->file('filename'))->save($path);
            
        $photo->save();

        return redirect()->route('albumEdit', $album);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $dBFactory
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $dBFactory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);
        return view('admin.editPhoto', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $dBFactory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);
        
        $photo->update([
            'title' => $request->title,
            'epigraph' => $request->epigraph,
            'person' => $request->person,
            'link' => $request->link,
            'cover_image' => $request->has('cover_image')
            ]);
            
        if($request->hasfile('filename')){
                
            $photo->photoDeleteFromStore();
            $image = time() . $request->file('filename')->getClientOriginalName();
            $photo->filename=  '\storage\images/' . $image;
            $photo->save();
                
            $path = public_path() . '\storage\images/' . $image;
            Image::make($request->file('filename'))->save($path);
        }
            
        else{
            $photo->filename = $photo->filename;
        }
        
        $album = $photo->album_id;
        return redirect()->route('albumEdit', $album);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $dBFactory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);

        $photo->photoDeleteFromStore();

        $photo->delete();

        return redirect()->route('albumEdit', $photo->album_id);
    }
}
