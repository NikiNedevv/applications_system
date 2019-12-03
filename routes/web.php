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
Route::group(['middleware' => ['auth']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/users/all','AdminController@showAllUsers')->name('show.all.users');
	Route::get('/user/{user}/change/status','AdminController@changeUserStatus')->name('admin.user.change.status');

	Route::get('/user/home', 'UserController@index')->name('user.home');
	Route::resource('specialities', 'SpecialityController');
	Route::resource('subjects', 'SubjectController');
	Route::get('/testsession', 'TestSessionsController@index')->name('testsession');

	Route::resource('enrollments', 'SpecialityEnrollmentController')->names('enrollments');
	Route::get('/ajaxExams', 'SpecialityEnrollmentController@ajaxExams');
});
