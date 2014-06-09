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

Route::get('/', function()
{
	echo 'hello';
});


Route::get('/api-documentation', function()
{
	return View::make('api_documentation');
});

/*
|--------------------------------------------------------------------------
| Code4Vote Challenge Box API Routes
|--------------------------------------------------------------------------
|
| Define all routes for Code4Vote Challenge API
|
*/
// Route::group(array('prefix' => 'api/1', 'before' => 'validator.api'), function()
Route::group(array('prefix' => 'api/1'), function()
{

	Route::resource('vote', 'UserVoteController');

});



