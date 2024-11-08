<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', action: [TemplateController::class,'index']);

Route::get('/home', action: [TemplateController::class,'index']);
