<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $table = 'vehicule';
    protected $primaryKey = 'ID_VEHICULE';
    public $incrementing = false;
    public $timestamps = false;

    // Relation avec le chauffeur (chaque véhicule appartient à un chauffeur)
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class, 'CIN', 'CIN');
    }

    // Relation avec le chauffeur principal (chaque véhicule est affecté à un chauffeur principal)
    public function chauffeurPrincipal()
    {
        return $this->belongsTo(Chauffeur::class, 'ID_CHAUFFEUR', 'ID_CHAUFFEUR');
    }

    // Relation avec l'assistante (chaque véhicule est associé à une assistante)
    public function assistante()
    {
        return $this->belongsTo(Assistante::class, 'ASS_CIN', 'CIN');
    }

    // Relation avec l'assistante principale (chaque véhicule est associé à une assistante principale)
    public function assistantePrincipal()
    {
        return $this->belongsTo(Assistante::class, 'ID_ASSISTANTE', 'ID_ASSISTANTE');
    }

    // Relation avec le trajet (chaque véhicule effectue un trajet)
    public function trajet()
    {
        return $this->belongsTo(Trajet::class, 'ID_TRAJET', 'ID_TRAJET');
    }

    // Relation avec les papiers (chaque véhicule possède des papiers)
    public function papiers()
    {
        return $this->hasMany(Papier::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec les incidents (chaque véhicule peut être impliqué dans plusieurs incidents)
    public function incidents()
    {
        return $this->hasMany(Incident::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec les affectations (chaque véhicule peut être affecté à plusieurs trajets)
    public function affectations()
    {
        return $this->hasMany(Affecter::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec les réclamations (chaque véhicule peut être associé à des réclamations)
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }
}
