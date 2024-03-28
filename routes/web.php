<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
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

//rotas com autenticação
Route::middleware('autenticador')->group(function () {

    Route::get('/', function () {
        return redirect('/series');
    });
    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/register', [UsersController::class, 'create'])->name('users.create');
    Route::post('/register', [UsersController::class, 'store'])->name('users.register');

    Route::get('/series/{series}/seasons', [SeasonController::class, 'index'])->name('seasons.index');
    Route::get('/season/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
    Route::post('/season/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');
    Route::resource('/series', SeriesController::class)
        ->except(['show']);
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('signin');

