<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;

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

Route::get('/', [Main::class, 'index']);
Route::get('/login-birth', [Main::class, 'birth_cert']);
Route::get('/login-passport', [Main::class, 'passport']);
Route::get('/details', [Main::class, 'details']);
