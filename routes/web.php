<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::group(['prefix' => '', 'as' => 'dashboard.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    // Category Routes
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/{category:slug}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{category:slug}/update', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{category:slug}/delete', [CategoryController::class, 'destroy'])->name('destroy');
    });

    // Category Routes
    Route::group(['prefix' => 'tags', 'as' => 'tags.'], function () {
        Route::get('/', [TagController::class, 'index'])->name('index');
        Route::get('/create', [TagController::class, 'create'])->name('create');
        Route::post('/store', [TagController::class, 'store'])->name('store');
        Route::get('/{tag:slug}/edit', [TagController::class, 'edit'])->name('edit');
        Route::put('/{tag:slug}/update', [TagController::class, 'update'])->name('update');
        Route::delete('/{tag:slug}/delete', [TagController::class, 'destroy'])->name('destroy');
    });
});


