<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnneeScolaire extends Model
{
    protected $table = 'annee_scolaire';
    protected $primaryKey = 'ANNEE_SCOLAIRE';
    public $timestamps = false;

    /**
     * Obtenez les affectations pour cette année scolaire.
     */
    public function affectations()
    {
        return $this->hasMany(Affecter::class, 'ANNEE_SCOLAIRE');
    }

    /**
     * Obtenez les réclamations pour cette année scolaire.
     */
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'ANNEE_SCOLAIRE');
    }

    /**
     * Obtenez les incidents pour cette année scolaire.
     */
    public function incidents()
    {
        return $this->hasMany(Incident::class, 'ANNEE_SCOLAIRE');
    }

    // Ajoutez d'autres relations si nécessaire
}
