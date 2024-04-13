<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connexion;
use Illuminate\Support\Facades\Auth;

 class contactcontrolleur extends Controller
{
    public function contact(){
        return view('layouts.contact');
    }
    public function showLoginForm()
    {
        // Afficher le formulaire de connexion
        return view('layouts.admin');
    }
    public function login(Request $request)
    {
        $login=$request->email;
        $password=$request->mdp;
        $values=['email'=>$login,"password"=>$password];
        if(Auth::attempt($values)){
            $request->session()->regenerate();
            return to_route('about');
        }else{
                return back()->withErrors(
                    [
                        'email'=>'email et password incorrect'
                    ]
                )->onlyInput('email');
        }
        dd();
     
    }
}
