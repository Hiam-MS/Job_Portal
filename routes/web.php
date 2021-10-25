<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\ApplicantController;




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

Route::get('/', function () {
    return view('index');
});
// Route::get('/','CompanyController@index')->name('index');
Route::get('/JobCategory','JobCategoryController@showJobJobCategory');
Auth::routes();
   
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//     list jobs and job details
Route::get('/job/details/{id}','JobsController@JobDetails')->name('JobDetails');
Route::get('/job/showJobs','JobsController@showJob')->name('job');
//
Route::group(['middleware' => 'prevent-back-history'],function(){
    
    Auth::routes();


//    *******************   auth  *****************

Route::group(['middleware' => 'auth'], function(){
    Route::get('/change-password','Auth\ChangePasswordController@index')->name('password.change'); 
    Route::post('/update-password','Auth\ChangePasswordController@ChangePassword')->name('password.update'); 

    Route::get('/edit-profile','UserController@editform')->name('edit.form'); 
    Route::post('/update-profile','UserController@updateprofile')->name('profile.update');

    Route::get('/edit-profile-email','UserController@editformEmail')->name('edit.formEmail'); 
    Route::post('','UserController@updateprofileEmail')->name('profile.updateEmail');

    Route::get('/delete-profile', 'UserController@Deleteprofile')->name('profile.delete');

// ********************* role company *******************
   

    Route::group(['middleware' => 'role:company'], function(){

        Route::get('/company/dashboard','CompanyController@getDash')->name('CompanyDash');


Route::get('/company/profile','CompanyController@getAddCompanyForm')->name('company.profile');
Route::post('/company/storeProfile','CompanyController@storeProfile')->name('company.addCompany');
Route::get('/company/viewProfile','CompanyController@viewProfile')->name('CompanyViewProfile');
Route::get('/company/editProfile','CompanyController@editCompanyProfile')->name('CompanyEditProfile');
Route::post('/company/editProfile/{id}','CompanyController@updatCompanyProfile');
Route::get('company/shortList','CompanyController@getJob')->name('CompanyJob');

Route::get('company/endJobs','CompanyController@endJobs')->name('CompanyEndJobs');


//********************************************* */

Route::get('/job/addJob','JobsController@addJob')->name('addJob');
Route::post('/job/storeJob','JobsController@storeJob');

Route::post('/job/update_EndJob/{id}', 'CompanyController@update_JobEnd')->name('update_JobEnd');



});


// ********************* role company + admin *******************

Route::group(['middleware' => 'role:company|admin'], function(){
// view all resume and resume details
Route::get('view_resuem','PersonController@viewResuemForm')->name('resuems');
Route::get('Person/details/{id}','PersonController@ResuemDetails'); 

Route::post('/resume/search','PersonController@searchResume')->name('search.Resume');

//

});


 //******************   role  person     ************

    Route::group(['middleware' => 'role:persone'], function(){
     

    Route::get('/resume/dashboard','PersonController@index')->name('PersonDash');

    // CV preview
    Route::get('/resume/ViewpersonalInfo','PersonController@ViewpersonalInfo');
    //
//show form (add personal info)
    Route::get('/resume/create','PersonController@createResume')->name('resuem.create');
    Route::post('/resume/store','PersonController@store');
    Route::get('/resume/edit-Personal-Info', 'PersonController@editPersonalInfo')->name('PersonalInfo.edit');
    Route::PUT('/resume/update-Personal-Info','PersonController@updatPersonalInfo');
//show form for add Edu _ Exp _ skill
    Route::get('/resume/createEdu','PersonController@createResumeEdu')->name('edu');
//Education
    Route::get('/resume/addEducation/{id}','PersonController@createPersonEdu');
    Route::post('/resume/storePersonEdu','PersonController@storePersonEdu')->name('StoreEdu');
    Route::get('/resume/deleteEdu/{id}', 'PersonController@DeletePersonEdu');
    Route::get('/resume/editEdu/{cid}', 'PersonController@editPersonEdu');
    Route::PUT('/resume/updateEdu','PersonController@updateEdu');

//Experience
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
Route::post('/resume/storePersonJobCat','PersonController@storePersonJobCat');


 });

/**************Admin******************** */
 Route::group(['middleware' => 'role:admin'], function(){

    Route::get('/company/show','CompanyController@showCompany')->name('company.show');
    Route::get('/country','AdminController@addCountry');
    Route::get('/city/{id}','AdminController@addCity');
    Route::get('/admin/dashboard','AdminController@getDash')->name('admin.Dash');
    Route::get('/admin/pending_jobs','AdminController@pendingJob')->name('pendingJob');
    Route::post('/job/accepte_Job/{id}', 'AdminController@accepte_JobStatuse')->name('accepte_JobStatuse');
    Route::post('/job/denie_Job/{id}', 'AdminController@denied_JobStatuse')->name('denied_JobStatuse');
    

    
    



});


});

});


Route::get('/resume/applyedJob','ApplicantController@applyedJob')->name('applyedJob');

Route::post('/job/application/{id}/store', 'ApplicantController@storeApplyedJob');

Route::get('/job/applyedToJob/{id}','ApplicantController@getApplyedToJob')->name('Applicants');

Route::get('/job/applyedToJob/{id}/{user}/hire', 'ApplicantController@hire');

Route::get('/job/applyedToJob/{id}/{user}/reject', 'ApplicantController@reject');


Route::get('/job/applicationForm/{id}','ApplicantController@getApplicationForm');

//Route::get('res_det','PersonController@res_det');
// //auth _ register _ login
// Route::get('auth/login','HomeController@login');
// Route::get('auth/register','HomeController@register');

Route::get('/select2', function () {
    return view('person.testselect2');
});