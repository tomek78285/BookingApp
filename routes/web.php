<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'verified'])->group(function() {
    Route::middleware(['can:isAdmin'])->group(function(){
        Route::get('/admin', function () {
            return view('admin');
        });        
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});