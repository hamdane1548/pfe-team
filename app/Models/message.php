<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'ID_MESSAGE';
    public $timestamps = false;

    /**
     * Relations
     */

    // Relation avec la table Reponse
    public function reponses()
    {
        return $this->hasMany(Reponse::class, 'ID_MESSAGE', 'ID_MESSAGE');
    }
}

