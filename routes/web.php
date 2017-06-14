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

Route::get('/', 'PagesController@index')->name('home');
Route::get('login', 'PagesController@showLoginForm');
Route::get('register', 'PagesController@showRegisterForm');
Route::get('tasks', 'PagesController@showTasks');
Route::post('members', 'PagesController@logmein');
Route::post('register', 'RegistrationController@create');
Route::get('/logout', 'PagesController@destroy');
Route::get('/members', 'PagesController@members');
Route::get('eprofile', 'PagesController@eprofile');
Route::get('profile/{user}', 'PagesController@profile');
Route::get('admin', 'PagesController@admin');
Route::get('/messages/inbox', 'PagesController@inbox');
Route::get('/messages/compose', 'PagesController@compose');
Route::get('findmates', 'PagesController@findmates');
Route::post('/changepass', 'RegistrationController@changepass');
Route::post('/updateprofile', 'RegistrationController@updateprofile');
Route::post('/checktask', 'PagesController@checktask');

