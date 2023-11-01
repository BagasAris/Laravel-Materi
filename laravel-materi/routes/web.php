<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilesController;
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
Route::GET('/profile', [AuthController::class, 'profile'])-> name('auth.profile');
Route::GET('/master', [PagesController::class, 'master']);
Route::resource('/cast', CastController::class)->middleware('auth');
Route::resource('/genre', GenreController::class)->middleware('auth');
Route::resource('/film', FilmController::class)->middleware('auth');
// Route::resource('/peran', PeranController::class)->middleware('auth');

Route::controller(AuthController::class)->group(function() {
    Route::get('/registration', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/auth', 'authentication')->name('auth.authentication');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
    Route::post('/logout', 'logout')->name('auth.logout');
});

Route::get('/profile/{user}', [ProfilesController::class, 'show'])->name('user.profile')->middleware('auth');

Route::get('/film/{id}/peran/create', [PeranController::class,'create'])->name('peran.create');
Route::post('film/{id}/peran', [PeranController::class, 'store'])->name('peran.store');

Route::get('/film/{id}/kritik/create', [KritikController::class,'create'])->name('kritik.create');
Route::post('/film/{id}/kritik', [KritikController::class, 'store'])->name('kritik.store');
