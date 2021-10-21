<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;



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

Route::get('/', [TeamController::class, 'index']);

Route::get('/team/{id}', [TeamController::class, 'show']);
Route::get('/player/{id}', [PlayerController::class, 'show']);
Route::get('/register', [AuthController::class, 'getRegisterForm']);
Route::get('/login', [AuthController::class, 'getLoginForm']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/team/{team}/comments', [CommentController::class, 'store'])->name('createComment')->middleware('forbidden.comment');
