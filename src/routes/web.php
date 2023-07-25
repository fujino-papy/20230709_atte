<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\StampController;

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
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/login', [AuthenticatedSessionController::class, 'destroy']);
Route::get('/stamp/list', [StampController::class, 'list']);
Route::post('/stamp/home', [StampController::class, 'home']);
Route::get('/stamp/start', [StampController::class, 'startWork']);
Route::post('/stamp/end', [StampController::class, 'endWork']);
Route::post('/rest/start', [RestController::class, 'startRest']);
Route::post('/rest/end', [RestController::class, 'endRest']);

