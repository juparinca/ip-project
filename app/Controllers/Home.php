<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //Login
        return view('login/Login');
    }
}
