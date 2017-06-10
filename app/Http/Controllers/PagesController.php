<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use DB;


class PagesController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function members()
    {
        return view('members');
    }
    public function showTasks()
    {
        return view('task');
    }
    public function showLoginForm()
    {
    	return view('login');
    }
    public function showRegisterForm()
    {
    	return view('register');
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