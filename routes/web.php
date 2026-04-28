<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AuthController;

// Login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes (harus login dulu)
Route::middleware(['auth.session'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue');

    // Distributors
    Route::get('/distributors', [DistributorController::class, 'index'])->name('distributors.index');
    Route::get('/distributors/create', [DistributorController::class, 'create'])->name('distributors.create');
    Route::post('/distributors', [DistributorController::class, 'store'])->name('distributors.store');
    Route::get('/distributors/{id}/edit', [DistributorController::class, 'edit'])->name('distributors.edit');
    Route::put('/distributors/{id}', [DistributorController::class, 'update'])->name('distributors.update');

    // Upload
    Route::get('/upload', [UploadController::class, 'index'])->name('upload');
    Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
});