<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $table = 'reclamation';
    protected $primaryKey = 'ID_RECLAMATION';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_RECLAMATION',
        'ID_OBJET',
        'ANNEE_SCOLAIRE',
        'ID_ELEVE',
        'CIN',
        'CONTENUE',
        'DATE_RECLAMATION',
    ];

    // Relation avec la table AnneeScolaire (une réclamation est liée à une année scolaire)
    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'ANNEE_SCOLAIRE', 'ANNEE_SCOLAIRE');
    }

    // Relation avec la table Eleve (une réclamation est soumise par un élève)
    public function eleve()
    {
        return $this->belongsTo(Eleve::class, 'ID_ELEVE', 'ID_ELEVE');
    }

    // Relation avec la table Parent (une réclamation est faite par un parent)
    public function parent()
    {
        return $this->belongsTo(Parent::class, 'CIN', 'CIN');
    }

    // Relation avec la table Objet (une réclamation concerne un objet)
    public function objet()
    {
        return $this->belongsTo(Objet::class, 'ID_OBJET', 'ID_OBJET');
    }
}
