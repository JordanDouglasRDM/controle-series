<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SeriesController;
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
Route::get('/', function () {
    return redirect('/series');
});
Route::resource('/series', SeriesController::class)
    ->except(['show']);
Route::get('/series/{series}/seasons', [SeasonController::class, 'index'])->name('seasons.index');
Route::get('/season/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('/season/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');
