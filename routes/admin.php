<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\NahuelAdminController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/admin', [NahuelAdminController::class,'dashboard'])->name('dashboard');

//album

