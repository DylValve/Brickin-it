<?php

use App\Http\Controllers\APICollectionController;
use App\Http\Controllers\APICollectionSetFixController;
use App\Http\Controllers\APIDocumentController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [UserAPIController::class, 'logout']);
});

Route::resource('themes', ThemeAPIController::class);
Route::resource('sets', APISetController::class);
Route::resource('collections', APICollectionController::class);
Route::resource('collection-sets', APICollectionSetFixController::class);

Route::get('sets/look-up-by/number/{set_number}', [APISetController::class, "apiSearchNumber"]);
Route::get('sets/look-up-by/name/{set_name}', [APISetController::class, "apiSearchName"]);
Route::get('sets/look-up-by/barcode/{set_barcode}', [APISetController::class, "apiSearchBarcode"]);

Route::get('collections/user/{user_id}', [APICollectionController::class, "userCollections"]);
Route::get('collections/sets/{collection_id}', [APICollectionSetFixController::class, "CollectionSetSearch"]);

Route::post('/store-file', [APIDocumentController::class, 'store']);
