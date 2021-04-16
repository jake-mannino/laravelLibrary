<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books/all', [App\Http\Controllers\BookController::class, 'index']);

Route::get('/users/all', [App\Http\Controllers\UserController::class, 'index']);

Route::post('/books/new', [App\Http\Controllers\BookController::class, 'create']);

Route::post('/users/new', [App\Http\Controllers\UserConstroller:: class, 'create']);

Route::get('/users/{id}/checkouts/{id}/checkoutpunishments/{id}/punishments/all', [App\Http\Controllers\PunishmentController::class, 'index']); 