<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $table = 'reponse';
    protected $primaryKey = ['ID_MESSAGE', 'CIN', 'ID_GERANT'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ID_MESSAGE',
        'CIN',
        'ID_GERANT',
        'REPONSE',
        'DATE_REPONSE',
    ];

    /**
     * Relation avec la table "message"
     */
    public function message()
    {
        return $this->belongsTo(Message::class, 'ID_MESSAGE', 'ID_MESSAGE');
    }

    /**
     * Relation avec la table "gerant"
     */
    public function gerant()
    {
        return $this->belongsTo(Gerant::class, 'CIN', 'CIN');
    }
}
