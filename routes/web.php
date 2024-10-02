<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mobiles', [MobileController::class,'index'])->name('mobiles.index');
Route::get('/mobiles/create', [MobileController::class,'create'])->name('mobiles.create');
Route::post('/mobiles', [MobileController::class,'store'])->name('mobiles.store');
Route::get('/mobiles/{mobile}', [MobileController::class,'show'])->name('mobiles.show');
Route::get('/mobiles/{mobile}/edit', [MobileController::class,'edit'])->name('mobiles.edit');
Route::post('/mobiles/{mobile}', [MobileController::class,'update'])->name('mobiles.update');
Route::delete('/mobiles/{mobile}', [MobileController::class,'destroy'])->name('mobiles.destroy');