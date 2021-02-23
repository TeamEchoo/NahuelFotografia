@extends('layouts.adminHeader')

@section('adminheader')

<body>
    <form action="{{ route('albumEdit', $album->id) }}" method="POST">
    
    @method("PUT")
    @csrf

    <label for="title"></label>
    <input name="title" type="text" value="{{$album->title}}">

    <label for="category">Category:</label>
    <select name="category" id="category">
        <option value="{{$album->category}}">{{$album->category}}</option>
        <option value="Skateboarding">Skateboarding</option>
        <option value="Portraits">Portraits</option>
    </select>

    
    <a href="{{ route( 'albumUpdate', $album->id ) }}">
        <input type="submit" value="Edit">
    </a>


        Add new Photo
    </a>


    </form>

    <a href="{{ route('admin') }}">Cancel</a>

</body>

    