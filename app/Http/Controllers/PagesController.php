<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundpation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\Skill;
use App\Task;
use App\Message;
use App\Announcement;
use App\Team;
use DB;
use Auth;
Use Redirect;
use Carbon\Carbon;


class PagesController extends Controller
{
    public function readmsg($msgid)
    {
        if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            $message = Message::getMessageById($msgid);


            if($message == null)
            {
                return View('layouts.unavailable.nomessage');  
            }




            if(!Auth::user()->id == $message->recv_id)
            {
                return View('layouts.unavailable.nomessage');   
            }
            else
            {
                $message->read = 1; 
                $message->save();
            }

            $flag = "";

            if(Auth::user()->id == $message->sender_id)
            {
                $flag = true;
            } 
            else
            {
                $flag = false;
            }

            return View('layouts.message', compact('message', 'flag'));    
        }
    }
    public function compose()
    {
        if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            $usr="";

           
            return view('layouts.compose', compact('usr'));    
        }
    }


    public function teams()
    {
        $teams = Team::get()->all();

       

        

        

        if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            

            return view('layouts.team', compact('teams'));    
        }  
    }

    public function players($teamid = null)
    {

        if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            $team = Team::find($teamid);
            $users = null;
            $users = $team->users;

            

            return view('layouts.players', compact('users', 'team'));    
        }  


     
    }


    public function compose2($usr)
    {
        if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            return View('layouts.compose', compact('usr'));    
        }
    }

    public function index()
    {
    	if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            return Redirect::to('members');    
        }
    }
    public function search()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            //search for users

            $query = request('query');

            $words = explode(' ', $query);

            $users = new User();

            $arr_results = array();

            $final = array();

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

                $final = array_merge($arr_results);


                $users = null;

                $final = json_decode(json_encode($final));

                

                return view('layouts.findusers', compact('final')); 
        
            }
            else
            {
                $users = User::all();
               
                return view('layouts.findusers', compact('users')); 
            }
            


               
        }
    }
    public function findmates()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            //search for users

            $users = User::all();

            return view('layouts.findusers', compact('users'));    
        }
    }
    public function members()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {

            $announcements ="";
            $unread = 0;
            $announcements = Announcement::latest()->get();
            $model = Task::find(1);

            //count number of unread messages


            $unread = Message::findUnread(Auth::user()->id)->count();


            return View('members',compact('announcements', 'unread'));  
            
            
               
        }

        
    }
    public function inbox()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            //get all messages that belong to me which I havent deleted
            $messages = Message::fetchInbox(Auth::user()->id);

            return view('layouts.inbox', compact('messages'));    
        }
    }
    public function sent()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            //get all messages that belong to me which I havent deleted
            $messages = Message::fetchSent(Auth::user()->id);


            return view('layouts.sent', compact('messages'));    
        }
    }
    public function admin()
    {
        if (Auth::guest() || Auth::user()->role != 1) 
        {

            return Redirect::guest('/');
        }
        else
        {
            return view('layouts.admin');    
        }
    }


    public function profile($usr)
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {



          

            //find record by username

            $user = User::getByUsername($usr);

            if($user == null)
            {
                return view('layouts.unavailable.noprofile'); 
            }

              $skills = Skill::fetchAllSkills($usr);


            $datetmp = $user->created_at;



            $timeago = $user->created_at->diffForHumans();

            $flag = "";

            if($user->id == Auth::User()->id)
            {
                $flag = true;
            } 
            else
            {
                $flag = false;
            }


            return view('layouts.profile', compact('user', 'skills', 'timeago', 'flag'));    
        }
    }
    public function eprofile()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            
            //get user id
            $userid = Auth::user()->id;
            
            //check for skills

            $skills = Skill::getByUserId($userid);

            return view('layouts.eprofile', compact('skills'));    
        }
    }
    public function checktask()
    {
        $boolval = request('boolval');
        $taskid = request('taskid');

        $task = Task::where('id', $taskid)->first();
        $task->completed = $boolval;
        $task->save();


        return Redirect::back();
    }
    public function showTasks()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            $tasks = Task::incompletetasks(Auth::user()->id);
            $tasks2 = Task::completedtasks(Auth::user()->id);
            
            return view('task', compact('tasks', 'tasks2'));
        }
    }
    public function showLoginForm()
    {
    	if (Auth::guest()) 
        {

            return view('login');
        }
        else
        {
            return Redirect::to('members');    
        }
    }
    public function showRegisterForm()
    {
    	if (Auth::guest()) 
        {

            return view('register');
        }
        else
        {
            return Redirect::to('members');    
        }
    }
    public function logmein(Request $req)
    {
    	//do log in

    	$username = $req->input('username');
    	$password = $req->input('password');

        if(! auth()->attempt(request(['username','password']))) 
        {
            //login fail
            return redirect('/login')->with('error_code', 5);
        }


        //login good


        

        //$users = "test";

        return Redirect::to('/members'); 
    	
        
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}

?>