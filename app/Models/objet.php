<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    protected $table = 'objet';
    protected $primaryKey = 'ID_OBJET';
    public $incrementing = false;
    public $timestamps = false;

    // Relation avec la table Reclamation
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'ID_OBJET', 'ID_OBJET');
    }
}
