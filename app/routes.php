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

Route::get('/tournaments', 'TournamentController@getIndex');

Route::post('/lala/lele', function() {
    echo 'hola';
    var_dump($_POST);
    var_dump(unserialize(base64_decode($_POST['opauth'])));
});
