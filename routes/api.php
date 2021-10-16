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

Route::get('getJobOrders/get/{id}', 'App\Http\Controllers\JobOrder@getSelectedJobOrder');

Route::post('job-order/add', 'App\Http\Controllers\JobOrder@addNewJobOrder');

Route::post('login', 'App\Http\Controllers\Login@login');

Route::post('signup', 'App\Http\Controllers\Login@signup');

Route::post('client/sign-up', 'App\Http\Controllers\ClientsController@signup');

Route::get('client/get-user-data/{id}', 'App\Http\Controllers\ClientsController@ClientUserData');

Route::post('job-order-tracker/add', 'App\Http\Controllers\JobOrderForTracking@AddJobOrderToTracker');

Route::get('job-order-tracker/get-orders-on-track/{artisan_id}/{type}', 'App\Http\Controllers\JobOrderForTracking@getJobOrdersOnTrack');
