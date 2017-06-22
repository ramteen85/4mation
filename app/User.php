<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Team;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firstname', 'lastname', 'username', 'role', 'intro', 'about',
    ];

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /* Associate user with team, however will only belong to one, as I needed a pivot table.
       Flexibility to have users join multiple teams later.
     */
    public function team()
    {
        return $this->belongsToMany(Team::class);
    }

    /* dates */
    public function getDates()
    {
        return array('created_at', 'updated_at');
    }



    /* check if user is admin */
    public static function isAdmin($id)
    {
        $user = User::where('id', $id) -> first();
        
        if($user->role == 0)
        {
            return false;
        }
        else if($user->role == 1)
        {
            return true;
        }
    }


    /* get ID with an input of username */
    public static function getIdByUsername($uname)
    {
        if($uname)
        {
            return User::where('username', $uname) -> first() -> id;
        }
        else
        {
            return false;
        }
    }


    /* get User object with an input of ID */
    public static function getUserById($uid)
    {
        return User::where('id', $uid) -> first();
    }

    
   
    /* delete record by username */
    public static function deleteByUsername($user)
    {
        


        try {
            $test = User::where('username', $user) -> first();
            $test->delete();

            return 1;
        }

        catch (\Exception $e) { 

            return 0;

        }

    }

    /* Check if user exists given the ID */
    public static function UserExistsById($uid)
    {
        $test = User::where('id', $uid) -> first();

        if($test == null)
        {
            return 0;
        }
        else
        {
            return 1;
        }

    }

    /* Check user exists given the name */
    public static function UserExistsByName($uname)
    {
        $test = User::where('username', $uname) -> first();

        if($test == null)
        {
            return 0;
        }
        else
        {
            return 1;
        }

    }

    /* Get username given the ID */
    public static function getUsernameById($uid)
    {
        return User::where('id', $uid) -> first();
    }

    /* get user object with input of username */
    public static function getByUsername($val)
    {
        return User::where('username', $val) -> first();
    }


    /* check user password */
    public static function checkPassword($val, $val2)
    {

        $user = array(
            'username' => $val,
            'password' => $val2
        );

        $result = auth()->attempt($user);

        return $result;
    }


    /* Accessors and Mutators */

    public function getUsernameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getFirstnameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getLastnameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getEmailAttribute($value)
    {
        return ucfirst($value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
