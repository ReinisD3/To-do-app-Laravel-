<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('tasks',['tasks'=> Task::latest()->get()]);
});
Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);
