<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Auth;

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




Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'App\Http\Controllers\MessagesController@store');







Route::get('/photos', function () {
    return view('photos');
});

//esto lo estoy inventando :D
Route::get('/photos',[ImageController::class, 'index'])->name('photoIndex');
Route::get('/photo', [ImageController::class, 'create'])->name('photoCreate');
Route::post('/photo',[ImageController::class, 'store'])->name('photoStore');
Route::get('/photo/{$id}',[ImageController::class, 'edit'])->name('photoEdit');
Route::put('/photo/{$id}',[ImageController::class,'update'])->name('photoUpdate');
Route::delete('/photo/{$id}',[ImageController::class,'delete'])->name('photoDelete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
