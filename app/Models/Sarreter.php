<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SArreter extends Model
{
    use HasFactory;

    protected $table = 's_arreter';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = ['ID_TRAJET', 'ID_ARRET'];

    protected $fillable = [
        'ID_TRAJET',
        'ID_ARRET',
        'ORDRE',
    ];

    // Relation avec la table Trajet (un arrêt est associé à un trajet)
    public function trajet()
    {
        return $this->belongsTo(Trajet::class, 'ID_TRAJET', 'ID_TRAJET');
    }

    // Relation avec la table Arret (un arrêt est un point d'arrêt)
    public function arret()
    {
        return $this->belongsTo(Arret::class, 'ID_ARRET', 'ID_ARRET');
    }
}
