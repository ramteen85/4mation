<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Skill;
use Auth;
use Validator;
use Hash;
use DB;


class RegistrationController extends Controller
{
    public function updateprofile()
    {

        /* update user profile */


        // grab all information

        $fname = request('fname');
        $lname = request('lname');
        $email = request('email');
        $about = request('aboutme');
 
 

        //get skills
        $checkboxes= [

            request('cb1'), request('cb2'), request('cb3'),
            request('cb4'), request('cb5'), request('cb6'),
            request('cb7'), request('cb8'), request('cb9'),
            request('cb10'), request('cb11'), request('cb12') 
        ];


        

        //validate information

        $rules = "";


     
            $rules = array(
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'email' => 'required|email|max:50,'.Auth::user()->id,
            'aboutme' => 'required|max:500,'.Auth::user()->id,

            );
       
        


        $messages = array(
            'fname.required'=>'Please enter your first name.',
            'fname.max'=>'Your first name cannot exceed 50 characters.',
            'lname.required'=>'Please enter your last name.',
            'lname.max'=>'Your last name cannot exceed 50 characters.',
            'email.required'=>'Please enter your Email Address.',
            'email.max'=>'Your email cannot exceed 50 characters.',

            'aboutme.max'=>'Your profile description cannot exceed 500 characters.',
            
        );

        $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

         if (!$validation->passes()) 
         {
            //if validation fails return errors
            return redirect('/eprofile')->withErrors($validation->errors());
         }

        
         

        //validation passed - save data

        //get username
        $username = Auth::user()->username;

        //get user object
        $user = User::getByUsername($username);

        //get basic details
        $user->firstname = $fname;
        $user->lastname = $lname;
        $user->email = $email;
        $user->about = $about;

        //save data
        $user->save();

        //save checkboxes
        Skill::setSkills($checkboxes, Auth::user()->id);          
        

        //refresh the page
        return redirect('/eprofile');
         


    }

    public function changepass()
    {

        /* Change user password */

        //validate form

         $messages = array(
            'oldpass.required'=>'Your current password is required.',
            'oldpass.max'=>'Your password cannot exceed 100 characters.',
            'newpass.required'=>'You must enter a new password.',
            'newpass.max'=>'Your password cannot exceed 100 characters.'
        );



        $rules = array(
            'oldpass' => 'required|max:100',
            'newpass' => 'required|max:100',
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
        /* register user account */


    	//validate form

    	$this->validate(request(), [
    		'username' => 'required|unique:users|max:32',
    		'firstname' => 'required|max:50',
    		'lastname' => 'required|max:50',
    		'email' => 'required|email|max:50',
    		'password' => 'required|confirmed|max:100',
    		
    	]);

    	//create and save user

    	$user = User::create([ 
			'username' => request('username'),
			'firstname' => request('firstname'),
			'lastname' => request('lastname'),
			'email' => request('email'),
			'about' => '<< Tell us about yourself >>',
			'role' => 0,
            'intro' => 0,
			'password' => request('password')
		]);

        //get new user id

        $userteam = User::getIdByUsername(request('username'));


        //assign user to a default team


        DB::table('team_user')->insertGetId([
            'user_id'      => $userteam,
            'team_id'      => 1
            
        ]);




    	//log user in
    	//auth()->login($user);

    	//$user->get();

    	
    	//flash session and redirect

    	session()->flash('regd', 'ok');


    	return redirect('/');


    }
}
