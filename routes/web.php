<?php

use App\Http\Controllers\backend\CarouselController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\messageController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\front\PageController;
use Illuminate\Support\Facades\Route;

//Auth Controller
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('loginPost');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register',[AuthController::class,'registerPost'])->name('registerPost');
});
//mail
Route::post('message-post',[messageController::class,'messageSave'])->name('message.sent');
Route::get('sent-mail',[EmailController::class,'NotificationMail']);

//Backend dashboard
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/carousel', CarouselController::class)->names('carousel');
    Route::resource('/category', CategoryController::class)->names('categories');
    Route::resource('/event',EventController::class)->names('event');
    Route::resource('/gallery',GalleryController::class)->names('gallery');
    Route::resource('/company',CompanyController::class)->names('company');
    Route::get('show-message',[messageController::class,'showMessage'])->name('message.show');
});
//frontend
Route::get('/', [PageController::class, 'home'])->name('home');
