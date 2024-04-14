<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $table = 'incident';
    protected $primaryKey = 'ID_INCIDENT';
    public $timestamps = false;

    // Relation avec l'année scolaire
    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'ANNEE_SCOLAIRE', 'ANNEE_SCOLAIRE');
    }

    // Relation avec le véhicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }
}
