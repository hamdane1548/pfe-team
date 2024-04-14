<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sarreter extends Model
{
    protected $table = 'Sarreter';

    protected $primaryKey = ['ID_TRAJET', 'ID_ARRET'];

    public $incrementing = false;

    protected $fillable = [
        'ID_TRAJET',
        'ID_ARRET',
        'ORDRE',
    ];

    public function arret()
    {
        return $this->belongsTo(Arret::class, 'ID_ARRET', 'ID_ARRET');
    }

    public function trajet()
    {
        return $this->belongsTo(Trajet::class, 'ID_TRAJET', 'ID_TRAJET');
    }
}
