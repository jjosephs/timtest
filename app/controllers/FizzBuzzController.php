<?php

class FizzBuzzController extends BaseController {


    /**
     * Displays FizzBuzz Page where user data and calculations are shown
     *
     * @return mixed
     */
    public function showResultsPage()
	{
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
	}

}
