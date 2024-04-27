<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::view('/welcome', 'welcome')->middleware('auth')->name('welcome');
Route::get('\AnimalsAdmin', [App\Http\Controllers\AnimalController::class, 'index'])->middleware('Admin');
Route::get('\Find', [App\Http\Controllers\AnimalController::class, 'index'])->middleware('User');
Route::get('\Animals', [App\Http\Controllers\AnimalController::class, 'index'])->middleware('User');
