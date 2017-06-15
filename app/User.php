<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firstname', 'lastname', 'username', 'role', 'about',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getDates()
    {
        return array('created_at', 'updated_at');
    }

    public static function getIdByUsername($uname)
    {
        return User::where('username', $uname) -> first() -> id;
    }

    public static function getUserById($uid)
    {
        return User::where('id', $uid) -> first();
    }

   

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

    public static function getUsernameById($uid)
    {
        return User::where('id', $uid) -> first();
    }

    public static function getByUsername($val)
    {
        return User::where('username', $val) -> first();
    }

    public static function checkPassword($val, $val2)
    {

        $user = array(
            'username' => $val,
            'password' => $val2
        );

        $result = auth()->attempt($user);

        return $result;
    }

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
