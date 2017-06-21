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
    	if (Auth::guest() || Auth::user()->role == 0) 
        {

            return Redirect::to('/');
        }
        else
        {
            $emails = Email::latest()->get();

            return view('layouts.admin.inbox', compact('emails'));
        }
    }


    public function updeltask()
    {
        if (Auth::guest() || Auth::user()->role == 0) 
        {

            return Redirect::guest('/');
        }
        else
        {
            $taskid = request('taskidselector');
            $tasktitle = request('tasktitleselector');
            $taskdesc = request('taskdescselector');


            $rules = array(
            'taskidselector' => 'required',
            'tasktitleselector' => 'required',
            'taskdescselector' => 'required',

            );

            $messages = array(
            'taskidselector.required'=>'Task id cannot be blank.',
            'tasktitleselector.required'=>'Task title cannot be blank.',
            'taskdescselector.required'=>'Task description cannot be blank.',
            
            );

            $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

            if (!$validation->passes()) 
            {
                //if validation fails return errors
                return redirect('/admin/tasks')->withErrors($validation->errors());
            }
       
            $tasktemp = Task::where('id', $taskid)->first();
            $tasktemp->title = $tasktitle;
            $tasktemp->body = $taskdesc;
            $tasktemp->save();



            //refresh the page
            return redirect('/admin/tasks');       
               
        }
    }
    



     public function ajaxid()
     {
        if (Auth::guest() || Auth::user()->role == 0) 
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

            //all good check id
        
            $taskid = request('taskid');
            $title = request('title');
            $desc = request('desc');



            //validate form

             $messages = array(
                'taskid.required'=>'You must enter a task id',
                
            );



            $rules = array(
                'taskid' => 'required'
                
            );



             $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

             if (!$validation->passes()) 
             {
                //validation failed - send negative signal

                return Response::json( array(
                    'lock' => 'negative signal'
                ) );


             }

             //validation has passed 

             //check id against database

             $tasktmp = Task::where('id', $taskid)->first();


             

             if($tasktmp !== null)
             {
                //if match, send positive signal

                return Response::json( array(
                    'unlock' => 'positive signal',
                    'title' => $tasktmp->title,
                    'desc' => $tasktmp->body
                ) );

             }
             else
             {
                //else send negative signal
                return Response::json( array(
                    'lock' => 'negative signal'
                ) );
             }

       }

    }

    public function taskdel()
    {
        if (Auth::guest() || Auth::user()->role == 0) 
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

            $taskid = request('taskid');
            $task = Task::where('id',$taskid);


            $task->delete();

            if($task === null)
            {
                return Response::json( array(
                    'grantfail' => 'Delete failed. Try again later.'
                ) );
            }
            else
            {
                return Response::json( array(
                    'grantsuccess' => 'Task Successfully Deleted!'
                ) );
            }
        } 
    }

    public function ajaxuser()
    {
        if (Auth::guest() || Auth::user()->role == 0) 
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
        if (Auth::guest() || Auth::user()->role == 0) 
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
            

            if($flag == 0)
            {
                session()->flash('nouser', 'ok');
                //user does not exist
                return redirect('/admin/tasks');
            }

            //user does exist
            $id = User::getIdByUsername($username);

            //create task

            

            $task = Task::create([ 
                'title' => request('title'),                
                'body' => request('description'),
                'receiver_id' => $id,
                'issue_id' => Auth::user()->id,
                'completed' => 0
            ]);

            //success

            session()->flash('tasked', $task->id);



            return Redirect::back();

        }
    }

    public function Announcement()
    {
        if (Auth::guest() || Auth::user()->role == 0) 
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



            //validate form

             $messages = array(
                'title.required'=>'You must enter a Title.',
                'body.required'=>'You must enter an Announcement.',
               
            );



            $rules = array(
                'title' => 'required',
                'body' => 'required'
                
            );



             $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

             if (!$validation->passes()) 
             {
                return redirect('/admin/tasks')->withErrors($validation->errors());
             }

             //validation has passed




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
        if (Auth::guest() || Auth::user()->role == 0) 
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

    public function assignteam()
    {
        if (Auth::guest() || Auth::user()->role == 0) 
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



            $username = request('username');
            $teamid = request('teamid');
            $team = request('team');



            //validate form (incomplete)

             $messages = array(
                'username.required'=>'You must enter a username.',
                'teamid.required'=>'Team Identification is required.',
                'team.required'=>'Team Name is required.',
            );



            $rules = array(
                'username' => 'required',
                'teamid' => 'required',
                'team' => 'required'
            );


             //validation needs to match ajax
             $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

             if (!$validation->passes()) 
             {
                return Response::json( array(                
                'errors' => $validation->errors()
                ));
             }

             //validation has passed


             //check user and team exists


            $user = User::UserExistsByName($username);

            if($user == null)
            {
                //user does not exist

                return Response::json( array(                
                'grantfail' => "User does not exist!"
                ) );
            }

            
            
            if(!$team = Team::find($teamid))
            {
                //user does not exist

                return Response::json( array(                
                'grantfail' => "Team does not exist!"
                ) );
            }
            


             //get user id
             $user_id = User::getIdByUsername($username);

             


             //delete user record from team_user database
             $deltmp = DB::table('team_user')->where('user_id', $user_id);

             $deltmp->delete();

             if($deltmp)
             {
                //delete successful
                //create new record

            


                $teamtmp = DB::table('team_user')->insert(
                array(
                    'team_id' => $teamid,                
                    'user_id' => $user_id
                ));  

                //check errors

                if($teamtmp)
                {
                    //insert successful
                    //send response

                    //return error response
                    return Response::json( array(
                    
                    'grantsuccess' => "User has successfully been assigned to the team!"
                    ) );


                }
                else
                {
                    //insert failed (error handling go to default team)
                    $teamtmp = DB::table('team_user')->insert(
                    array(
                        'team_id' => 1,                
                        'user_id' => $userid
                    ));  

                    //return error response
                    return Response::json( array(
                    
                    'grantfail' => "Critical database error! You may have to handle the record manually..."
                    ) );

                }


                

             }
             else 
             {
                //delete fail
                //return errors

                //return error response
                return Response::json( array(
                
                'grantfail' => "Team Switch Failed. Please try again later."
                ) );
             }

            

        }
    }



    public function revokeuser()
    {

        if (Auth::guest() || Auth::user()->role == 0) 
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
                $user = User::find($id);

                $user->role = 0;

                $user->save();

                //user does not exist
                return Response::json( array(
                    
                'grantsuccess' => "The user has been successfully demoted!"
                ) ); 
            }
            else if ($flag == false) 
            {
                //is not an admin

                  
                //user is an admin
                return Response::json( array(
                    
                'grantfail' => "This user is already an employee!"
                ) );                   
            }




        }
    }

    public function grantuser()
    {
        if (Auth::guest() || Auth::user()->role == 0) 
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


    public function createteam()
    {
        if (Auth::guest() || Auth::user()->role == 0) 
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

            if(!request('tname'))
            {
                //if team name has no value
                return Response::json( array(
                    
                'tfail' => "Enter a Team Name."
                ) );
            }


            if(!request('tdesc'))
            {
                //if team description has no value
                return Response::json( array(
                    
                'tfail' => "Enter a Team description."
                ) );
            }


            //check to see team name doesnt exist

            $tname = request('tname');
            $tdesc = request('tdesc');


            $teamtmp = Team::where('name', $tname)->first();

            if($teamtmp !== null)
            {
                //team exists
                return Response::json( array(
                    
                    'tfail' => "Team name already exists. If you wish to re-create it, delete it first!"
                ) );
            }


            //all good

            $teamcreate = Team::create([ 
            'name' => $tname,
            'description' => $tdesc
            
        ]);

            

            if($teamcreate !== null)
            {
                return Response::json( array(
                    
                    'tsuccess' => "Team created successfully!",
                    'update' => Team::all(),
                    'extra' => $tname,
                    'extraid' => Team::where('name', $tname)->first()->id
                ) );

            }
            else
            {
                return Response::json( array(
                    
                    'tfail' => "Team creation failed :["
                ) );
            }

        }
    }

    


    public function delteam()
    {
        if (Auth::guest() || Auth::user()->role == 0) 
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

            if(request('id') == 'notselected')
            {
                //if team has not been selected
                return Response::json( array(
                    
                'tfail' => "Select a Team."
                ) );
            }


            


            //get id and team text

            $id = request('id');
            $text = request('text');


            $teamtmp = Team::find($id);

            if($teamtmp === null)
            {
                //team exists
                return Response::json( array(
                    
                    'tfail' => "Team does not exist!"
                ) );
            }


            //all good


            //switch all members of that team to "not assigned"


            //delete team
            $teamtmp->delete();

            return Response::json( array(
                    
                    'tsuccess' => "Team Deleted!"
                ) );


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
        if (Auth::guest() || Auth::user()->role == 0) 
        {
            return Redirect::to('/');
        }
        else
        {
            $teams = Team::all();

            return view('layouts.admin.useroptions', compact('teams'));
        }
    }



    public function tasks()
    {
         if (Auth::guest() || Auth::user()->role == 0) 
        {

            return Redirect::to('/');
        }
        else
        {
            return view('layouts.admin.tasks');
        }
    }
}


    
