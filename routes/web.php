<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index');
    });

    //Category
    Route::controller(CategoryController::class)->group(function() {
        Route::get('/category', 'index')->name('category');
        Route::get('/category/create', 'create')->name('category-create');
        Route::post('/category/store', 'store')->name('category-store');
        Route::get('/category/edit/{id}', 'edit')->name('category-edit');
        Route::put('/category/update/{id}', 'update')->name('category-update');
    });

    //Slider
    Route::controller(SliderController::class)->group(function() {
        Route::get('/slider', 'index')->name('slider');
        Route::get('/slider/create', 'create')->name('slider-create');
        Route::post('/slider/store', 'store')->name('slider-store');
        Route::get('/slider/edit/{slider}', 'edit')->name('slider-edit');
        Route::put('/slider/update/{slider}', 'update')->name('slider-update');
        Route::get('/slider/delete/{slider}', 'delete')->name('slider-delete');
    });
});
