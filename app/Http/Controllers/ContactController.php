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
            'subject' => 'required',
            'message' => 'required|max:5000',
        ]);
        session()->flash('message', 'Thank You for contacting us, we will be in touch shortly');
        \Mail::to('contialessandro@hotmail.it')->send(new ContactEmail);

        return redirect()->back();
    }
}
