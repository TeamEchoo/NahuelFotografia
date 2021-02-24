@extends('layouts.adminHeader')

@section('adminheader')

    <h1>Dashboard</h1>

    <form action=" {{ route( 'photoStore', $albumId ) }}"  method="post">
        
        @csrf
        
        <label for="title">Title:</label>
        <input name="title" type="text">
        

        <label for="epigraph">Epigraph:</label>
        <input name="epigraph" type="text">


        <label for="person">Person:</label>
        <input name="person" type="text">
        

        <label for="link">Link:</label>
        <input name="link" type="text">


        <label for="image_path">Picture:</label>
        <input name="image_path" type="text">


        <input type="submit" value="Submit">
        <button type="reset">Reset</button>
    </form>
    
        <a href="{{ route ('albumEdit', $albumId)}}">
            <button >Turn Back</button>
        </a>

</html>