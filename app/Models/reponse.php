<?php

use Illuminate\Database\Eloquent\Model;
use App\Models\Message; 

use App\Models\Personne;
class Reponse extends Model
{
    // Nom de la table associée au modèle
    protected $table = 'reponse';

    // Indique si les colonnes "created_at" et "updated_at" sont utilisées
    public $timestamps = false;

    // Relation avec la table gerant
    public function gerant()
    {
        return $this->belongsTo(Gerant::class, 'CIN', 'CIN');
    }

    // Relation avec la table message
    public function message()
    {
        return $this->belongsTo(Message::class, 'ID_MESSAGE', 'ID_MESSAGE');
    }
}
