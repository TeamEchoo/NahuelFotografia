<<<<<<< HEAD
@extends("layouts.navBar")

@section("nav")
@endsection
    <h2>Photo Gallery</h2>
    @if(isset($image) ? $image->filename : '')
=======
@extends('layouts.app')

@section('content')
    <div class="container">
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
        
        
        <h2>Photo Gallery</h2>
        
>>>>>>> Routing
        <ul>
          @foreach ($images as $image)
          
          <li><img src="{{ asset( $image->filename ) }}" alt="" title=""></a></li>
          
          @endforeach
        </ul>
        
        @if(!isset($image))
        <h1>no hay fotos</h1>
        @endif
    </div>
@endsection