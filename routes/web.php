<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrmadaDiscoveryController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route::resource('/login', LoginController::class)->name('index', 'loginPage');
Route::resource('/', LandingPageController::class)->name('index', 'landingPage');
Route::resource('/ormada', OrmadaDiscoveryController::class)->name('index', 'ormadaDiscoveryPage');
Route::resource('/dashboard', AdminController::class)->middleware('auth');
