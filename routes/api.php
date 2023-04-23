<?php

use App\Http\Controllers\ApirestController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


route::apiResource('/Api',ApirestController::class);
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);


//  Route::post('/Api',[ApirestController::class,'store']);
//  Route::get('/Api',[ApirestController::class,'index']);
//  Route::get('/Api/{id}',[ApirestController::class,'show']);
// Route::put('/Api/{id}',[ApirestController::class,'update']);
// Route::delete('/Api/{id}',[ApirestController::class,'destroy']);