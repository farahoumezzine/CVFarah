<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeSite extends Controller
{
    //
    public function index(){
        return view('cv');
    }

    /// CONTACT
    ///
   /*
    public function sendEmail(Request $request){
        $details= [
            'name'=>$request -> name,
            'email'=>$request -> email,
            'message'=>$request -> message,

        ];

        Mail::to('oumezzinefarah12@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent. Thank you!');
    }*/
}
