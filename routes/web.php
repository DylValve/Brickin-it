<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\SetController;
use App\Http\Controllers\ThemeController;
use App\Models\Set;
use App\Models\Theme;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('/main');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/main/sets', function () {

    $sets = Set::all();
    $themes = Theme::whereNull('theme_id')
        ->with('childrenThemes')
        ->get();

    $all_themes = Theme::all();
    return view('all-sets', compact('themes', 'all_themes', 'sets'));
})->name('all-sets');

Route::get('/main/sets/{id}', function ($theme_id) {

    $sets = Set::all();
    $themes = Theme::whereNull('theme_id')
        ->with('childrenThemes')
        ->get();

    $all_themes = Theme::all();

    error_log("Test3: $theme_id");

    return view('theme-sets', compact('themes', 'all_themes', 'theme_id', 'sets'));
})->name('theme-sets');

Route::get('/main/collections', function () {

    //https://stackoverflow.com/questions/45522428/how-to-get-current-user-id-in-laravel-5-4/45522436

    $id = Auth::id();
    return view('main', compact('id'));

})->name('currentUserCollections');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('themes', ThemeController::class);
    Route::resource('collections', CollectionController::class);
    Route::resource('sets', SetController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
