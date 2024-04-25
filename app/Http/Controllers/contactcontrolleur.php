<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

class contactcontrolleur extends Controller
=======
use App\Models\Connexion; class contactcontrolleur extends Controller
>>>>>>> 8bef04dbc4d8596d5dacaf22212423425e0a17d3
{
    public function contact(){
        return view('layouts.contact');
    }
<<<<<<< HEAD
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
        
     
=======
    public function showLoginForm()
    {
        // Afficher le formulaire de connexion
        return view('layouts.admin');
    }
    public function login(Request $request)
    {
        // Récupérer les données du formulaire de connexion
        $email = $request->input('email');
        $password = $request->input('mdp');

        // Vérifier la connexion en utilisant le modèle Connexion
        if (Connexion::checkConnection($email, $password)) {
            // Si la connexion réussit, rediriger vers une autre page
            return redirect()->route('admin'); // Remplacez 'test' par le nom de la route de votre choix
        } else {
            // Si la connexion échoue, rediriger vers la page de connexion avec un message d'erreur
            return redirect()->route('login')->with('error', 'Email ou mot de passe incorrect.');
        }
>>>>>>> 8bef04dbc4d8596d5dacaf22212423425e0a17d3
    }
}
