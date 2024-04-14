<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    // Indique que la clé primaire n'est pas auto-incrémentée
    public $incrementing = false;

    // Définit la clé primaire composite
    protected $primaryKey = ['CIN', 'ID_CHAUFFEUR'];

    // Définit le type de données de la clé primaire
    protected $keyType = 'string';

    // Les autres attributs du modèle
    protected $fillable = [
        'CIN', 'ID_CHAUFFEUR', 'ID_ROLE', 'NOM', 'PRENOM', 'TELEPHONE', 'EMAIL', 'MDP', 'DATE_DEBUT', 'EXPERIENCE'
    ];

    // Les relations avec d'autres modèles
    public function personne()
    {
        return $this->belongsTo(Personne::class, 'CIN', 'CIN');
    }

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class, 'CIN', 'CIN');
    }

    public function permis()
    {
        return $this->hasMany(Permis::class, 'CIN', 'CIN');
    }

    public function affectations()
    {
        return $this->hasMany(Affecter::class, 'CIN', 'CIN');
    }
}
