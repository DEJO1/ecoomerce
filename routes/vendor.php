<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;


/** Vendor Route*/
Route::get('dashboard', [VendorController::class,'dashboard'])->name('dashboard');
