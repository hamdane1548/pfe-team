<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repondre extends Model
{
    protected $table = 'repondre';
    protected $primaryKey = ['ID_RECLAMATION', 'ID_REC_PARENT', 'CIN', 'ID_GERANT'];
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_RECLAMATION', 'ID_REC_PARENT', 'CIN', 'ID_GERANT', 'DATE_REPONSE', 'REPONSE'
    ];

    // Relation avec la table Reclamation
    public function reclamation()
    {
        return $this->belongsTo(Reclamation::class, 'ID_RECLAMATION', 'ID_RECLAMATION');
    }

    // Relation avec la table RecParent
    public function recParent()
    {
        return $this->belongsTo(RecParent::class, 'ID_REC_PARENT', 'ID_REC_PARENT');
    }

    // Relation avec la table Gerant
    public function gerant()
    {
        return $this->belongsTo(Gerant::class, 'CIN', 'CIN');
    }

    // Relation avec la table RecParent
    public function reponse()
    {
        return $this->belongsTo(Reponse::class, 'ID_RECLAMATION');
    }
}
