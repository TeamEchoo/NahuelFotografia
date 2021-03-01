<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AlbumController;

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
// Route::get('/album-create', [AdminController::class, 'create'])->name('adminCreate');
// Route::post('/album-create', [AdminController::class, 'store'])->name('photoStore');
// Route::get('/album/{id}', [AdminController::class, 'edit'])->name('adminEdit');
// Route::put('/album/{id}', [AdminController::class, 'update'])->name('adminUpdate');
// Route::delete('/album/{photo}', [AdminController::class, 'destroy'])->name('adminDelete');


//esto lo estoy inventando :D
Route::get('/photos',[ImageController::class, 'index'])->name('photo.index');
Route::get('/photo', [ImageController::class, 'create'])->name('photoCreate');
Route::post('/photo',[ImageController::class, 'store'])->name('photoStore');
Route::get('/photo/{$id}',[ImageController::class, 'edit'])->name('photoEdit');
Route::put('/photo/{$id}',[ImageController::class,'update'])->name('photoUpdate');
Route::delete('/photo/{$id}',[ImageController::class,'delete'])->name('photoDelete');