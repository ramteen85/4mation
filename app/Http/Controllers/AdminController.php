<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Session;
use Response;
use App\User;
use App\Skill;
use App\Task;
use App\Email;
use App\Message;
use App\Announcement;
use App\Team;
use DB;
use Auth;
Use Redirect;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function inbox()
    {
    	if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            $emails = Email::latest()->get();

            return view('layouts.admin.inbox', compact('emails'));
        }
    }

    public function email()
    {     


        if ( Session::token() !== request( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Invalid Authorization Token'
            ) );
        }


        $fname = request('firstname');
        $lname = request('surname');
        $email = request('email');
        $subject = request('subject');
        $message = request('message');
        

        $rules = array(
            'firstname' => 'required|max:32',
            'surname' => 'required|max:32',
            'email' => 'required|email|max:50',
            'subject' => 'required|max:50',
            'message' => 'required|max:170',

        );

        $messages = array(
            'firstname.required'=>'Please enter your first name.',
            'firstname.max'=>'Please enter no more than 50 characters for your first name.',
            'email.required'=>'Please enter your Email Address.',
            'email.email'=>'Please enter a valid Email Address.',
            'email.max'=>'Please enter an email address of no more than 50 characters.',
            'surname.required'=>'Please enter your last name.',
            'surname.max'=>'Please enter no more than 50 characters for your last name.',
            'message.max'=>'Please enter no more than 170 characters for your message.',
            'message.required'=>'You can\'t send a blank message!.',
        );

        $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

        if (!$validation->passes()) 
         {
            return Response::json( array(
                
                'errors' => $validation->errors()
            ) );




            //if validation fails return errors
            // return redirect('/')->withErrors($validation->errors());
         }


         //validation passes

         //send message

         //create and save user

        $user = Email::create([ 
            
            'firstname' => $fname,
            'lastname' => $lname,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
            
        ]);

        //flash session and redirect

        //session()->flash('emsent', 'ok');

        //go back

         return Response::json( array(
                
            'ok' => "Your E-mail has been sent successfully. We will be in Touch!"
        ) );

         
        
    }

    public function users()
    {
        if (Auth::guest()) 
        {
            return view('index');
        }
        else
        {
            return view('layouts.admin.useroptions');
        }
    }

    public function tasks()
    {
         if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            return view('layouts.admin.tasks');
        }
    }
}


    
