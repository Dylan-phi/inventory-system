<?php

namespace App\Controllers;

class Staff extends BaseController
{
    public function dashboard()
    {
        return view('staff/dashboard');
    }
}