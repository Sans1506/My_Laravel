<?php

use App\Http\Controllers\cariController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\logoutController;

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

Route::post('/simpanregister',[registerController::class,'simpanRegister']);
Route::get('/login',[loginController::class,'login']);
Route::post('/login',[loginController::class,'authenticate']);
Route::get('/logout',[logoutController::class,'logout']);
Route::group(['middleware' => 'guest'], function(){ 
  Route::get('/',[dashboardController::class,'home'])->name('login');
  Route::get('/register',[registerController::class,'halamanRegister']);
});
Route::group(['middleware' => 'auth'], function(){
  Route::get('/dashboard',[dashboardController::class,'index']);
  Route::get('/profile',[profileController::class,'profile']);
  Route::get('/input',[dashboardController::class,'inputdata']);
  Route::get('/datauser',[dashboardController::class,'datauser']);
  Route::get('/inputperjalanan',[dashboardController::class,'inputperjalanan']);
  Route::post('/simpanperjalanan',[dashboardController::class,'simpanperjalanan']);
  Route::get('/cari',[cariController::class,'cariperjalanan']);
});