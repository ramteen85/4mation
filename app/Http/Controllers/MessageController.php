<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;


class MessageController extends Controller
{

	public function dels($id)
	{
		//delete message

		$message = Message::where('id', $id)->first();

		


		//check if receiver has also deleted message

		if($message->recv_deleted == 1)
		{
			//delete record
			$message->delete();
		}
		else
		{
			//mark deleted
			$message->sender_deleted = 1;
			$message->save();
		}

		return back();


	}


	public function delr($id)
	{
		//delete message

		$message = Message::where('id', $id)->first();

		

		//check if sender has also deleted message

		if($message->sender_deleted == 1)
		{
			//delete record
			$message->delete();
		}
		else
		{
			//mark deleted
			$message->recv_deleted = 1;
			$message->save();
		}

		return back();



	}

    public function send()
    {

    	//form validation
    	$rules = array(
            'msgto' => 'required',
            'subject' => 'required|max:30',
            'body' => 'required|max:170',

        );


    	$messages = array(
            'msgto.required'=>'Who do you wish to send a message to?',
            'subject.required'=>'Please enter a subject.',
            'subject.max'=>'Please enter no more than 30 characters.',
            'body.max'=>'Please enter a message of no more than 170 characters.',
            'body.required'=>'Please enter a message!',
            
        );



        $validation = \Illuminate\Support\Facades\Validator::make(request()->all(), $rules, $messages );

         if (!$validation->passes()) 
         {
            //if validation fails return errors
            return back()->withErrors($validation->errors());
         }


    	//get destination
		$msgto = request('msgto');


		//check if destination exists

		$flag = User::UserExistsByName($msgto);


		
		if($flag == 1)
		{
			//user exists

			//get sender id
			$senderid = User::getIdByUsername(request('msgfrom'));



			//get receiver id
			$receiverid = User::getIdByUsername(request('msgto'));


			//create record

			$user = Message::create([ 
				'sender_id' => $senderid,
				'recv_id' => $receiverid, 
				'subject' => request('subject'),
				'body' => request('body'),
				'read' => '0',
				'sender_deleted' => '0',
				'recv_deleted' => '0',				
			]);

			//go back
			session()->flash('msgsent', 'ok');
			return back();
		}
		else if($flag == 0)
		{
			//user does not exist
			session()->flash('usernotthere', 'wrong');
			return back();
		}

			




	    	
    }
}
