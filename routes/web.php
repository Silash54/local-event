<?php

use App\Http\Controllers\backend\CarouselController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\front\PageController;
use Illuminate\Support\Facades\Route;

//Auth Controller
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
});
//Backend dashboard
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/carousel', CarouselController::class)->names('carousel');
    Route::resource('/category', CategoryController::class)->names('categories');
    Route::resource('/event',EventController::class)->names('event');
    Route::resource('/gallery',GalleryController::class)->names('gallery');
    Route::resource('/company',CompanyController::class)->names('company');
});
//frontend
Route::get('/', [PageController::class, 'home'])->name('home');
