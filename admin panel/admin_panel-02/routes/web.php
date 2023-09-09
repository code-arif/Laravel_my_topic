<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\userAuthController;
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
Route::group(['prefix' => 'admin', 'middleware' => 'adminAuth'], function(){
    Route::get('/dashboard',[adminDashboardController::class, 'dashboard'])->name('admin.dashboard.show');
});



Route::get('/login', [userAuthController::class, 'showLogin'])->name('login.show');
