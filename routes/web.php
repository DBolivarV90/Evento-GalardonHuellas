<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{RegisterController,EventoController};
use App\Http\Middleware\Authenticate;

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

Route::get('/',  [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login',[EventoController::class, 'login'])->name('login');
Route::post('/login', [EventoController::class, 'store'])->name('login.store');
Route::middleware(['auth'])->group(function () {
    Route::get('/evento',[EventoController::class, 'index'])->name('evento.index');
});

