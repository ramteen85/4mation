<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use Hash;


class RegistrationController extends Controller
{
    public function changepass()
    {
        //validate form





         $messages = array(
            'oldpass.required'=>'Your current password is required.',
            'newpass.required'=>'You must enter a new password.'
        );



        $rules = array(
            'oldpass' => 'required',
            'newpass' => 'required',
        );

         $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

         if (!$validation->passes()) 
         {
            return redirect('/eprofile')->withErrors($validation->errors());
         }

         //validation has passed


        //get username
        $username = Auth::user()->username;

        //get user object
        $user = User::getByUsername($username);

        //check old password
        $flag = User::checkPassword(strtolower($username), request('oldpass'));

        if($flag == false)
        {
           session()->flash('passwrong', 'ok'); 
           return redirect('/eprofile');
        }


        //change password

        $user->password = request('newpass');

        $user->save();

        //flash session
        session()->flash('chpass', 'ok');

        return redirect('/eprofile');

    }

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
