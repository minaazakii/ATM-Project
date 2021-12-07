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
Route::POST('/user/login',[UserController::class,'login'])->name('user.login');
Route::POST('/user/logout',[UserController::class,'logout'])->name('user.logout');
Route::POST('/user/leaveRequest',[UserController::class,'leaveRequest'])->name('user.leaveRequest');


//Dashboard Routes

Route::get('/dashboard/index',[DashboardController::class,'index'])->name('dashboard.index');
