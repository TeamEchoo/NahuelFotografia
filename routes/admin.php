<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NahuelAdminController;


Route::get('/', function () {
    return view('auth.login');
})->name('login');

//ALBUMS



