<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// view route
Route::auth();
Route::resource('article', 'DocController');
Route::resource('people',  'ProfileController');
Route::resource('people.roles', 'RoleController');
Route::resource('people.roles.perms', 'PermController');
Route::resource('photo', 'ImageController');
Route::resource('label', 'LabelController');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/intro', 'HomeController@intro');
Route::get('/help', 'HelpController@index');
Route::get('admin', 'AdminController@index');
Route::post('admin', 'AdminController@update');

// rest api route
Route::group(['prefix' => 'api/v1'], function () {
    Route::get('photo/{photo}/comment', 'ImageController@comments');
    Route::post('photo/{photo}/comment', 'ImageController@addComment');
});
