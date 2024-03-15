<?php
// compact ('nom') pour envoi dans la view pour affiche
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
    public function index(Request $request){
    return view('layouts.master');
    }
}
