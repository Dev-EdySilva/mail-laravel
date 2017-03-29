<?php

namespace sendmail\Http\Controllers;

use sendmail\Mail\MailTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    
	public function home(){
		return view('contact');
	}


	public function send(Request $request){

		$data = $request->all();

		$email = $data["email"];
		$name = $data["name"];
		$message = $data["message"];

		
		Mail::to($email)->cc("edigleyssonsilva@gmail.com")->send(new MailTest($name));

		return view('contact',[
			'sended' => true
		]);

		
	}

}
