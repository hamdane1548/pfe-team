<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    protected $table = 'parent';
    protected $primaryKey = ['CIN', 'ID_PARENT'];
    public $incrementing = false;
    public $timestamps = false;

    // Définir la relation avec la table Personne
    public function personne()
    {
        return $this->belongsTo('App\Models\Personne', 'CIN', 'CIN');
    }

    // Définir la relation avec la table Role
    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'ID_ROLE', 'ID_ROLE');
    }

    // Définir la relation avec la table Eleve
    public function eleves()
    {
        return $this->hasMany('App\Models\Eleve', 'CIN', 'CIN');
    }

    // Définir la relation avec la table Reclamation
    public function reclamations()
    {
        return $this->hasMany('App\Models\Reclamation', 'CIN', 'CIN');
    }
}
