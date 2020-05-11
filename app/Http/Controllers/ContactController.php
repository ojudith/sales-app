<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use Mail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request)
    {
        // dump the request from the form
        //dd($request->all());

        // $this->validate($request,[
        //     'name'=>'required',
        //     'email'=>'required|email',
        //     'message'=>'required'
        // ]);

        Mail::send('email.contact-message', [
            'name'=>$request->name,
            'email'=>$request->email,
            'msg' =>$request->message
        ], function($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('junik@judithdev.com.ng')->subject('Contact Information');
        });       
        
        return redirect()->back()->with('flash_message', 'Thank you for your message');
    }
}