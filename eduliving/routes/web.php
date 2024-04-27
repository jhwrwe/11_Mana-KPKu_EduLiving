<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\RouterContr;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/animals', [App\Http\Controllers\AnimalController::class, 'index']);
Route::get('/gacha/{species}', [App\Http\Controllers\UserAnimalController::class, 'gachaAnimal']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/homecopy', [App\Http\Controllers\HomeController::class, 'index2'])->name('homecopy')->middleware('auth');
Route::view('/welcome', 'welcome')->middleware('auth')->name('welcome');
Route::view('/home', 'home')->middleware('auth')->name('home');
Route::get('/animalsadmin', [App\Http\Controllers\AnimalController::class, 'index']);
Route::get('/adminanimals', [App\Http\Controllers\AnimalController::class, 'AllAnimals']);
Route::get('/adminuser', [App\Http\Controllers\HomeController::class, 'seeuser']);
Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'adminhome']);
Route::post('/quiz/check', [QuizController::class, 'check'])->name('quiz.check');
Route::get('/Find', [App\Http\Controllers\AnimalController::class, 'index'])->middleware('User');
Route::get('/Find/{id}', [App\Http\Controllers\QuizController::class, 'index']);
Route::get('\Animals', [App\Http\Controllers\AnimalController::class, 'index'])->middleware('User');
Route::get('/galeri/{species}',[App\Http\Controllers\AnimalController::class, 'showgaleri'])->middleware('auth');
Route::delete('/animal_destroy/{animal}',[AnimalController::class,'delete'])->middleware('auth')->name('delete_animal');
Route::delete('/user_destroy/{user}',[HomeController::class,'delete'])->middleware('auth')->name('delete_user');

