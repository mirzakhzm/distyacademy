<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', action: [HomeController::class,'index']);

// Route::get('/home', action: [HomeController::class,'index']);

Route::get('/course', action: [CourseController::class,'index']);

// Route::get('/course', function () {
//     return view('course');
// });