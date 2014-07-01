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
	return View::make('hello');
});


Route::post('fizzbuzz', array('before' => 'csrf', 'as' => 'fizzbuzz', function(){

    $rules = array(
        'userName' => 'required',
        'userEmail' => 'required|email',
        'userDateOfBirth' => 'required|date_format:m/d/Y'
    );

    $validator = Validator::make(Input::all(), $rules);

    if($validator->fails()){
        return Redirect::to('/')->withErrors($validator);
    }

    return View::make('fizzbuzz')->with('userData', Input::all());
}));