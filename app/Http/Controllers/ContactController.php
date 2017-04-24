<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;

class ContactController extends Controller
{
    public function create()
    {


        return view('contact');
        session()->forget('message');
    }
    public function store(request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'subjects' => 'required',
            'subject' => 'required|max:5000',
        ]);
        session()->flash('messages', 'Thank You for contacting us, we will be in touch shortly');
        $subject = $request['subject'];

        \Mail::to(array('alessandro.conti@globalsupplyconnections.co.uk'))->send(new ContactEmail(
            $request['name'],
            $request['company'],
            $request['email'],
            $request['subjects'],
            $subject

        ));

        return redirect()->back();
    }
}
