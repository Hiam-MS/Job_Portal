<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobCategoryController;


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


// jobs
Route::get('/','CompanyController@index');
Route::get('/job','CompanyController@showJob');
Route::get('job/details/{id}','JobsController@JobDetails');

Route::get('/person/{id}','PersonController@show');
Route::get('/person','PersonController@index');



Route::get('/country','AdminController@addCountry');
Route::get('/city/{id}','AdminController@addCity');

Route::get('/JobCategory','JobCategoryController@showJobJobCategory');


//person
Route::get('/resume/skill','PersonController@index');
Route::get('/resume/create','PersonController@createResume');
Route::post('/resume/store','PersonController@store');



//auth _ register _ login
Route::get('auth/login','HomeController@login');

Route::get('auth/register','HomeController@register');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
