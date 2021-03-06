<?php
use App\Http\Controllers\NahuelAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/nahuel', [NahuelAdminController::class,'index'])->name('login');
Route::post('/nahuel', [NahuelAdminController::class,'loginOk'])->name('loginOk');


///WEBPAGE
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/Contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/Gallery/{id}', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/Editorial', [HomeController::class, 'editorial'])->name('editorial');
Route::get('/More', [HomeController::class, 'more'])->name('more');


//ADMIN VIEW


Auth::routes();

Route::middleware(['auth'])->group(function () {
    
    //album
    Route::get('/admin', [AlbumController::class, 'index'])->name('album');
    Route::get('/newalbum', [AlbumController::class, 'create'])->name('albumCreate');
    Route::post('/album', [AlbumController::class, 'store'])->name('albumStore');
    Route::get('/album/{id}', [AlbumController::class, 'edit'])->name('albumEdit');
    Route::put('/album/{id}', [AlbumController::class, 'update'])->name('albumUpdate');
    Route::delete('/album/{id}', [AlbumController::class, 'destroy'])->name('albumDelete');
    
    //PHOTOS
    Route::get('/album/{id}/newphoto', [PhotoController::class, 'create'])->name('photoCreate');
    Route::post('/album/{id}/newphoto', [PhotoController::class, 'store'])->name('photoStore');
    Route::get('/album/photo/{id}', [PhotoController::class, 'edit'])->name('photoEdit');
    Route::put('/album/photo/{id}', [PhotoController::class, 'update'])->name('photoUpdate');
    Route::delete('/album/photo/{id}', [PhotoController::class, 'destroy'])->name('photoDelete');
});

