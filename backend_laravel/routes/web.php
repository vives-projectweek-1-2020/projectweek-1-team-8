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

Route::apiResources([
    'user' => 'UserController',
]);

Route::get('/queue/get-queue/{shopId}', ['uses' =>'QueueController@GetList']);
Route::get('/address/get-cities', 'AddressController@GetCities');
Route::get('/shops/get-business-types', 'shopController@GetBusinessTypes');
Route::get('/shops/get-business-names/{type}/{city}', ['uses' => 'shopController@GetBusinesses']);
