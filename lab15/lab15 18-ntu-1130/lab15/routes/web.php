<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
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

Route::get('/',[employeeController::class,'Getemployee']);
Route::get('/del/{id}',[employeeController::class,'Deleteemplyee']);
Route::post('/createemployee',[employeeController::class,'Createmployee']);
Route::get('/create',function (){
    return view('CreateEmployee');
});
Route::get('/',[App\Http\Controllers\employee::class])
