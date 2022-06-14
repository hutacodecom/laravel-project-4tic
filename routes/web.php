<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'pagedashboard'])->name('dashboard');
// Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');
Route::get('/about', [DashboardController::class, 'about'])->name('about');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');