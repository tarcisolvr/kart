<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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
Route::get('/', [ DashboardController::class, 'index' ]);

Route::get('/login', [ AuthController::class, 'index' ]);
Route::post('/autenticar', [ AuthController::class, 'autenticar' ])->name('autenticar');

Route::get('/registrar', [ SignUpController::class, 'create' ]);
Route::post('/registrar/salvar', [ SignUpController::class, 'store' ])->name('signup.store');




