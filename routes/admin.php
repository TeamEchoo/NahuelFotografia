<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NahuelAdminController;


Route::get('/',[NahuelAdminController::class, 'index'])->name('nahuelIndex');

//ALBUMS



