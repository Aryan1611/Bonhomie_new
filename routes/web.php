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
Route::get('/allevents','HomeController@index')->name('allevents');
Route::get('/addevent','HomeController@view_addevent');
Route::get('/coordinators','HomeController@view_coordinators');
Route::get('/requests','HomeController@view_requests');
Route::get('/participants','HomeController@view_participants');
Route::get('/participation','HomeController@participation');


//Admin filter
Route::post('/participants','StudentController@filterStudents');
Route::post('/coordinators','StudentController@filterCoordinators');
Route::post('/allevents','HomeController@index');
Route::post('/participation','HomeController@participation');



//Events
Route::resource('eventparticipation','EventParticipationController');

//Student
Route::resource('student','StudentController');
Route::get('/profile','StudentController@profile')->name('profile');
Route::get('/updateprofile','StudentController@updateprofile');
Route::get('/editprofile','StudentController@editprofile');
Route::get('/logout','StudentController@logout');



//Main Routes
Route::view('/bonhomie','students.index');
Route::view('/event-details','students.event-details');
Route::view('/notice','students.notice');
Route::get('/today-events','EventController@today_events');



