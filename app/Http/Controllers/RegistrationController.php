<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	//validate form

    	$this->validate(request(), [
    		'username' => 'required|unique:users',
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|confirmed',
    		
    	]);

    	//create and save user

    	$user = User::create([ 
			'username' => request('username'),
			'firstname' => request('firstname'),
			'lastname' => request('lastname'),
			'email' => request('email'),
			'about' => '',
			'role' => 0,
			'password' => request('password')
		]);


    	//log user in
    	//auth()->login($user);

    	$user->get();

    	//send email - not complete


    	//flash session and redirect

    	session()->flash('regd', 'ok');


    	return redirect('/');


    }
}
