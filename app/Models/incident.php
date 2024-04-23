<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $table = 'incident';
    protected $primaryKey = 'ID_INCIDENT';
    public $timestamps = false;

    protected $fillable = [
        'ID_VEHICULE',
        'ANNEE_SCOLAIRE',
        'LOCALISATION',
        'DATE_HEURE',
    ];

    /**
     * Relations
     */

    // Relation avec la table Vehicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec la table AnneeScolaire
    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'ANNEE_SCOLAIRE', 'ANNEE_SCOLAIRE');
    }
}
