<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
Route::get('/welcome', 'App\Http\Controllers\PostController@index')->name('welcome');

Route::get('dashboard', DashboardController::class)->name('dashboard')->middleware('auth');

Route::get('', [AuthController::class, 'login'])->name('login');

Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('inscrire', [AuthController::class, 'inscrire'])->name('inscrire');

Route::post('authenticateIns', [AuthController::class, 'authenticateIns'])->name('authenticateIns');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('RouteCreate');

Route::post('/posts/create', 'App\Http\Controllers\PostController@ajout')->name('RouteAjout');

Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('RouteJoueur');

Route::get('/rechJou', 'App\Http\Controllers\PostController@rechJou')->name('rechJou');

Route::get('/rechJouPoste', 'App\Http\Controllers\PostController@rechJouPoste')->name('rechJouPoste');

Route::get('/contact', 'App\Http\Controllers\PostController@contact')->name('contact');



//Route::get('/posts', function () {
//    return 'Van dijk';
//});

 
//Route::get('/joueur', function () {
 //   return view('joueur');
//});