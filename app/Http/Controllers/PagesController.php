<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\Skill;
use App\Task;
use App\Message;
use App\Announcement;
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

            $message->read = 1;

            $message->save();

            return View('layouts.message', compact('message'));    
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
            return View('layouts.compose');    
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
    public function findmates()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            return view('layouts.findusers');    
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
            $announcements = Announcement::latest()->get();
            $model = Task::find(1);
            
            return View('members',compact('announcements'));    
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



            $skills = Skill::fetchAllSkills($usr);

            //find record by username

            $user = User::getByUsername($usr);

            $datetmp = $user->created_at;



            $timeago = $user->created_at->diffForHumans();

            return view('layouts.profile', compact('user', 'skills',   'timeago'));    
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
            $tasks = Task::incompletetasks();
            $tasks2 = Task::completedtasks();
            
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