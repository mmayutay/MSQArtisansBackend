<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getJobOrders', 'App\Http\Controllers\JobOrder@getAllJobOrders');

Route::post('login', 'App\Http\Controllers\Login@login');

Route::post('signup', 'App\Http\Controllers\Login@signup');
