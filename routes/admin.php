<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProfileController;

/** Admin Route*/

Route::get('dashboard', [AdminController::class,'dashboard'])->name('dashboard');

/** Auth Route*/
Route::get('profile',[ProfileController::class,'index'])->name('profile');

/** Update profile route */
Route::post('profile/update',[ProfileController::class,'update'])->name('profile.update');
/** Update profile route */
Route::post('profile/update/updatePassword',[ProfileController::class,'updatePassword'])->name('profile.update.updatePassword');
