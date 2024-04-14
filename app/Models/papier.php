<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Papier extends Model
{
    protected $table = 'papier';
    protected $primaryKey = 'ID_PAPIER';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'ID_PAPIER',
        'ID_VEHICULE',
        'ID_TYPEP',
        'DATE_D_EXPIRATION',
    ];

    // Relation avec la table Vehicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec la table Type
    public function type()
    {
        return $this->belongsTo(Type::class, 'ID_TYPEP', 'ID_TYPEP');
    }

    // Relation avec la table Incident
    public function incidents()
    {
        return $this->hasMany(Incident::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    // Relation avec la table RecAssistante
    public function recAssistante()
    {
        return $this->hasMany(RecAssistante::class, 'ID_OBJET', 'ID_PAPIER');
    }

    // Relation avec la table RecParent
    public function recParent()
    {
        return $this->hasMany(RecParent::class, 'ID_OBJET', 'ID_PAPIER');
    }
}
