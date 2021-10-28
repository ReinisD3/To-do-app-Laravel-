<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TasksController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!php
|
*/

Route::view('/','index');
Route::get('/tasks', [TasksController::class, 'show'])->middleware('auth');
Route::get('/tasks/create', [TasksController::class, 'create'])->middleware('auth');
Route::post('/tasks/store', [TasksController::class, 'store'])->middleware('auth');


Route::get('/register',[RegisterController::class,'create'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');
Route::get('/login',[SessionsController::class,'create'])->middleware('guest');
Route::post('/login',[SessionsController::class,'store'])->middleware('guest');
Route::get('/logout',[SessionsController::class,'destroy'])->middleware('auth');
