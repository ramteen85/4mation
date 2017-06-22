<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;

class Announcement extends Model
{
    protected $fillable = [
        'title', 'body', 'issue_id', 'created_at', 'updated_at',
    ];


    /* get sender of announcement */
    public static function getSenderFromId($id)
    {
        return User::getUsernameById($id);
    }

    /* how long ago the announcement was posted */
    public function timeAgo()
    {
        if($this->created_at->diffForHumans())
        {
            return $this->created_at->diffForHumans();    
        }
    	
    }
}
