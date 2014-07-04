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

// Home Page
Route::get('/', ['uses' => 'HomeController@showWelcome']);


// FizzBuzz Results Page
Route::post('fizzbuzz', [
    'before' => 'csrf',
    'as' => 'fizzbuzz',
    'uses' => 'FizzBuzzController@showResultsPage'
]);


// FizzBuzz redirect for GET method
Route::get('fizzbuzz', function(){
    return Redirect::to('/')->withErrors('Form must first be filled out');
});