<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\Harga_Hari_IniController;


Route::get('/', function () {
    return view('dashboard.app');
});

// Route::get('/pengguna/{user_id}',[UserController::class,'tampilData']);
// Route::get('/pengguna',[UserController::class,'index']);
// Route::get('/pengguna/create', [UserController::class,'create']);

Route::resource('/pengguna',\App\Http\Controllers\UserController::class);
Route::resource('/customers',\App\Http\Controllers\CustomersController::class);
Route::resource('/kamar',\App\Http\Controllers\KamarController::class);
Route::resource('/harga_hari_ini',\App\Http\Controllers\Harga_Hari_IniController::class);



