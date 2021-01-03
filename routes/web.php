<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\voteController;
use App\Http\Controllers\Auth\RegisterController;

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


Route::get('/langkah', function () {
    return view('langkah');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/vote', [voteController::class , 'vote']);
Route::get('/votes/{id}/{ids}', [voteController::class , 'votes']);
Route::get('/quick', [voteController::class , 'quick']);
Route::post('/registercanpost', [RegisterController::class,'registercan'])->name('registercan');
Route::get('/registercan' , function (){
   return view('auth.registercan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

