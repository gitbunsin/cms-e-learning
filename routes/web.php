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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('kh-works');
});

Auth::routes();

//Route::get('/home', 'FrontendController@index')->name('home');
Route::get('/administration' ,'Backend\BackendController@index');


/************************************************************************************
 *                                  Backend routes
 ************************************************************************************/

Route::group(['namespace' => 'Backend', 'prefix' => 'administration'], function ($request) {

    Route::resource('candidate', 'CandidateController');
    Route::resource('companyProfile', 'CompanyController');
    Route::resource('vacancy', 'VacanciesController');
    Route::resource('jobs-categories','JobTitleController');
    Route::resource('jobs','JobController');
    Route::resource('employee','EmployeeController');
    Route::resource('interview','InterviewController');
    Route::resource('cv','CvController');

});

/************************************************************************************
 *                                  Frontend routes
 ************************************************************************************/

Route::group(['namespace' => 'Frontend','prefix'=>'kh-works'], function () {
    Route::get('/posts', 'KhWorksController@posts');
    Route::get('/apply-job/{id}/user_id/{user_id}', 'KhWorksController@applyJobs');
    Route::resource('jobs', 'JobController');
    Route::resource('user_cv','CvController');
    Route::get('/search','KhWorksController@scopeSearch');
    Route::get('/lists', 'KhWorksController@lists');
    Route::get('/policy', 'KhWorksController@policy');
//    Route::get('/singing', 'KhWorksController@signing');
    Route::resource('registers', 'RegisterController');
    Route::resource('login','LoginController');
    Route::get('logout','LoginController@getLogout');
    Route::post('/RegisterEmployee','RegisterController@RegisterEmployee');
//    Route::post('/signing','LoginController@signing');
//    Route::get('/signout','LoginController@signout');
});
/************************************************************************************
 *                                  Frontend routes
 ************************************************************************************/

Route::get('/kh-works', 'Frontend\KhWorksController@index');
//Route::post('registers', 'RegisterController@store');