<?php

use App\Http\Controllers\LogController;
use App\Http\Controllers\pythonCommandRunController;
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

Route::get('/sync-log', [LogController::class, 'syncLog']);
Route::get('/async-log', [LogController::class, 'asyncLog']);
Route::get('/store', [LogController::class, 'store']);
Route::get('/update', [LogController::class, 'updated']);
Route::get('/delete', [LogController::class, 'deleted']);
