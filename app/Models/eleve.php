<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $table = 'eleve';
    protected $primaryKey = 'ID_ELEVE';
    public $timestamps = false;

    protected $fillable = [
        'ID_ELEVE',
        'CIN',
        'ID_PARENT',
        'ID_VEHICULE',
        'NOM',
        'PRENOM',
        'DATE_NAISS',
        'NUM_PLACE',
        'ADRESSE',
        'PRESENCE',
    ];

    // Relation avec le parent
    public function parent()
    {
        return $this->belongsTo('App\Models\Parent', 'ID_PARENT', 'ID_PARENT');
    }

    // Relation avec le véhicule
    public function vehicule()
    {
        return $this->belongsTo('App\Models\Vehicule', 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec les réclamations
    public function reclamations()
    {
        return $this->hasMany('App\Models\Reclamation', 'ID_ELEVE', 'ID_ELEVE');
    }
}
