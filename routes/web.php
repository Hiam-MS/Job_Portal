<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobCategoryController;
use Illuminate\Routing\Redirector;



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
Route::get('/job','CompanyController@showJob')->name('job');
Route::get('job/details/{id}','JobsController@JobDetails');
Route::get('addJob','JobsController@addJob')->name('addJob');

Route::get('/person/{id}','PersonController@show');
Route::get('/person','PersonController@index');




Route::get('/country','AdminController@addCountry');
Route::get('/city/{id}','AdminController@addCity');

Route::get('/JobCategory','JobCategoryController@showJobJobCategory');


//******************person************
Route::get('/resume/skill','PersonController@index');
Route::get('/resume/create','PersonController@createResume')->name('resuem.create');
Route::post('/resume/store','PersonController@store');
Route::get('/resume/createEdu/{id}','PersonController@createResumeEdu')->name('edu');
Route::get('/resume/addEducation/{id}','PersonController@createPersonEdu');
Route::post('/resume/storePersonEdu','PersonController@storePersonEdu')->name('StoreEdu');
//Route::get('/resume/addEducation','PersonController@createPersonEdu');
Route::get('Person/details/{id}','PersonController@ResuemDetails');
Route::get('/resume/addExperience/{id}','PersonController@createPersonExp');
Route::post('/resume/storePersonExp','PersonController@storePersonExp')->name('StoreExp');
//skill//
Route::get('/resume/addSkill/{id}','PersonController@createPersonSkill');
Route::post('/resume/storePersonSkill','PersonController@storePersonSkill')->name('StoreSkill');
//Course //
Route::get('/resume/addCourse/{id}','PersonController@createPersonCourse');
Route::post('/resume/storePersonCourse','PersonController@storePersonCourse')->name('StoreCourse');

Route::get('/resume/JobCategory/{id}','PersonController@createResumeJobCat')->name('JobCategory');
Route::post('/resume/storePersonJobCat','PersonController@storePersonJobCat');






// //auth _ register _ login
// Route::get('auth/login','HomeController@login');

// Route::get('auth/register','HomeController@register');


Route::get('view_resuem','PersonController@viewResuemForm')->name('resuems');

Route::get('res_det','PersonController@res_det');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
