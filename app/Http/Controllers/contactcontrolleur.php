<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connexion; class contactcontrolleur extends Controller
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
    }
}
