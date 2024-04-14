<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repondre extends Model
{
    protected $primaryKey = ['ID_RECLAMATION', 'ID_REC_PARENT', 'CIN', 'ID_GERANT'];
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_RECLAMATION',
        'ID_REC_PARENT',
        'CIN',
        'ID_GERANT',
        'DATE_REPONSE',
        'REPONSE',
    ];

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

