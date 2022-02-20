<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
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

Route::get('/',[dashboardController::class,'dashboard']);
Route::get('/input',[loginController::class,'inputdata']);
Route::get('/datauser',[loginController::class,'datauser']);
Route::get('/inputperjalanan',[loginController::class,'inputperjalanan']);
Route::post('/simpanperjalanan',[dashboardController::class,'simpanperjalanan']);
Route::get('/register',[loginController::class,'halamanRegister']);
Route::get('/logout',[loginController::class,'logout']);
Route::get('/login',[loginController::class,'login']);
Route::post('/simpanregister',[loginController::class,'simpanRegister']);
Route::get('/dashboard',[dashboardController::class,'index']);