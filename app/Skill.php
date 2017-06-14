<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

   
  	public $timestamps = false;

    protected $fillable = [
        'name', 'user_id'
    ];

    public static function skillExists($skill, $uid)
    {
    	//check record exists
    	

   	
    	if(Skill::where('name', $skill)->where('user_id', $uid)
    	->exists())
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}

    }

    public static function fetchAllSkills($usr)
    {
    	return Skill::where('user_id', User::getByUsername($usr)->id)->get();
    }

    public static function setSkills($checkboxes, $userid)
    {
    	$php = false;  
    	$cpp = false;
    	$perl = false; 
    	$python = false; 
    	$nodejs = false; 
    	$java = false; 
    	$js = false;
    	$jquery = false; 
    	$csharp = false;
    	$ruby = false; 
    	$asp = false; 
    	$vb = false;

    	//incomplete
    	$php = Skill::skillExists("php", $userid);
    	$nodejs = Skill::skillExists("nodejs", $userid);
    	$cpp = Skill::skillExists("c", $userid);
    	$perl = Skill::skillExists("perl", $userid);
    	$python = Skill::skillExists("python", $userid);    	
    	$java = Skill::skillExists("java", $userid);
    	$js = Skill::skillExists("js", $userid);
    	$jquery = Skill::skillExists("jquery", $userid);
    	$csharp = Skill::skillExists("c#", $userid);
    	$ruby = Skill::skillExists("ruby", $userid);
    	$asp = Skill::skillExists("asp", $userid);
    	$vb = Skill::skillExists("vb", $userid);

    	
			if($checkboxes[0] == null)
			{
				if($php == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'php');
					$del->delete();
	    		}
			}
			else if($checkboxes[0] == "on")
	    	{
	    		if($php == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "php",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}


	    	if($checkboxes[1] == null)
			{
				if($nodejs == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'nodejs');
					$del->delete();
	    		}
			}
			else if($checkboxes[1] == "on")
	    	{
	    		if($nodejs == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "nodejs",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}

	    	if($checkboxes[2] == null)
			{
				if($csharp == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'c#');
					$del->delete();
	    		}
			}
			else if($checkboxes[2] == "on")
	    	{
	    		if($csharp == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "c#",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}


	    	if($checkboxes[3] == null)
			{
				if($cpp == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'c');
					$del->delete();
	    		}
			}
			else if($checkboxes[3] == "on")
	    	{
	    		if($cpp == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "c",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}
    		

    		if($checkboxes[4] == null)
			{
				if($java == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'java');
					$del->delete();
	    		}
			}
			else if($checkboxes[4] == "on")
	    	{
	    		if($java == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "java",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}

	    	if($checkboxes[5] == null)
			{
				if($ruby == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'ruby');
					$del->delete();
	    		}
			}
			else if($checkboxes[5] == "on")
	    	{
	    		if($ruby == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "ruby",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}

	    	if($checkboxes[6] == null)
			{
				if($js == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'js');
					$del->delete();
	    		}
			}
			else if($checkboxes[6] == "on")
	    	{
	    		if($js == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "js",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}


	    	if($checkboxes[7] == null)
			{
				if($asp == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'asp');
					$del->delete();
	    		}
			}
			else if($checkboxes[7] == "on")
	    	{
	    		if($asp == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "asp",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}

	    	if($checkboxes[8] == null)
			{
				if($python == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'python');
					$del->delete();
	    		}
			}
			else if($checkboxes[8] == "on")
	    	{
	    		if($python == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "python",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}


	    	if($checkboxes[9] == null)
			{
				if($perl == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'perl');
					$del->delete();
	    		}
			}
			else if($checkboxes[9] == "on")
	    	{
	    		if($perl == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "perl",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}


	    	if($checkboxes[10] == null)
			{
				if($jquery == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'jquery');
					$del->delete();
	    		}
			}
			else if($checkboxes[10] == "on")
	    	{
	    		if($jquery == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "jquery",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}


	    	if($checkboxes[11] == null)
			{
				if($vb == false)
	    		{
	    			//do nothing
	    		}
	    		else
	    		{
	    			//delete record
	    			$del = Skill::where('user_id', $userid)
	    			->where('name', 'vb');
					$del->delete();
	    		}
			}
			else if($checkboxes[11] == "on")
	    	{
	    		if($vb == false)
	    		{		    			
	    			//add record
	    			//save
					Skill::create([ 
						'name' => "vb",
						'user_id' => $userid					
					]);
	    		}
	    		else
	    		{
	    			//do nothing		    			
	    		}	
	    	}



 
    }

    public static function getByUserId($val)
    {
    	$skillarray = [
    		0,
    		0,
    		0,
    		0,
    		0,
    		0,
    		0,
    		0,
    		0,
    		0,
    		0,
    		0
    	];

    	$temps = Skill::where('user_id', $val)->get();

    	foreach ($temps as $temp) {
    		if($temp->name === "php")
    		{
    			$skillarray[0] = 1;
    		}

    		if($temp->name === "nodejs")
    		{
    			$skillarray[1] = 1;
    		}

    		if($temp->name === "c#")
    		{
    			$skillarray[2] = 1;
    		}

    		if($temp->name === "c")
    		{
    			$skillarray[3] = 1;
    		}

    		if($temp->name === "java")
    		{
    			$skillarray[4] = 1;
    		}

    		if($temp->name === "ruby")
    		{
    			$skillarray[5] = 1;
    		}

    		if($temp->name === "js")
    		{
    			$skillarray[6] = 1;
    		}

    		if($temp->name === "asp")
    		{
    			$skillarray[7] = 1;
    		}

    		if($temp->name === "python")
    		{
    			$skillarray[8] = 1;
    		}

    		if($temp->name === "perl")
    		{
    			$skillarray[9] = 1;
    		}

    		if($temp->name === "jquery")
    		{
    			$skillarray[10] = 1;
    		}

    		if($temp->name === "vb")
    		{
    			$skillarray[11] = 1;
    		}
    	}


    	return $skillarray;

    }
}
