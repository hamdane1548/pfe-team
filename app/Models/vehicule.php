<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $table = 'vehicule';
    protected $primaryKey = 'ID_VEHICULE';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_VEHICULE',
        'ID_TRAJET',
        'CIN',
        'ASS_CIN',
        'MODEL',
        'ANNEE_ACHAT',
        'MATRICULE',
        'NUMERO_V',
    ];

    // Relation avec la table Chauffeur (un véhicule est conduit par un chauffeur)
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class, 'CIN', 'CIN');
    }

    // Relation avec la table Trajet (un véhicule effectue un trajet)
    public function trajet()
    {
        return $this->belongsTo(Trajet::class, 'ID_TRAJET', 'ID_TRAJET');
    }

    // Relation avec la table Assistante (un véhicule est associé à une assistante)
    public function assistante()
    {
        return $this->belongsTo(Assistante::class, 'ASS_CIN', 'CIN');
    }

    // Relation avec la table Papier (un véhicule possède des papiers)
    public function papiers()
    {
        return $this->hasMany(Papier::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec la table Incident (un véhicule peut être impliqué dans plusieurs incidents)
    public function incidents()
    {
        return $this->hasMany(Incident::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec la table Affecter (un véhicule peut être affecté à plusieurs trajets)
    public function affectations()
    {
        return $this->hasMany(Affecter::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec la table Reclamation (un véhicule peut être associé à des réclamations)
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }
}
