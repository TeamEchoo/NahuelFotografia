@extends('layouts.app')

@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <h2>Photo Gallery</h2>
                @if(isset($image))
            <ul>
                @foreach ($photos as $photo)
                    <li><img src="{{ asset('storage/images/' . $image->filename) }}" alt="" title=""></a></li>
                @endforeach
            </ul>
            @endif
            @if(!isset($image))
                <h1>No hay fotos para mostrar, sube tu primera foto </h1>
                <a href="{{ route('photoCreate') }}">aqui</a>
            @endif
        </div>
@endsection
