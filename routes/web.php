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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'FrontendController@index')->name('home');
Route::get('/administration' ,'Backend\BackendController@index');


/************************************************************************************
 *                                  Backend routes
 ************************************************************************************/

Route::group(['namespace' => 'Backend', 'prefix' => 'administration'], function ($request) {

    Route::resource('cadidate', 'CandidateController');
    Route::resource('companyProfile', 'CompanyController');
    Route::resource('vacancy', 'VacanciesController');
    Route::resource('job','JobController');

});

/************************************************************************************
 *                                  Frontend routes
 ************************************************************************************/

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', function () {
        return redirect('ui');
    });

    Route::get('/posts', 'UiController@posts');
//    Route::get('/registers', 'UiController@register');
    Route::get('/job', 'UiController@job');
    Route::get('/lists', 'UiController@lists');
    Route::get('/policy', 'UiController@policy');
    Route::get('/singin', 'UiController@singin');
    Route::resource('registers', 'RegistrationController');
    Route::post('/RegisterEmployee','RegistrationController@RegisterEmployee');
    Route::post('/singin','LoginController@singin');
});




Route::get('/ui', 'Frontend\UiController@index');


//Route::post('registers', 'RegistrationController@store');




Route::get('/tickets', 'ticketController@index');
Route::get('/create/ticket','TicketController@create');
Route::post('/create/ticket','TicketController@store');

Route::get('/edit/ticket/{id}','TicketController@edit');
Route::patch('/edit/ticket/{id}','TicketController@update');


Route::delete('/delete/ticket/{id}','TicketController@destroy');
