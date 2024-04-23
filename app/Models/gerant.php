<?php

use Illuminate\Database\Eloquent\Model;

use App\Models\Personne;

use App\Models\Role;

use App\Models\Repondre;
class Gerant extends Model
{
    // Nom de la table associée au modèle
    protected $table = 'gerant';

    // Indique si les colonnes "created_at" et "updated_at" sont utilisées
    public $timestamps = false;

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
