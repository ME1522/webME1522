<?php

class UserController extends BaseController
{

	// gets the view for the register page
	public function getCreate()
	{
		return "regester page";
	}

	// gets the view for the login page
	public function getLogin()
	{
		return "login page";
	}

	public function postCreate()
	{

	}

	public function postLogin()
	{
		
	}
}

?>