<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('/user',UserController::class);

Route::resource('student',StudentController::class);

Route::get('contact',[ContactController::class,'show']);