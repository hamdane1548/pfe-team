<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    protected $primaryKey = 'CIN';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'CIN', 'ID_CHAUFFEUR', 'ID_ROLE', 'NOM', 'PRENOM', 'TELEPHONE', 'EMAIL', 'MDP', 'DATE_DEBUT', 'EXPERIENCE'
    ];

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

