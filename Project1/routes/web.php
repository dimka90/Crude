<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;




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



Route::get('/',[WebController::class,'welcome'])->name('welcome');

Route::get('/data',[WebController::class,'data'])->name('data');
Route::get('/index',[WebController::class,'index'])->name('index')->middleware('auth');
Route::get('/create',[WebController::class,'create'])->name('create')->middleware('guest');
Route::get('/edit/{id}',[WebController::class,'edit'])->name('edit');
Route::post('/store',[WebController::class,'store'])->name('store');
Route::post('/update/{id}',[WebController::class,'update'])->name('update');
Route::get('/delete/{id}',[WebController::class,'delete'])->name('delete');
Route::get('/userinfo/{id}',[WebController::class,'userinfo'])->name('userinfo');

Route::get('/login',[WebController::class,'login'])->name('login')->middleware('guest');
Route::post('/userlogin',[WebController::class,'userlogin'])->name('userlogin');
Route::post('/logout',[WebController::class,'logout'])->name('logout');
Route::get('localization/{locale}',[WebController::class,'lange']);
Route::get('/register',[UserController::class,'register']);
Route::post('/create',[UserController::class,'create']);
// Route::get('/data',function(){
// $Names=[
//     "name"=>"james",
//     1=>"20",
//     "Gender"=>"Male"

//     ];

//     return var_dump($Names);

// });
// creating a middleware{
//     php artisan make:middleware UserAuth
//     UserAuthMiddle{
//         if(!Auth:check){
//             return redirect()->route('login');
//             register your middleware in kernal.php
//         }
//     }
// }

