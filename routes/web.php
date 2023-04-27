<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/add-deposit', [App\Http\Controllers\HomeController::class, 'addDeposit'])->name('home.addDeposit');
Route::post('/home/add-deposit', [App\Http\Controllers\HomeController::class, 'updateDeposit'])->name('home.addDeposit');
