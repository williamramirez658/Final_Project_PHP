<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'show']);
Route::get('/user/form/{id?}',[UserController::class, 'form'])->name('user.form');

Route::post('/user/save',[UserController::class, 'save'])->name('user.save');