<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RunningController;
use App\Http\Middleware\Auth;


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

Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::post('/autenticar', [AuthController::class, 'autenticar'])->name('autenticar');

Route::get('/registrar', [SignUpController::class, 'create']);
Route::post('/registrar/salvar', [SignUpController::class, 'store'])->name('signup.store');

Route::middleware([Auth::class])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/running', [RunningController::class, 'create'])->name('running');
    Route::post('/running/criar', [RunningController::class, 'store'])->name('running.store');
});
