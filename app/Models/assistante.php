<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistante extends Model
{
    protected $table = 'assistante';
    protected $primaryKey = 'CIN'; // Assuming CIN is the primary key
    public $incrementing = false; // Assuming CIN is not auto-incrementing
    protected $keyType = 'string';
    public $timestamps = false;

    // Relation avec la table 'personne'
    public function personne()
    {
        return $this->belongsTo(Personne::class, 'CIN', 'CIN');
    }

    // Relation avec la table 'role'
    public function role()
    {
        return $this->belongsTo(Role::class, 'ID_ROLE', 'ID_ROLE');
    }

    // Relation avec la table 'vehicule' via 'ID_ASSISTANTE'
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class, 'ID_ASSISTANTE', 'ID_ASSISTANTE');
    }

    // Relation avec la table 'affecter' via 'ID_ASSISTANTE'
    public function affectations()
    {
        return $this->hasMany(Affecter::class, 'ID_ASSISTANTE', 'ID_ASSISTANTE');
    }

    // Relation avec la table 'rec_assistante' via 'ID_ASSISTANTE'
    public function reclamations()
    {
        return $this->hasMany(RecAssistante::class, 'ID_ASSISTANTE', 'ID_ASSISTANTE');
    }
}
