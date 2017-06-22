<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;


class MessageController extends Controller
{

	public function dels($id)
	{
		/* delete sent message */

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
		/* delete received message */

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

    	/* send a message */

    	//form validation
    	$rules = array(
            'msgto' => 'required|max:32',
            'subject' => 'required|max:100',
            'body' => 'required|max:600',

        );


    	$messages = array(
            'msgto.required'=>'Who do you wish to send a message to?',
            'msgto.max'=>'Username cannot exceed 32 characters.',
            'subject.required'=>'Please enter a subject.',
            'subject.max'=>'Please enter no more than 100 characters.',
            'body.max'=>'Please enter a message of no more than 600 characters.',
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
