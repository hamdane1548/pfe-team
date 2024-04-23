<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    protected $primaryKey = 'ID_TYPEP';
    public $timestamps = true;

    // Relation avec la table `papier`
    public function papiers()
    {
        return $this->hasMany(Papier::class, 'ID_TYPEP', 'ID_TYPEP');
    }
    
    // Autres relations possibles...

    // Exemple de relation avec une autre table
    /*
    public function autreTable()
    {
        return $this->belongsTo(AutreTable::class, 'foreign_key', 'local_key');
    }
    */
}
