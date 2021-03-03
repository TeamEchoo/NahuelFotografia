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
Route::get('/album/{id}', [AlbumController::class, 'edit'])->name('albumEdit');
Route::put('/album/{id}', [AlbumController::class, 'update'])->name('albumUpdate');
Route::delete('/album/{photo}', [AlbumController::class, 'destroy'])->name('albumDelete');


// //esto lo estoy inventando :D
// Route::get('/photos',[ImageController::class, 'index'])->name('photo.index');
// Route::get('/photo', [ImageController::class, 'create'])->name('photoCreate');
// Route::post('/photo',[ImageController::class, 'store'])->name('photoStore');
// Route::get('/photo/{$id}',[ImageController::class, 'edit'])->name('photoEdit');
// Route::put('/photo/{$id}',[ImageController::class,'update'])->name('photoUpdate');
// Route::delete('/photo/{$id}',[ImageController::class,'delete'])->name('photoDelete');


Route::get('/album/{id}/newphoto', [PhotoController::class, 'create'])->name('photoCreate');
Route::post('/album/{id}/newphoto', [PhotoController::class, 'store'])->name('photoStore');
Route::get('/album/photo/{id}', [PhotoController::class, 'edit'])->name('photoEdit');
Route::put('/album/photo/{id}', [PhotoController::class, 'update'])->name('photoUpdate');
Route::delete('/album/photoD/{photo}', [PhotoController::class, 'destroy'])->name('photoDelete');

///WEBPAGE

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{skateboarding}', [HomeController::class, 'album'])->name('skateboardAlbum');
Route::get('/{portrait}', [HomeController::class, 'album'])->name('portraitAlbum');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');