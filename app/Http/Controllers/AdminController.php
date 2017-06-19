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




    public function ajaxuser()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            if ( Session::token() !== request( '_token' ) ) {
                return Response::json( array(
                    'msg' => 'Invalid Authorization Token'
                ) );
            }

            //all good find users
        
            $query = request('search');

            $words = explode(' ', $query);

            $arr_results = array();

            $final = array();

            //check

            if(isset($query) && $query != "" && $query != null)
            {
                
                foreach($words as $word)
                {
                    
                    $data = User::where('username', 'LIKE', '%'. $word . '%')
                    -> get();
                    foreach($data as $key => $value)
                    {
                        if (!array_key_exists($key, $final)) {
                            $arr_results[] = ['id' => $value->id, 'username' => $value->username, 'created_at' => $value->created_at ];
                        }
                    }
                }

                $final = array_merge($arr_results);

                foreach($words as $word)
                {
                    
                    $data = User::where('firstname', 'LIKE', '%'. $word . '%')
                    -> get();
                    foreach($data as $key => $value)
                    {
                        if (!array_key_exists($key, $final)) {
                            $arr_results[] = ['id' => $value->id, 'username' => $value->username, 'created_at' => $value->created_at ];
                        }
                        
                    }
                }

                $final = array_merge($arr_results);

                foreach($words as $word)
                {
                    
                    $data = User::where('lastname', 'LIKE', '%'. $word . '%')
                    -> get();
                    foreach($data as $key => $value)
                    {
                        if (!array_key_exists($key, $final)) {
                            $arr_results[] = ['id' => $value->id, 'username' => $value->username, 'created_at' => $value->created_at ];
                        }
                        
                    }
                }

                $final = array_merge($arr_results);

                foreach($words as $word)
                {
                    
                    $data = User::where('email', 'LIKE', '%'. $word . '%')
                    -> get();
                    foreach($data as $key => $value)
                    {
                        if (!array_key_exists($key, $final)) {
                            $arr_results[] = ['id' => $value->id, 'username' => $value->username, 'created_at' => $value->created_at ];
                        }
                        
                    }
                }


                //$arr_results = array_unique($arr_results);
                $final = array_merge($arr_results);

                


                $final = json_decode(json_encode($final));

                

                return Response::json($final);
        
            }


            

            }
        
    }


    public function createtask()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            if ( Session::token() !== request( '_token' ) ) {
                return Response::json( array(
                    'msg' => 'Invalid Authorization Token'
                ) );
            }


            //validate form

             $messages = array(
                'title.required'=>'You must enter a title.',
                'to_user.required'=>'You must enter a username.',
                'description.required'=>'You must enter a task description.',
            );



            $rules = array(
                'title' => 'required',
                'to_user' => 'required',
                'description' => 'required'
            );



             $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

             if (!$validation->passes()) 
             {
                return redirect('/admin/tasks')->withErrors($validation->errors());
             }

             //validation has passed
           


            //check user exists
            $username = request('to_user');
            $flag = User::UserExistsByName($username);
            $id = User::getIdByUsername($username);

            if($flag == 0)
            {
                session()->flash('nouser', 'ok');
                //user does not exist
                return redirect('/admin/tasks')->withErrors('user doesnt exist');
            }

            //user does exist


            //create task

            

            $task = Task::create([ 
                'title' => request('title'),                
                'body' => request('description'),
                'receiver_id' => $id,
                'issue_id' => Auth::user()->id,
                'completed' => 0
            ]);

            //success

            session()->flash('tasked', 'ok');



            return Redirect::back();

        }
    }

    public function Announcement()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            if ( Session::token() !== request( '_token' ) ) {
                return Response::json( array(
                    'msg' => 'Invalid Authorization Token'
                ) );
            }

            $title = request('title');
            $body = request('body');

            $issue_id = Auth::user()->id;



            Announcement::create([ 
            'title' => $title,
            'body' => $body,            
            'issue_id' => $issue_id
            ]);

            session()->flash('posted', 'ok');

            return redirect('/admin/tasks');

        }


    }


    public function delemail()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            
            $id = request('id');



            //all good

            $email = Email::find($id);

            $email->delete();


            return Redirect::back();
        }
    }

    public function grantuser()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            if ( Session::token() !== request( '_token' ) ) {
                return Response::json( array(
                    'msg' => 'Invalid Authorization Token'
                ) );
            }

            if(!request('username'))
            {
                //if username has no value
                return Response::json( array(
                    
                'grantfail' => "Username field is blank!"
                ) );
            }


            $username = request('username');
            //check user exists
            $flag = User::UserExistsByName($username);

            if($flag == 0)
            {
                //user does not exist
                return Response::json( array(
                    
                'grantfail' => "The user does not exist!"
                ) );
            }

            //user does exist

            //get id
            $id = User::getIdByUsername($username);

            

            //check if user is already an admin

            $flag = User::isAdmin($id);

           
            //if so, send back an alert
            if($flag == true)
            {
                //user does not exist
                return Response::json( array(
                    
                'grantfail' => "This user is already an administrator!"
                ) );
            }
            else if ($flag == false) 
            {
                   //if not, promote

                   $user = User::find($id);

                   $user->role = 1;

                   $user->save();

                   //user does not exist
                    return Response::json( array(
                        
                    'grantsuccess' => "The user has been successfully promoted!"
                    ) ); 
            }

            

            
        }
    }


    public function deluser()
    {
        if ( Session::token() !== request( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Invalid Authorization Token'
            ) );
        } 

        if(!request('username'))
        {
            //if username has no value
            return Response::json( array(
                
            'delfail' => "Username field is blank!"
            ) );
        }


        $username = request('username');
        //check user exists
        $flag = User::UserExistsByName($username);

        if($flag == 0)
        {
            //user does not exist
            return Response::json( array(
                
            'delfail' => "The user does not exist!"
            ) );
        }
        //user does exist

        
        $id = User::getIdByUsername($username);

        

        
        //wipe team
        DB::table('team_user')->where('user_id', $id)->delete();

        //wipe tasks
        DB::table('tasks')->where('issue_id', $id)->delete();
        DB::table('tasks')->where('receiver_id', $id)->delete();

        //wipe skills
        DB::table('skills')->where('user_id', $id)->delete();

        //wipe messages
        DB::table('messages')->where('sender_id', $id)->delete();
        DB::table('messages')->where('recv_id', $id)->delete();

        //find and delete username 

        $flag = User::deleteByUsername($username);

        if($flag == 0)
        {
            //delete failed


            return Response::json( array(
                
            'delfail' => "Account delete failed!"
            ) );
        }
        else if($flag == 1)
        {
            //delete successful
            return Response::json( array(
                
            'delsuccess' => "Account deleted successfully!"
            ) );
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


    
