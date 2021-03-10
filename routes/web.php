<?php
use App\Http\Controllers\NahuelAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

//ADMIN VIEW
Auth::routes();
Route::get('/nahuel', [App\Http\Controllers\NahuelAdminController::class,'index'])->name('admin');
///WEBPAGE
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/gallery/{id}', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/Category/{category}', [HomeController::class, 'album'])->name('categoryAlbum');
