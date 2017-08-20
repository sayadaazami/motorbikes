<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'motorbike'], function ($router) {
    $router->get('/create', 'MotorBikeController@create')->name('motorbike_create');
    $router->post('/create-submit', 'MotorBikeController@store')->name('motorbike_create_submit');
});
