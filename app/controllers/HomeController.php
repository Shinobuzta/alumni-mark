<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }

	public function getIndex()
	{
		return View::make('home')
			->with('title', 'Home');
	}

	public function getAbout()
	{
		return View::make("about")
			->with('title', 'About');
	}

	public function getAlumni()
	{
		return View::make("alumni")
			->with('title', 'Alumni');
	}

	public function getAnnouncements()
	{
		return View::make("announcements")
			->with('title', 'Announcements');
	}

	public function getSchoolCalendar()
	{
		return View::make("school-calendar")
			->with('title', 'School Calendar');
	}

	public function getContacts()
	{
		return View::make("contacts")
			->with('title', 'Contacts');
	}	

	public function getLogin()
	{
		return View::make("login")
			->with('title', 'Login');
	}	



}