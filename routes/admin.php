<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

// admin routes
  Route::controller(AdminController::class)->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard');
});