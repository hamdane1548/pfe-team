<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecParent extends Model
{
    use HasFactory;

    protected $table = 'rec_parent';
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

    // Relations

    public function reclamation()
    {
        return $this->belongsTo(Reclamation::class, 'ID_RECLAMATION', 'ID_RECLAMATION');
    }

    public function objet()
    {
        return $this->belongsTo(Objet::class, 'ID_OBJET', 'ID_OBJET');
    }

    public function parent()
    {
        return $this->belongsTo(Parent::class, 'CIN', 'CIN');
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class, 'ID_ELEVE', 'ID_ELEVE');
    }

    public function repondre()
    {
        return $this->hasOne(Repondre::class, 'ID_REC_PARENT', 'ID_REC_PARENT');
    }
}
