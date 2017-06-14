<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\Skill;
use DB;
use Auth;
Use Redirect;
use Carbon\Carbon;


class PagesController extends Controller
{
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
            return view('members');    
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
            return view('layouts.inbox');    
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



            $skills = Skill::fetchAllSkills();

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
    public function showTasks()
    {
        if (Auth::guest()) 
        {

            return Redirect::guest('/');
        }
        else
        {
            return view('task');    
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

        return view('members');
    	
        
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}

?>