<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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
    return view('welcome');
});

Route::get('/photos', function () {
    return view('photos');
});

//esto lo estoy inventando :D
// ->Route::get('/photos',[ImageController::class, 'index'])->name('photo.index');
Route::get('/photo', [ImageController::class, 'create'])->name('photo.create');
Route::post('/photo',[ImageController::class, 'store'])->name('photo.store');
Route::get('/photo/{$id}',[ImageController::class, 'edit'])->name('photo.edit');
Route::put('/photo/{$id}',[ImageController::class,'update'])->name('photo.update');
Route::delete('/photo/{$id}',[ImageController::class,'delete'])->name('photo.delete');