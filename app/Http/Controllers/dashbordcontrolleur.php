<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbordcontrolleur extends Controller
{
    public function dashbord() 
    {
        return view('dashbord.dashbord');
    }
}
