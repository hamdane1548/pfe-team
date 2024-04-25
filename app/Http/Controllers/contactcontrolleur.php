<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contactcontrolleur extends Controller
{
    public function contact(){
        return view('layouts.contact');
    }
    public function login(Request $request)
    {
        $login=$request->email;
        $password=$request->mdp;
        $values=['email'=>$login,"password"=>$password];
        dd($values);
        /*if(Auth::attempt($values)){
            $request->session()->regenerate();
            return to_route('about');
        }else{
                return back()->withErrors(
                    [
                        'email'=>'email et password incorrect'
                    ]
                )->onlyInput('email');
        }*/
        
     
    }
}
