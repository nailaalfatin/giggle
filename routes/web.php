<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SaveController as AdminSaveController;
use App\Http\Controllers\Admin\SliderController as AdminSliderController;
use App\Http\Controllers\Admin\StoryController as AdminStoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('landing-page');
    Route::get('/collections', 'categories')->name('categories');
    Route::get('/collections/{category_slug}', 'stories')->name('stories-category');
    Route::get('/collections/{category_slug}/{story_slug}', 'storyView')->name('stories-view');
    Route::get('/populer', 'trending')->name('stories-trending');
});

Route::middleware(['auth'])->group(function() {
    Route::controller(AdminSaveController::class)->group(function() {
        Route::get('/save', 'index')->name('save');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    //Category
    Route::controller(AdminCategoryController::class)->group(function() {
        Route::get('/category', 'index')->name('category');
        Route::get('/category/create', 'create')->name('category-create');
        Route::post('/category/store', 'store')->name('category-store');
        Route::get('/category/edit/{id}', 'edit')->name('category-edit');
        Route::put('/category/update/{id}', 'update')->name('category-update');
    });

    //Level
    Route::get('/level', App\Livewire\Admin\LevelIndex::class)->name('level');

    //Story
    Route::controller(AdminStoryController::class)->group(function() {
        Route::get('/story', 'index')->name('story');
        Route::get('/story/create', 'create')->name('story-create');
        Route::post('/story/store', 'store')->name('story-store');
        Route::get('/story/edit/{id}', 'edit')->name('story-edit');
        Route::put('/story/update/{id}', 'update')->name('story-update');
        Route::get('/story/delete/{id}', 'delete')->name('story-delete');
    });

    //Slider
    Route::controller(AdminSliderController::class)->group(function() {
        Route::get('/slider', 'index')->name('slider');
        Route::get('/slider/create', 'create')->name('slider-create');
        Route::post('/slider/store', 'store')->name('slider-store');
        Route::get('/slider/edit/{slider}', 'edit')->name('slider-edit');
        Route::put('/slider/update/{slider}', 'update')->name('slider-update');
        Route::get('/slider/delete/{slider}', 'delete')->name('slider-delete');
    });
});
