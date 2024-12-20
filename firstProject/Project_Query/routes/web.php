<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//user controller routes

Route::controller(UserController::class)->group(function(){
    Route::get('/users','showUsers');

    Route::get('/user/{id}','showUser')->name('view.user');

    Route::post('/add','addUser')->name('add.user');

    Route::put('/update/{id}','updateUser')->name('update.user');
    Route::get('/updatepage/{id}','updatePage')->name('update.page');

    Route::get('/delete/{id}','deleteUser')->name('delete.user');
});



Route::view('/newuser','adduser');
