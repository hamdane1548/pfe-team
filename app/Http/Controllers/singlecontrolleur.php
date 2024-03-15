<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singlecontrolleur extends Controller
{
    public function single(){
        return view('layouts.single');
    }
}

