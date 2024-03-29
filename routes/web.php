<?php

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

registerRoutes([], function () {
    Route::get('', [\App\Http\Controllers\AppController::class, 'index'])
        ->name('app.welcome');
    Route::get('about', [\App\Http\Controllers\AppController::class, 'about'])
        ->name('app.about');
});
