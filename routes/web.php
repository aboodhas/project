<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ->middleware('verified');
Route::get('register',[App\Http\Controllers\DataController::class, 'getCountries'])->name('register');
Route::get('/',function(){
    return redirect('home');
});