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


    public static function getSenderById($sender_id)
    {

    	return User::getUsernameById($sender_id);
    }

    public static function incompletetasks($uid)
    {
    	return Task::where('completed', 0)->where('receiver_id',$uid)->latest()->get();
    }

    public static function completedtasks($uid)
    {
    	return Task::where('completed', 1)->where('receiver_id',$uid)->latest()->get();
    }

    public static function countcompletetasks($uid)
    {
        return Task::where('completed', 1)->where('receiver_id', $uid)->count();
    }

    public static function countincompletetasks($uid)
    {
        return Task::where('completed', 0)->where('receiver_id', $uid)->count();
    }


    public function timeAgo()
    {
    	return $this->created_at->diffForHumans();
    }
}
