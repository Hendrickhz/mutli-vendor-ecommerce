<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

// admin routes
  Route::controller(AdminController::class)->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard');
});

//admin profile routes
Route::controller(ProfileController::class)->prefix('profile')->group(function(){
    Route::get('/','index')->name('profile');
    Route::post('/update','updateProfile')->name('profile.update');
    Route::post('/change-password','changePassword')->name('profile.changePassword');
});
