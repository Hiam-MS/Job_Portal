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


    Route::get('/','CompanyController@index');
    Auth::routes();
    Route::get('/','CompanyController@index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job/details/{id}','JobsController@JobDetails');
Route::get('/job/showJobs','JobsController@showJob')->name('job');

Route::get('view_resuem','PersonController@viewResuemForm')->name('resuems');

Route::get('/job/details/{id}','JobsController@JobDetails');

Route::get('Person/details/{id}','PersonController@ResuemDetails'); 



Route::group(['middleware' => 'auth'], function(){
   

    Route::group(['middleware' => 'role:company'], function(){
       

// jobs

Route::get('/company/profile','CompanyController@getAddCompanyForm')->name('company.profile');
Route::post('/company/storeProfile','CompanyController@storeProfile')->name('company.addCompany');
Route::get('/company/editProfile','CompanyController@editCompanyProfile')->name('CompanyProfile');
Route::post('/company/editProfile/{id}','CompanyController@updatCompanyProfile');

Route::get('/company/dashboard','CompanyController@getDash')->name('CompanyDash');
Route::get('company/shortList','CompanyController@getJob')->name('CompanyJob');

//********************************************* */


Route::get('/job/addJob','JobsController@addJob')->name('addJob');

// Route::get('/job/showJobs','JobsController@showJob')->name('job');
Route::post('/job/storeJob','JobsController@storeJob');




Route::get('/company/show','CompanyController@showCompany')->name('company.show');

Route::get('Person/details/{id}','PersonController@ResuemDetails');




});

// Route::post('/store/job','JobsController@storeJob');


Route::get('/country','AdminController@addCountry');
Route::get('/city/{id}','AdminController@addCity');

Route::get('/JobCategory','JobCategoryController@showJobJobCategory');
Route::get('/profile','CompanyController@index');

//******************person************

    Route::group(['middleware' => 'role:persone'], function(){
        // Route::get('/resume/skill','PersonController@index');

        Route::get('/resume/dashboard','PersonController@index');
        Route::get('/resume/ViewpersonalInfo','PersonController@ViewpersonalInfo');

    Route::get('/resume/create','PersonController@createResume')->name('resuem.create');
    Route::post('/resume/store','PersonController@store');
    Route::get('/resume/createEdu','PersonController@createResumeEdu')->name('edu');
    Route::get('/resume/addEducation/{id}','PersonController@createPersonEdu');
    Route::post('/resume/storePersonEdu','PersonController@storePersonEdu')->name('StoreEdu');
    Route::get('/resume/deleteEdu/{id}', 'PersonController@DeletePersonEdu');
    Route::get('/resume/editEdu/{cid}', 'PersonController@editPersonEdu');
    Route::PUT('/resume/updateEdu','PersonController@updateEdu');


    Route::get('/resume/addExperience/{id}','PersonController@createPersonExp');
    Route::post('/resume/storePersonExp','PersonController@storePersonExp')->name('StoreExp');
    Route::get('/resume/deleteExperience/{id}', 'PersonController@DeletePersonExperience');
    Route::get('/resume/editExperience/{cid}', 'PersonController@editPersonExperience');
    Route::PUT('/resume/updatExperience','PersonController@updateExperience');
//skill//
Route::get('/resume/addSkill/{id}','PersonController@createPersonSkill');
Route::post('/resume/storePersonSkill','PersonController@storePersonSkill')->name('StoreSkill');
Route::get('/resume/deleteSkill/{id}', 'PersonController@DeletePersonSkill');
Route::get('/resume/editSkill/{cid}', 'PersonController@editPersonSkill');
Route::PUT('/resume/updateSkill','PersonController@updateSkill');
//Course //
Route::get('/resume/addCourse/{id}','PersonController@createPersonCourse');
Route::post('/resume/storePersonCourse','PersonController@storePersonCourse')->name('StoreCourse');
Route::get('/resume/deleteCourse/{id}', 'PersonController@DeletePersonCourse');
Route::get('/resume/editCourse/{cid}', 'PersonController@editPersonCourse');
Route::PUT('/resume/updateCourse','PersonController@updateCourse');


//Route::get('/resume/JobCategory/{id}','PersonController@createResumeJobCat')->name('JobCategory');
Route::post('/resume/storePersonJobCat','PersonController@storePersonJobCat');
// Route::get('view_resuem','PersonController@viewResuemForm')->name('resuems');







    });






});

// //auth _ register _ login
// Route::get('auth/login','HomeController@login');

// Route::get('auth/register','HomeController@register');


/**************Admin******************** */


Route::get('/admin/dashboard','AdminController@getDash');

Route::get('res_det','PersonController@res_det');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


