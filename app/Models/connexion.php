<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Connexion extends Model
{
    protected $table = 'connexion';
    
    protected $fillable = ['email', 'mdp']; 

    public $timestamps = false;

    public static function checkConnection($email, $password)
    {
        // Rechercher l'utilisateur avec l'email donné
        $user = self::where('email', $email)->first();

        // Si aucun utilisateur n'est trouvé avec cet email
        if (!$user) {
            return false; // La connexion échoue car l'utilisateur n'existe pas
        }

        // Vérifier si le mot de passe correspond en utilisant Hash::check
        return Hash::check($password, $user->mdp); // Renvoie true si le mot de passe correspond, sinon false
    }
}
