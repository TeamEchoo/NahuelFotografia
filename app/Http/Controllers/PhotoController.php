<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;


class AdminController extends Controller
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
    public function create()
    {
        return view('admin.createPhoto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = Photo::create($request->all());

        $photo->save();
        return redirect()->route('admin');
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
        return redirect()->route('admin');
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
        return redirect()->route('admin');
    }
}
