<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Task extends Model
{
	protected $fillable = [
        'title', 'body', 'issue_id', 'receiver_id', 'completed', 'created_at', 'updated_at',
    ];

    public $timestamps = true;

    /* Get Task Sender By ID */
    public static function getSenderById($sender_id)
    {

    	return User::getUsernameById($sender_id);
    }


    /* list incomplete tasks */
    public static function incompletetasks($uid)
    {
    	return Task::where('completed', 0)->where('receiver_id',$uid)->latest()->get();
    }

    /* list completed tasks */
    public static function completedtasks($uid)
    {
    	return Task::where('completed', 1)->where('receiver_id',$uid)->latest()->get();
    }

    /* count number of completed tasks */
    public static function countcompletetasks($uid)
    {
        return Task::where('completed', 1)->where('receiver_id', $uid)->count();
    }

    /* count number of incomplete tasks */
    public static function countincompletetasks($uid)
    {
        return Task::where('completed', 0)->where('receiver_id', $uid)->count();
    }


    /* Return how long ago the task was created */
    public function timeAgo()
    {
    	return $this->created_at->diffForHumans();
    }
}
