<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
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

Route::get('/',[loginController::class,'dashboard']);
Route::get('/input',[loginController::class,'inputdata']);
Route::get('/datauser',[loginController::class,'datauser']);
Route::get('/perjalanan',[loginController::class,'perjalanan']);
Route::get('/inputperjalanan',[loginController::class,'inputperjalanan']);
Route::get('/register',[loginController::class,'halamanRegister']);
Route::get('/logout',[loginController::class,'logout']);
Route::get('/login',[loginController::class,'login']);
Route::post('/simpanData',[loginController::class,'simpanRegister']);