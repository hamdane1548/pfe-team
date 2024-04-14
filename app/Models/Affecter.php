<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Affecter extends Model
{
    protected $table = 'affecter';
    protected $primaryKey = ['ANNEE_SCOLAIRE', 'ID_VEHICULE', 'ASS_CIN', 'ID_ASSISTANTE', 'CIN', 'ID_CHAUFFEUR'];
    public $incrementing = false;
    public $timestamps = false;

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    public function assistante()
    {
        return $this->belongsTo(Assistante::class, 'ASS_CIN', 'CIN')->where('ID_ASSISTANTE', $this->ID_ASSISTANTE);
    }

    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class, 'CIN', 'CIN')->where('ID_CHAUFFEUR', $this->ID_CHAUFFEUR);
    }

    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'ANNEE_SCOLAIRE', 'ANNEE_SCOLAIRE');
    }
}

