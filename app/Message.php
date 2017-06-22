<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
use App\User;


class Message extends Model
{
    protected $fillable = [
        'subject', 'body', 'sender_id', 'recv_id', 'read', 'sender_deleted', 'recv_deleted',
    ];


    /* Find unread Messages */
    public static function findUnread($rid)
    {
        $test = Message::where('recv_id', $rid)->where('read', 0)->latest();

        if($test)
        {
            return $test;
        }
        else
        {
            $test = [];
            return null;
        }
        
        
    }

    /* get inbox */
    public static function fetchInbox($uid)
    {
    	return Message::where('recv_id', $uid)->where('recv_deleted', 0)
    	->latest()->get();
    }

    /* get sent messages */
    public static function fetchSent($uid)
    {
        return Message::where('sender_id', $uid)->where('sender_deleted', 0)
        ->latest()->get();
    }


    /* get username from received id */
    public static function getUsernameFromId($id)
    {
    	return User::getUsernameById($id);
    }

    
    /* get message given the id */
    public static function getMessageById($id)
    {
    	return Message::where('id', $id)->first();
    }


}
