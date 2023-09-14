<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::GET('/', [PagesController::class, 'index']);
Route::GET('/form', [PagesController::class, 'form'])-> name('form');
Route::GET('/index', [PagesController::class, 'welcome'])-> name('welcome');
Route::GET('/master', [PagesController::class, 'master']);
Route::resource('/cast', CastController::class);
Route::resource('/genre', GenreController::class);