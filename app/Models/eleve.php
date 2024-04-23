<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $table = 'eleve';
    protected $primaryKey = 'ID_ELEVE';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_ELEVE',
        'ID_VEHICULE',
        'CIN',
        'NOM',
        'PRENOM',
        'DATE_NAISS',
        'NUM_PLACE',
        'ADRESSE',
        'PRESENCE'
    ];

    // Relation avec Vehicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec Parent
    public function parent()
    {
        return $this->belongsTo(Parent::class, 'CIN', 'CIN');
    }

    // Relation avec Reclamation
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'ID_ELEVE', 'ID_ELEVE');
    }
}
