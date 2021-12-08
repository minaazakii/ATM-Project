<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

//User Routes

Route::view('/login','login')->name('login.index');
Route::POST('/user/store',[UserController::class,'store'])->name('user.store');
Route::GET('/user/edit/{user}',[UserController::class,'edit'])->name('user.edit');
Route::POST('/user/update/{user}',[UserController::class,'update'])->name('user.update');
Route::POST('/user/remove/{user}',[UserController::class,'destroy'])->name('user.destroy');
Route::POST('/user/login',[UserController::class,'login'])->name('user.login');
Route::POST('/user/logout',[UserController::class,'logout'])->name('user.logout');
Route::POST('/user/leaveRequest',[UserController::class,'leaveRequest'])->name('user.leaveRequest');


//Dashboard Routes

Route::get('/dashboard/index',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('/dashboard/show/requests',[DashboardController::class,'showRequest'])->name('dashboard.showRequest');
