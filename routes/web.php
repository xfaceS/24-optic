<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MagasinController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/qui-somme-nous',[AboutUsController::class,'index'])->name('about-us');
Route::get('/news',[CategoryController::class,'index'])->name('news.index');
Route::get('/new/{slug}',[CategoryController::class,'show'])->name('news.show');
Route::get('/magasins',[MagasinController::class,'index'])->name('magasins.index');
Route::get('/magasin/{slug}',[MagasinController::class,'show'])->name('magasins.show');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
