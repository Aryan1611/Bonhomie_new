<?php

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('students.index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User Authentication Routes
Route::get('/registration', 'StudentController@index')->name('registration');
Route::get('/signin', 'Auth\UserLoginController@index')->name('signin');
Route::post('/registration', 'StudentController@store');
Route::post('/signin', 'Auth\UserLoginController@login');


//Admin
Route::resource('events','EventController');
Route::resource('student','StudentController');
Route::get('/allevents','HomeController@index')->name('allevents');
Route::get('/addevent','HomeController@view_addevent');
Route::get('/coordinators','HomeController@view_coordinators');
Route::get('/requests','HomeController@view_requests');
Route::get('/participants','HomeController@view_participants');

//Admin filter
Route::post('/participants','StudentController@filterStudents');
Route::post('/coordinators','StudentController@filterCoordinators');


//Main Routes
Route::view('/bonhomie','students.index');
Route::view('/event-details','students.event-details');
Route::view('/notice','students.notice');
Route::get('/today-events','EventController@today_events');



