<?php

namespace App\Models;
use App\Models\Gerant;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $table = 'reponse';
    protected $primaryKey = ['ID_MESSAGE', 'CIN', 'ID_GERANT']; // Assuming composite primary key
    public $incrementing = false; // Assuming composite primary key is not auto-incrementing
    protected $keyType = 'string';

    public function gerant()
    {
        return $this->belongsTo(Gerant::class, 'CIN', 'ID_GERANT');
    }

    public function message()
    {
        return $this->belongsTo(Message::class, 'ID_MESSAGE', 'ID_MESSAGE');
    }
}
