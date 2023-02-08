<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieApiController;
use App\Http\Controllers\OverviewApiController;

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
 
// diplaying index page
Route::get('/index', [MovieApiController::class, 'index']);

// displaying overview of selected movie
Route::get('/overview{id}', [OverviewApiController::class, 'overview']);
Route::get('/overview', [OverviewApiController::class, 'overviewdisplay']);

// displaying searched movie
Route::post('/serach-submit', [MovieApiController::class, 'search_movie']);
