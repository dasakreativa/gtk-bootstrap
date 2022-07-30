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

Route::view('/', 'welcome');
Route::view('/test', 'test');

Auth::routes();

Route::prefix('/auth')->group(function() {
    Route::view('/horizontal', 'auth.login.horizontal');
    Route::view('/vertical', 'auth.login.vertical');
    Route::view('/test', 'test');
});

Route::prefix('/admin-vertical')->group(function() {
    Route::prefix('/dashboard')->group(function() {
        Route::view('/', 'admin-vertical.dashboard.index');
        Route::view('/ecommerce', 'admin-vertical.dashboard.ecommerce');
    });
});

Route::prefix('admin')->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
});
