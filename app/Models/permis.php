<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permis extends Model
{
    protected $table = 'permis';
    protected $primaryKey = 'ID_PERMIS';
    public $timestamps = false;

    /**
     * Relations
     */

    // Relation avec la table Chauffeur
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class, 'CIN', 'CIN');
    }
}
