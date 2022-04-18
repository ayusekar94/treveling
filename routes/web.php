<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\JumboController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\FooterController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'register']);

Route::get('/admin', function(){
    return view('dashbord.admin');
})->middleware('auth');

Route::resource('/photo', PhotoController::class)->middleware('auth');
Route::resource('/jumbotron', JumboController::class)->middleware('auth');
Route::resource('/about', SejarahController::class)->middleware('auth');
Route::resource('/footer', FooterController::class)->middleware('auth');

