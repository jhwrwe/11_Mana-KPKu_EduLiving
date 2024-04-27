<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::view('/welcome', 'welcome')->middleware('auth')->name('welcome');
Route::get('/animals', [App\Http\Controllers\AnimalController::class, 'index']);
