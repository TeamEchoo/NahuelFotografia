<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Image::all();
        return $image->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $image = ImageModel::latest()->first();
        return view('createimage', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $originalImage= $request->file('filename');
        // // $thumbnailImage = Image::make($originalImage);
        // // $thumbnailPath = public_path().'/thumbnail/';
        // $originalPath = public_path().'/images/';
        // $originalImage->save($originalPath.time().$originalImage->getClientOriginalName());
        // // $thumbnailImage->resize(150,150);
        // // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 
        
        // ImageModel::create([
        //         'url' => '/storage/images/' . $image
        //     ]);
            
            // $imagemodel= new ImageModel();
            // $imagemodel->filename=time().$request->getClientOriginalName();
            // $imagemodel->save();
            
            // Image::make($image);


        $request->validate([
            'filename' => 'required|image|required|mimes:jpeg,png,jpg,gif,svg'
            ]);
            
            $image = Str::random(10) . $request->file('filename')->getClientOriginalName();
            
            $route = public_path() . '/storage/images/' . $image;
            
            Image::make($request->file('filename'))
                    ->resize(1200,null,function($constraint)
                    {
                        $constraint->aspectRatio();
                    })->save($route);

                    
                return back()->with('success', 'Your images has been successfully uploaded');
                
            }
            /**
             * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
