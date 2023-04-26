<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\House;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['can:isAdmin'])->group(function() {
//     Route::get('/admin', [App\Http\Controllers\UserController::class, 'index'])->name('admin');    
// });

################## PANEL ADMINISTRACYJNY ##################
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/delete/{user}', [AdminController::class, 'delete'])->name('admin.delete');
Route::get('/admin/edit/{user}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/{user}', [AdminController::class, 'update'])->name('admin.update');

################## PANEL UŻYTKOWNIKA ##################
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{user}', [UserController::class, 'update'])->name('user.update');

################## SPIS DOMKÓW ##################
Route::get('/house',[HouseController::class, 'index'])->name('house.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
