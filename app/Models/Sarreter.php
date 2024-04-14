<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sarreter extends Model
{
    protected $table = 'Sarreter';

    protected $fillable = ['trajet_id', 'arret_id', 'ordre'];

    public function trajet()
    {
        return $this->belongsTo(Trajet::class, 'trajet_id');
    }

    public function arret()
    {
        return $this->belongsTo(Arret::class, 'arret_id');
    }
}
