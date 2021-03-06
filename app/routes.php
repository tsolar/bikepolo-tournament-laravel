<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    return View::make('hello');
});

// opauth
Route::any('auth/social/{strategy}/{action?}', ['as' => 'auth.social', function ($strategy, $action = 'request') {

app('opauth')->run();

}])->where(['strategy' => '.*']);

Route::controller('tournaments', 'TournamentController');
Route::controller('profile', 'ProfileController');

Route::post('/lala/lele', function() {
    echo 'hola';
    var_dump($_POST);
    var_dump(unserialize(base64_decode($_POST['opauth'])));
});

// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::get( 'login',                       'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',        'UserController@do_forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',         'UserController@do_reset_password');
Route::get( 'logout',                      'UserController@logout');
Route::get( 'user/logout',                 'UserController@logout');

// resources
Route::resource('teams', 'TeamController');