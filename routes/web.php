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
    return view('home');
});


//Route Front End
Route::get('/history', 'App\Http\Controllers\ControllerHistory@index');
Route::get('/viewProduct', 'App\Http\Controllers\ControllerProduct@index');
Route::get('/viewProduct/{kd_product}', 'App\Http\Controllers\ControllerProduct@detail');
Route::get('/contactus', 'App\Http\Controllers\ControllerContactUs@index');
Route::get('/contactform', 'App\Http\Controllers\ControllerContactForm@index');
Route::get('/login','App\Http\Controllers\ControllerLogin@index');
Route::post('/login/process','App\Http\Controllers\ControllerLogin@process_login');
Route::get('/changePassword','App\Http\Controllers\ControllerPassword@index');
Route::post('/changePassword/process','App\Http\Controllers\ControllerPassword@process_change');

//Route Back End
Route::get('/dashboard','App\Http\Controllers\ControllerDashboard@index');
Route::get('/logout','App\Http\Controllers\ControllerLogin@process_logout');

//Route Back End <Product>
Route::get('/ManageProduct','App\Http\Controllers\ControllerManageProduct@index');
Route::get('/ManageProduct/create','App\Http\Controllers\ControllerManageProduct@create');
Route::post('/ManageProduct/create/process','App\Http\Controllers\ControllerManageProduct@process_create');
Route::get('/ManageProduct/update/{kd_product}','App\Http\Controllers\ControllerManageProduct@update');
Route::post('/ManageProduct/update/{kd_product}/process','App\Http\Controllers\ControllerManageProduct@process_update');
Route::get('/ManageProduct/delete/{kd_product}','App\Http\Controllers\ControllerManageProduct@delete');

//Route Back End <User>
Route::get('/user','App\Http\Controllers\ControllerUser@index');
Route::get('/user/create', 'App\Http\Controllers\ControllerUser@create');
Route::post('/user/create/process', 'App\Http\Controllers\ControllerUser@process_create');
Route::get('/user/update/{no_induk}', 'App\Http\Controllers\ControllerUser@update');
Route::post('/user/update/{no_induk}/process', 'App\Http\Controllers\ControllerUser@process_update');
Route::get('/user/delete/{no_induk}', 'App\Http\Controllers\ControllerUser@delete');

