<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PersonController;


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



Route::get('/','CompanyController@index');
Route::get('/job','CompanyController@showJob');
Route::get('job/details/{id}','JobsController@JobDetails');

Route::get('/person/{id}','PersonController@show');
Route::get('/person','PersonController@index');








