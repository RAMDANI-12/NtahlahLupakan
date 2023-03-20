<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('main', function () {
    return view('layouts.main');
});

Route::get('login', [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class, 'auth']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'regis']);
Route::get('user', [UserController::class, 'user']);

Route::get('dashboard',[AdminController::class,'index']);
Route::get('form',[AdminController::class,'pengajuan']);
Route::get('tabel',[AdminController::class,'users']);