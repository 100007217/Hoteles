<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

Route::get('/index', [HotelController::class, 'index']);

Route::put('/updateHotel/{id}', [HotelController::class, 'update']);

Route::put('/updateHotelPost', [HotelController::class, 'updateHotelPost']);

Route::delete('/deleteHotel/{id}', [HotelController::class, 'destroy']);

Route::get('/createHotel', [HotelController::class, 'create']);

Route::post('/createHotelPost', [HotelController::class, 'createPost']);


