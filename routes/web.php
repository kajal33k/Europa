<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/euro_igko', [HomeController::class, 'euroigko'])->name('euroigko');
Route::get('/class_1', [HomeController::class, 'class_1'])->name('class_1');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');