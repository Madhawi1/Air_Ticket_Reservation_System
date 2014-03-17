<?php

class HomeController extends BaseController {

	public function home()
	{
		//echo 'Hello ',$user=User::find(1)-> FirstName;

		/*Mail::send('emails.auth.test',array('name'=> 'AAA'),function($message){

			$message-> to(Customers::find(112313),Customers::find(112313)-> username)->subject('test Mail');
		});*/

	return View::make('home');

	}

}