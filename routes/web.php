<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sms', [App\Http\Controllers\BroadcastSms::class, 'Send' ])->name('sms');


Route::resource('classRepresentatives', App\Http\Controllers\ClassRepresentativeController::class);

