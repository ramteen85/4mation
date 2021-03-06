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

//pages controller operations

Route::get('/', 'PagesController@index')->name('home');
Route::get('login', 'PagesController@showLoginForm');
Route::get('register', 'PagesController@showRegisterForm');
Route::get('tasks', 'PagesController@showTasks');
Route::post('members', 'PagesController@logmein');
Route::get('/logout', 'PagesController@destroy');
Route::get('/members', 'PagesController@members');
Route::get('eprofile', 'PagesController@eprofile');
Route::get('profile/{user}', 'PagesController@profile');
Route::get('/messages/inbox', 'PagesController@inbox');
Route::get('/getplayers/{id}', 'PagesController@players');
Route::get('/messages/sent', 'PagesController@sent');
Route::get('/messages/compose', 'PagesController@compose');
Route::get('/getteams', 'PagesController@teams');
Route::get('findmates', 'PagesController@findmates');
Route::post('/checktask', 'PagesController@checktask');
Route::get('/messages/message/{msgid}', 'PagesController@readmsg');
Route::get('/messages/compose/{username}', 'PagesController@compose2');
Route::post('/searchusers', 'PagesController@search');
Route::get('/404','PagesController@errorpage');
Route::get('/video','PagesController@intro');


//registration controller
Route::post('register', 'RegistrationController@create');
Route::post('/changepass', 'RegistrationController@changepass');
Route::post('/updateprofile', 'RegistrationController@updateprofile');

//message controller
Route::post('/sendmsg', 'MessageController@send');
Route::post('/messages/deletereceiver/{msgid}', 'MessageController@delr');
Route::post('/messages/deletesender/{msgid}', 'MessageController@dels');

//admin controller
Route::post('/selecttask', 'AdminController@updatetask');
Route::get('/admin', 'AdminController@inbox');
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/tasks', 'AdminController@tasks');
Route::post('/delemail', 'AdminController@delemail');
Route::post('/postannouncement', 'AdminController@announcement');
Route::post('/createtask', 'AdminController@createtask');
Route::post('/createteam', 'AdminController@createteam');
Route::post('/delteam', 'AdminController@delteam');






//ajax routes
Route::get('/getteams2', function() {

    
    $teams = \App\Team::all();

	return View::make('layouts.admin.teamlist', compact('teams'));
});

Route::post('/assignteam', [
    'uses' => 'AdminController@assignteam',
    'as' => '/assignteam'
]);


Route::post('/sendemail', [
    'uses' => 'AdminController@email',
    'as' => 'sendemail'
]);

Route::post('/usrdelete', [
    'uses' => 'AdminController@deluser',
    'as' => 'usrdelete'
]);


Route::get('/usrsearch', [
    'uses' => 'AdminController@ajaxuser',
    'as' => 'usrsearch'
]);

Route::get('/taskdel', [
    'uses' => 'AdminController@taskdel',
    'as' => 'usrsearch'
]);

Route::get('/idcheck', [
    'uses' => 'AdminController@ajaxid',
    'as' => 'idcheck'
]);

Route::post('/usrgrant', [
    'uses' => 'AdminController@grantuser',
    'as' => 'usrgrant'
]);


Route::post('/usrrevoke', [
    'uses' => 'AdminController@revokeuser',
    'as' => 'usrrevoke'
]);
