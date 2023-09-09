<?php

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\adminDashboardController;
use App\Http\Controllers\admin\updatePasswordController;
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

Route::group(['prefix' => 'admin', 'middleware' => 'adminAuth'], function () {
    Route::get('/dashboard', [adminDashboardController::class, 'dashboard'])->name('admin.dashboard.show');
});


Route::get('admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login.show');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');

///admin logout
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

///update password
Route::get('admin/updatePassword',[updatePasswordController::class,'updatePassword'])->name('update.password');

