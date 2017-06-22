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
        /* user opens a message */

        if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            $message = Message::getMessageById($msgid);

            /* handle message cannot be found error */
            if($message == null)
            {
                return View('layouts.unavailable.nomessage');  
            }



             /* you should only be able to "read" a message intended for you */


            if(Auth::user()->id !== $message->sender_id && Auth::user()->id !== $message->recv_id)
            {
                return View('layouts.unavailable.nomessage'); 
            }

            /* mark as read only if receiver opens it */

            if(Auth::user()->id == $message->recv_id)
            {
                $message->read = 1; 
                $message->save();   
            }
           

            //success

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

    public function errorpage()
    {
        /* load 404 page */

        if (Auth::guest()) 
        {

            return view('index');
        }
        else
        {
            return view('layouts.unavailable.nopage');   
        }

    }


    public function compose()
    {
        /* send a message */

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
        /* list created teams */

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
        /* list all members of a team */

        if (Auth::guest()) 
        {
            return view('index');
        }
        else
        {
            $team = Team::find($teamid);

            if($team == null)
            {
                return view('layouts.unavailable.noteam');   
            }


            $users = null;
            $users = $team->users;

            

            return view('layouts.players', compact('users', 'team'));    
        }  


     
    }


    public function compose2($usr)
    {
        /* direct messaging compose routed through controller */

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
        /* go to index */

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
        /* search for a user by email, first and last name, and username */

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
        /* search users page */
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
        /* members main page */

        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {

            //check for intro
            if(Auth::user()->intro === 0)
            {
                $user = User::where('id', Auth::user()->id)->first();
                $user->intro = 1;
                $user->save();
                return view('layouts.intro');
            }


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
        /* go to inbox */
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
        /* go to sent messages */
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

    /* ----- template for admin page
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
    */


    public function profile($usr)
    {
        /* view user profile */

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
        /* edit user profile */

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
        /* user checks off a task */

        $boolval = request('boolval');
        $taskid = request('taskid');

        $task = Task::where('id', $taskid)->first();
        $task->completed = $boolval;
        $task->save();


        return Redirect::back();
    }
    public function showTasks()
    {
        /* show tasks */

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
        /* log in page */

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
        /* register page */

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
        /* log user in */

    	//do log in

    	$username = $req->input('username');
    	$password = $req->input('password');

        if(! auth()->attempt(request(['username','password']))) 
        {
            //login fail
            return redirect('/login')->with('error_code', 5);
        }


        //login good

        return Redirect::to('/members'); 
    	
        
    }

    public function destroy()
    {
        /* log user out */
        
        auth()->logout();
        return redirect()->home();
    }
}

?>