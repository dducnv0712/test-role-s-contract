<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\WebController::class,'index'] );
Route::post('/create-group',[\App\Http\Controllers\WebController::class,'createGroup']);
Route::post('/create-staff',[\App\Http\Controllers\WebController::class,'createStaff']);
Route::post('/create-role',[\App\Http\Controllers\WebController::class,'createRole']);
Route::get('/local',[\App\Http\Controllers\WebController::class,'getLocal']);
Route::get('/insert-local',[\App\Http\Controllers\WebController::class,'insertLocal']);
Route::get('/get-local',[\App\Http\Controllers\WebController::class,'getLocalFromDB']);
