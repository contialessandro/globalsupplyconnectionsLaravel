<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *public function __construct()
    {
    $this->middleware('auth');
    }
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function indexContact()
    {
        return view('welcomeContact');
    }

    public function indexAbout()
    {
        return view('welcomeContact');
    }
}
