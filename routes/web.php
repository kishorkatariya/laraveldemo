<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', 'RegistrationController@create')->name('register');
Route::get('/login', 'RegistrationController@create')->name('login');
Route::get('/logout', 'RegistrationController@create')->name('logout');