<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }

    // public function store(ContactFormRequest $request)
    // {

    //     $data = [
    //         'name'=> $request->get('name'),
    //         'email'=>$request->get('email'),
    //         'message'=>$request->get('message')
    //     ];

    //     \Mail::send('email.contact', $data, function($message){
    //         $message->to(env('MAIL_FROM'));
    //         $message->to(env('MAIL_FROM'),env('MAIL_NAME'));
    //         $message->subject('Junik Venture');
    //     });
    //     return \Redirect::route('pages.contact')->with('message', 'Thanks for contacting us');
    // }

    public function contact()
    {
        return view('pages.contact');
    }
}
