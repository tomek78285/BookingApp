<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;

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
Route::get('/domki', function () {
    return view('houses');
});
Route::get('/rezerwacja', function () {
    return view('house_details');
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
Route::get('/domki',[HouseController::class, 'index'])->name('houses');
// Route::get('/domki/show/{house}', [HouseController::class, 'show'])->name('house.show');
Route::get('/house',[HouseController::class, 'index'])->name('house.index');
Route::get('/house/show/{house}', [HouseController::class, 'show'])->name('house.show');
Route::get('/house/create', [HouseController::class, 'create'])->name('house.create');
Route::post('/house', [HouseController::class, 'store'])->name('house.store');
Route::get('/house/edit/{house}', [HouseController::class, 'edit'])->name('house.edit');
Route::post('/house/{house}', [HouseController::class, 'update'])->name('house.update');
Route::get('/house/delete/{house}', [HouseController::class, 'delete'])->name('house.delete');
Route::get('/house/rating/{house}', [HouseController::class, 'rating'])->name('house.rating');
Route::post('/house/rating/{house}', [HouseController::class, 'rate'])->name('house.rate');
Route::get('/house/reserving/{house}', [HouseController::class, 'reserving'])->name('house.reserving');
Route::post('/house/reserving/{house}', [HouseController::class, 'reserve'])->name('house.reserve');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
