<?php

use App\Http\Controllers\IndexController;
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

Route::get('/',  [indexController::class,'index'])->name('index');
Route::get('create',  [indexController::class,'create'])->name('create');
Route::post('create',  [indexController::class,'addtopic'])->name('addtopic');
Route::get('post/{id}',  [indexController::class,'viewPost'])->name('viewPost');
Route::post('post/',  [indexController::class,'addComment'])->name('addComment');
Route::get('autors/{id}',  [indexController::class,'autors'])->name('autors');
