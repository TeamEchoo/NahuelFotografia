<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


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
            'filename' => 'required|image|required|mimes:jpeg,png,jpg,gif,svg'
            ]);
            
        $image = Str::random(10) . $request->file('filename')->getClientOriginalName();
        
        Photo::create(['filename' => '/storage/images/' . $image ]);    
                
        $route = public_path() . '/storage/images/' . $image;
                
        Image::make($request->file('filename'))->save($route);
                
        $photo = Photo::create($request->all());
        $photo->album_id = $album;
        $photo->save();
        return redirect()->route('albumEdit', $album);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $dBFactory
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoFactory $dBFactory)
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
        $photo= Photo::find($id);
        $photo->update($request->all());
        $album= $photo->album_id;
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
            $photo= Photo::find($id);
            $photo->delete();
            return redirect()->route('albumEdit', $photo->album_id);
    }
}
