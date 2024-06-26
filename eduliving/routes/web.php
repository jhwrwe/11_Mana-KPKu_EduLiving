<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\RouterContr;

Route::get('/', function () {
    return view('home');
})->name('zero')->middleware('auth');;

Auth::routes();
Route::get('/', function () { return view('home');  });

Route::get('/animals', [App\Http\Controllers\AnimalController::class, 'index']);
Route::get('/gacha/{species}', [App\Http\Controllers\UserAnimalController::class, 'gachaAnimal'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homecopy', [App\Http\Controllers\HomeController::class, 'index2'])->name('homecopy')->middleware('auth');
Route::view('/welcome', 'welcome')->middleware('auth')->name('welcome');
Route::view('/home', 'home')->middleware('auth')->name('home');
Route::get('/animalsadmin', [App\Http\Controllers\AnimalController::class, 'index'])->middleware('auth');
Route::get('/adminanimals', [App\Http\Controllers\AnimalController::class, 'AllAnimals'])->middleware('auth')->name('seeallanminalss');
Route::get('/adminuser', [App\Http\Controllers\HomeController::class, 'seeuser'])->middleware('auth');;
Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'adminhome'])->middleware('auth');
Route::post('/quiz/check', [QuizController::class, 'check'])->name('quiz.check')->middleware('auth');
Route::get('/Find', [App\Http\Controllers\AnimalController::class, 'index'])->middleware('auth');
Route::get('/Find/{id}', [App\Http\Controllers\QuizController::class, 'index'])->middleware('auth');
Route::get('\Animals', [App\Http\Controllers\AnimalController::class, 'index'])->middleware('auth');
Route::get('/galeri/{species}',[App\Http\Controllers\AnimalController::class, 'showgaleri'])->middleware('auth');
Route::delete('/animal_destroy/{animal}',[AnimalController::class,'delete'])->middleware('auth')->name('delete_animal');
Route::delete('/user_destroy/{user}',[HomeController::class,'delete'])->middleware('auth')->name('delete_user');
Route::get('/galeri/{species}',[App\Http\Controllers\AnimalController::class, 'gallery'])->name('gallery.species')->middleware('auth');
Route::get('/animalData/{id}', [App\Http\Controllers\AnimalController::class, 'detail'])->name('detail')->middleware('auth');
Route::get('/create_animal',[AnimalController::class,'create'])->middleware('auth')->name('create_animal');
Route::post('/animal_store',[AnimalController::class,'store'])->middleware('auth')->name('animal_store');
