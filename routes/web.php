<?php
use App\Http\Controllers\NahuelAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
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
Route::get('/admin', [App\Http\Controllers\NahuelAdminController::class,'index'])->name('admin');
Route::get('/admin/album', [App\Http\Controllers\NahuelAdminController::class,'dashboard'])->name('dashboard');

///WEBPAGE
Route::get('/', [HomeController::class, 'home'], 'Overview')->name('home');
Route::get('/Category/{$category}', [HomeController::class, 'editorial'])->name('editorial');
Route::get('/Category/{category}', [HomeController::class, 'more'])->name('more');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/gallery/{$id}', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/album', [AlbumController::class, 'index'])->name('album');
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
