<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

// vendor routes
  Route::controller(VendorController::class)->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard');
});