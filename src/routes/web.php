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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'destroy']);
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/stamp', [StampController::class, 'store']);
Route::post('/stamp', [StampController::class, 'destroy']);
Route::get('/attendance', [AttendanceController::class, 'index']);
Route::get('/attendance', [AttendanceController::class, 'destroy']);