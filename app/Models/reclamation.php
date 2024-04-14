<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    protected $table = 'reclamation';
    protected $primaryKey = 'ID_RECLAMATION';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ID_RECLAMATION',
        'ID_OBJET',
        'ANNEE_SCOLAIRE',
        'CIN',
        'ID_PARENT',
        'ID_ELEVE',
        'CONTENUE',
        'DATE_RECLAMATION'
    ];

    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'ANNEE_SCOLAIRE', 'ANNEE_SCOLAIRE');
    }

    public function objet()
    {
        return $this->belongsTo(Objet::class, 'ID_OBJET', 'ID_OBJET');
    }

    public function parent()
    {
        return $this->belongsTo(Parent::class, 'CIN', 'CIN')->where('ID_PARENT', $this->ID_PARENT);
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class, 'ID_ELEVE', 'ID_ELEVE');
    }
}
