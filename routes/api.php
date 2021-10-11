<?php

use App\Http\Controllers\APISetController;
use App\Http\Controllers\ThemeAPIController;
use App\Http\Controllers\UserAPIController;
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

Route::post('/register', [UserAPIController::class, 'signup']);
Route::post('/login', [UserAPIController::class, 'signin']);

Route::middleware('auth:sanctum')->group( function () {
    Route::post('/logout', [UserAPIController::class, 'logout']);
    Route::resource('themes', ThemeAPIController::class);
    Route::resource('sets', APISetController::class);
});
