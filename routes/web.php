<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

//Dashboard Routes


   Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
   Route::get('/hero', [DashboardController::class, 'about'])->name('user.hero');
   Route::get('/about', [DashboardController::class, 'about'])->name('user.about');
   Route::get('/resume', [DashboardController::class, 'about'])->name('user.resume');
   Route::get('/contact', [DashboardController::class, 'about'])->name('user.contact');



