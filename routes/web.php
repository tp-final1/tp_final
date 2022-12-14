<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', IndexController::class);

Route::get('/registrar', [RegisterController::class, 'create']);

Route::post('/registrar', [RegisterController::class, 'store']);

Route::get('/generar-token', [TokenController::class, 'index']);
Route::post('/generar-token', [TokenController::class, 'generateToken']);

Route::get('/about', AboutController::class);