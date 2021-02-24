<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/photos', function () {
    return view('photos');
});

//esto lo estoy inventando :D
// ->Route::get('/photos',[ImageController::class, 'index'])->name('photo.index');
// Route::get('/photo', [ImageController::class, 'create'])->name('photo.create');
// Route::post('/photo',[ImageController::class, 'store'])->name('photo.store');
// Route::get('/photo/{$id}',[ImageController::class, 'edit'])->name('photo.edit');
// Route::put('/photo/{$id}',[ImageController::class,'update'])->name('photo.update');
// Route::delete('/photo/{$id}',[ImageController::class,'delete'])->name('photo.delete');


//ADMIN VIEW

//album
Route::get('/admin', [AlbumController::class, 'index'])->name('admin');
Route::get('/album', [AlbumController::class, 'create'])->name('albumCreate');
Route::post('/album', [AlbumController::class, 'store'])->name('albumStore');
Route::get('/admin/{id}', [AlbumController::class, 'edit'])->name('albumEdit');
Route::put('/admin/{id}', [AlbumController::class, 'update'])->name('albumUpdate');
Route::delete('/admin/{photo}', [AlbumController::class, 'destroy'])->name('albumDelete');

// //photo
// Route::get('/album', [AdminController::class, 'index'])->name('admin');
Route::get('/album/{id}/newphoto', [PhotoController::class, 'create'])->name('photoCreate');
Route::post('/album/{id}/newphoto', [PhotoController::class, 'store'])->name('photoStore');
Route::get('/album/photo/{id}', [PhotoController::class, 'edit'])->name('photoEdit');
Route::put('/album/photo/{id}', [PhotoController::class, 'update'])->name('photoUpdate');
Route::delete('/album/photo/{photo}', [PhotoController::class, 'destroy'])->name('photoDelete');