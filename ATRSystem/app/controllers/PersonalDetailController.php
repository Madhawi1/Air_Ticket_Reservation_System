<?php
class PersonalDetailController extends BaseController{

	public function getCreate(){

		return View::make('layout.personal_details');
	}
	public function postCreate(){

		$validator= Validator::make(Input::all(),array(
				'lastname'			=>'required|max:20',
				'firstname'			=>'max:20',
				'initials'		=>'required|max:10',
				'email'		=>'required|email|unique:customers',
				'telephone'=>'required|max:12'
			));
//print_r(Input::all());
		if($validator->fails()){
			return Redirect::route('details-personal')
			->withErrors($validator)
			->withInput();

		}
		else{
			//save details


		}
		
	}

}