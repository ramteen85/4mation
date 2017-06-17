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
            return view('layouts.admin.inbox');
        }
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


    
