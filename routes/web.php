<?php

use App\Http\Controllers\backend\CarouselController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\front\PageController;
use Illuminate\Support\Facades\Route;

//Auth Controller
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');

//Backend dashboard
Route::get('backend/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('backend/carousel',CarouselController::class)->names('carousel');
Route::resource('backend/category',CategoryController::class)->names('categories');
//frontend
Route::get('/',[PageController::class,'home'])->name('home');