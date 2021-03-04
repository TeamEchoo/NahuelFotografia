<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/photos', function () {
    return view('photos');
});


//ADMIN VIEW

//album

Route::get('/album', [AlbumController::class, 'index'])->name('album');
Route::get('/newalbum', [AlbumController::class, 'create'])->name('albumCreate');
Route::post('/album', [AlbumController::class, 'store'])->name('albumStore');
Route::get('/{album->title}', [AlbumController::class, 'edit'])->name('albumEdit');
Route::put('/{album->title}', [AlbumController::class, 'update'])->name('albumUpdate');
Route::delete('/{album->title}', [AlbumController::class, 'destroy'])->name('albumDelete');

//PHOTOS
Route::get('/{album->title}/newphoto', [PhotoController::class, 'create'])->name('photoCreate');
Route::post('/{album->title}/newphoto', [PhotoController::class, 'store'])->name('photoStore');
Route::get('/{album->title}/photo/{id}', [PhotoController::class, 'edit'])->name('photoEdit');
Route::put('/{album->title}/photo/{id}', [PhotoController::class, 'update'])->name('photoUpdate');
Route::delete('/{album->title}/{photo}', [PhotoController::class, 'destroy'])->name('photoDelete');

///WEBPAGE
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{category}', [HomeController::class, 'album'])->name('categoryAlbum');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


