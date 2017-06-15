<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
use App\User;


class Message extends Model
{
    protected $fillable = [
        'subject', 'body', 'sender_id', 'recv_id', 'read', 'sender_deleted', 'recv_deleted',
    ];


    public static function findUnread($rid)
    {
        return Message::where('recv_id', $rid)->where('read', 0)->latest();
    }

    public static function fetchInbox($uid)
    {
    	return Message::where('recv_id', $uid)->where('recv_deleted', 0)
    	->latest()->get();
    }

    public static function fetchSent($uid)
    {
        return Message::where('sender_id', $uid)->where('sender_deleted', 0)
        ->latest()->get();
    }

    public static function getUsernameFromId($id)
    {
    	return User::getUsernameById($id);
    }

    

    public static function getMessageById($id)
    {
    	return Message::where('id', $id)->first();
    }


}
