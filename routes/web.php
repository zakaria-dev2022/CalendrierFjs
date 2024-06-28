<?php

use App\Http\Controllers\calendrierController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TachesController;
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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::resource('clients', ClientController::class);
Route::resource('taches', TachesController::class);
Route::resource('calendrier', calendrierController::class);