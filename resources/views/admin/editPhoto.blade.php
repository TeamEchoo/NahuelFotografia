@extends('layouts.adminHeader')

@section('adminheader')

<form action=" {{ route( 'photoEdit', $photo->id ) }}"  method="POST">
        
        @method('PUT')
        @csrf

        <label for="title">Title:</label>
        <input name="title" type="text" value="{{ $photo->title }}">
        
        <label for="epigraph">Epigraph:</label>
        <input name="epigraph" type="text" value="{{ $photo->epigraph }}">


        <label for="person">Person:</label>
        <input name="person" type="text" value="{{ $photo->person }}">
        
        <label for="link">Link:</label>
        <input name="link" type="text" value="{{ $photo->link }}">

        <label for="image_path">Picture:</label>
        <input name="image_path" type="text" value="{{ $photo->picture }}">
        
        <a href="{{ route( 'photoUpdate', $photo->id) }}">
        <input type="submit" value="Save">
        </a>
        
        <button type="reset">Reset</button>
    </form>
    
        <a href="{{ route ('albumEdit', $photo->album_id)}}">
            <button >Turn Back</button>
        </a>