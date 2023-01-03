<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

Route::get('/', function () {
    return view('welcome');
});

route::resource('artikel',postController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
