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

//esto lo estoy inventando :D
Route::get('/photos',[ImageController::class, 'index'])->name('photo.index');
Route::get('/photo', [ImageController::class, 'create'])->name('photoCreate');
Route::post('/photo',[ImageController::class, 'store'])->name('photoStore');
Route::get('/photo/{$id}',[ImageController::class, 'edit'])->name('photoEdit');
Route::put('/photo/{$id}',[ImageController::class,'update'])->name('photoUpdate');
Route::delete('/photo/{$id}',[ImageController::class,'delete'])->name('photoDelete');