<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infocontroller extends Controller
{
    public function about() 
    {
        $title="settings";
        return view('layouts.about');
    }
}
