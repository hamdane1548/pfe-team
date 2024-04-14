<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;

    protected $table = 'chauffeur';
    protected $primaryKey = 'CIN';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'CIN',
        'ID_ROLE',
        'NOM',
        'PRENOM',
        'TELEPHONE',
        'EMAIL',
        'MDP',
        'DATE_DEBUT',
        'EXPERIENCE',
    ];

    // Relation avec la table Personne (un chauffeur est une personne)
    public function personne()
    {
        return $this->belongsTo(Personne::class, 'CIN', 'CIN');
    }

    // Relation avec la table Vehicule (un chauffeur peut conduire plusieurs véhicules)
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class, 'CIN', 'CIN');
    }

    // Relation avec la table Permis (un chauffeur peut avoir plusieurs permis)
    public function permis()
    {
        return $this->hasMany(Permis::class, 'CIN', 'CIN');
    }

    // Relation avec la table Affecter (un chauffeur peut être affecté à plusieurs trajets)
    public function affectations()
    {
        return $this->hasMany(Affecter::class, 'CIN', 'CIN');
    }
}
