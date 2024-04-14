<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecAssistante extends Model
{
    use HasFactory;

    protected $table = 'rec_assistante';
    protected $primaryKey = 'ID_RECLAMATION';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_RECLAMATION',
        'REC_CIN',
        'CIN',
        'ID_OBJET',
        'ANNEE_SCOLAIRE',
        'ID_ELEVE',
        'CONTENUE',
        'DATE_RECLAMATION',
    ];

    // Relation avec la table Assistante (une réclamation est faite par une assistante)
    public function assistante()
    {
        return $this->belongsTo(Assistante::class, 'CIN', 'CIN');
    }

    // Relation avec la table Reclamation (une réclamation est associée à une réclamation)
    public function reclamation()
    {
        return $this->belongsTo(Reclamation::class, 'ID_RECLAMATION', 'ID_RECLAMATION');
    }

    // Relation avec la table Parent (une réclamation est associée à un parent)
    public function parent()
    {
        return $this->belongsTo(Parent::class, 'ID_PARENT', 'ID_PARENT');
    }

    // Relation avec la table Eleve (une réclamation est associée à un élève)
    public function eleve()
    {
        return $this->belongsTo(Eleve::class, 'ID_ELEVE', 'ID_ELEVE');
    }
}
