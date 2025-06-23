<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\front\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
//Auth Controller
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');

//Backend dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');