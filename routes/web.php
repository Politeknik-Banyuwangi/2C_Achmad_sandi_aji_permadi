<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;
use App\Http\Controllers\MoviesController;

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
Route::get('/fetch', 'QuestionController@fetch');
Route::get('/movie', [movieController::class, 'index'])->name('movie.index');