<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

Route::get('/',[mycontroller::class,'display']);
Route::post('/save',[mycontroller::class,'insert']);
Route::get('employee',[mycontroller::class,'displayEmploye']);
Route::get('/del/{empid}',[mycontroller::class,'del']);
Route::get('/d/{depid}',[mycontroller::class,'dp']);
