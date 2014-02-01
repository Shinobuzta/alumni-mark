<?php

class AlumniController extends BaseController {

	public function getIndex()
	{
		return "asasa";
	}

	public function getNew()
	{
        return View::make('registration')
        	->with("alumnis", Alumni::get());
	}

	public function postCreate()
	{
		$input	= Input::all();
		$rules	= array(
					'username' 	=> 'required',
					'email' 	=> 'required',
					'password' 	=> 'required',
					'studentid' => 'required',
					'firstname' => 'required',
					'middlename'=> 'required',
					'lastname' 	=> 'required',
					'address' 	=> 'required',
					'contact' 	=> 'required',
					'course' 	=> 'required',
					'batch' 	=> 'required',
					'gender' 	=> 'required',
					'birthday' 	=> 'required'
				);
        
        $validation = Validator::make($input,$rules);
        if($validation->fails()){
			return View::make('registration')
        		->withErrors($validation)
        		->with("alumnis", Alumni::get());
        }else{
        	$user = User::create(array(
        			'username'	=>	Input::get('username'),
					'email'		=>	Input::get('email'),
					'password'	=>	Hash::make(Input::get('password')),
					'role'		=>	'alumni'
        		));
        	$alumni = Alumni::create(array(
					'user_id'	=>	$user->id,
					'firstname' => Input::get('firstname'),
					'middlename'=> Input::get('middlename'),
					'lastname' 	=> Input::get('lastname'),
					'address' 	=> Input::get('address'),
					'contact' 	=> Input::get('contact'),
					'course' 	=> Input::get('course'),
					'batch' 	=> Input::get('batch'),
					'gender' 	=> Input::get('gender'),
					'birthday' 	=> Input::get('birthday')
			));
			return "success";
        }
	}

	public function store()
	{
		
	}

	public function show($id)
	{
        return View::make('alumnis.show');
	}

	public function edit($id)
	{
        return View::make('alumnis.edit');
	}

	public function getUpdate($id)
	{
		return $id;
	}

	public function destroy($id)
	{
		//
	}

}
