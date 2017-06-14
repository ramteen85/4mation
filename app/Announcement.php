<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Announcement extends Model
{
    protected $fillable = [
        'title', 'body', 'issue_id', 'created_at', 'updated_at',
    ];

    public static function getSenderById($sender_id)
    {

    	return User::getUsernameById($sender_id);
    }

    public function timeAgo()
    {
    	return $this->created_at->diffForHumans();
    }
}
