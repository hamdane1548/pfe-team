<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerant extends Model
{
    protected $table = 'gerant';   
     protected $primaryKey = ['CIN', 'ID_GERANT'];
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'CIN',
        'ID_GERANT',
        'ID_ROLE',
        'NOM',
        'PRENOM',
        'TELEPHONE',
        'EMAIL',
        'MDP',
        'DATE_DEBUT'
    ];

    // Relation avec la table personne
    public function personne()
    {
        return $this->belongsTo(Personne::class, 'CIN', 'CIN');
    }

    // Relation avec la table role
    public function role()
    {
        return $this->belongsTo(Role::class, 'ID_ROLE', 'ID_ROLE');
    }

    // Relation avec la table repondre
    public function repondre()
    {
        return $this->hasMany(Repondre::class, 'ID_GERANT', 'ID_GERANT');
    }

    // Relation avec la table reponse
    public function reponse()
    {
        return $this->hasMany(Reponse::class, 'ID_GERANT', 'ID_GERANT');
    }
}
