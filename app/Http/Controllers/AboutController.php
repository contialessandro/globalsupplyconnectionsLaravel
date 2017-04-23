<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function aboutIbm()
    {
        return view('about.ibm');
    }
    public function aboutLenovoPack()
    {
        return view('about.lenovopack');
    }
    public function aboutNip()
    {
        return view('about.nip');
    }
    public function aboutContractManagement()
    {
        return view('about.contractmanagement');
    }

}
