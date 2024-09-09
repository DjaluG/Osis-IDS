<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OsisController;
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

Route::get('/login', [OsisController::class, 'login'])->name('login');
Route::post('/input', [OsisController::class, 'input'])->name('input');
Route::get('/register', [OsisController::class, 'register'])->name('register');
Route::post('/daftar', [OsisController::class, 'daftar'])->name('daftar');

Route::get('/', [OsisController::class, 'index'])->name('index');
