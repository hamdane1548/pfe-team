<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gerant;

class Repondre extends Model
{
    use HasFactory;

    protected $table = 'repondre';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_RECLAMATION',
        'CIN',
        'DATE_REPONSE',
        'REPONSE',
    ];

    // Relations

    public function parent()
    {
        return $this->belongsTo(Parent::class, 'CIN', 'CIN');
    }

    public function gerant()
    {
        return $this->belongsTo(Gerant::class, 'ID_GERANT', 'ID_GERANT');
    }

    public function reclamation()
    {
        return $this->belongsTo(Reclamation::class, 'ID_RECLAMATION', 'ID_RECLAMATION');
    }

    public function recParent()
    {
        return $this->belongsTo(RecParent::class, 'ID_REC_PARENT', 'ID_REC_PARENT');
    }
}
