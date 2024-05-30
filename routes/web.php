<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
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
    Route::get('/', 'index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index');
    });
});
