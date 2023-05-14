<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/game', [GameController::class, 'index']);
Route::get('/game/{id}', [GameController::class, 'show']);
Route::get('/game/data/create', [GameController::class, 'create']);
Route::post('/game', [GameController::class, 'store']);
Route::get('/game/{id}/edit', [GameController::class, 'edit']);
Route::put('/game/{id}', [GameController::class, 'update']);
Route::delete('/game/{id}', [GameController::class, 'destroy']);