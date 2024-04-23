<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactcontrolleur extends Controller
{
    public function contact(){
        return view('layouts.contact');
    }
}
