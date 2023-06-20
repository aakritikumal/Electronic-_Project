<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function getHome()
    {
        return view('site.home');
    }

    
    public function getAbout()
    {
        return view('site.about');

    }

    public function getService()
    {
        return view('site.setvice');

    }
    public function getContact()
    {
        return view('site.contact');

    }

 
}

