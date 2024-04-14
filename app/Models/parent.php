<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    use HasFactory;

    protected $table = 'parents';
    protected $primaryKey = 'CIN';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'CIN',
        'ID_ROLE',
        'NOM',
        'PRENOM',
        'TELEPHONE',
        'EMAIL',
        'MDP',
        'DATE_DEBUT'
    ];

    // Relation avec Personne
    public function personne()
    {
        return $this->belongsTo(Personne::class, 'CIN', 'CIN');
    }

    // Relation avec Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'ID_ROLE', 'id');
    }

    // Relation avec Eleve
    public function eleves()
    {
        return $this->hasMany(Eleve::class, 'CIN_PARENT', 'CIN');
    }

    // Relation avec Reclamation
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'CIN_PARENT', 'CIN');
    }
}
