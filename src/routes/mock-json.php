<?php

use Illuminate\Support\Facades\Route;
use Rchitector\MockJson\App\Http\Controllers\AdminController;
use Rchitector\MockJson\App\Http\Controllers\HomeController;

Route::prefix('mock-json')->middleware('mock-json')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('mock-json.home');
    Route::get('/json', [HomeController::class, 'json'])->name('mock-json.json');
    Route::prefix('admin')->middleware('mock-json-admin')->group(function(){
        Route::get('/', [AdminController::class, 'index'])->name('mock-json.admin');
    });
});