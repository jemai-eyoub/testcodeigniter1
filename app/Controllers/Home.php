<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		dd($this->request);
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
