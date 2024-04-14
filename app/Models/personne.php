<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\gerant; 
use App\Models\Reponse; 
class Personne extends Model
{
    use HasFactory;

    protected $table = 'personne';
    protected $primaryKey = 'CIN';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    /**
     * Les attributs de la personne.
     *
     * @var array
     */
    protected $fillable = [
        'CIN',
        'ID_ROLE',
        'NOM',
        'PRENOM',
        'TELEPHONE',
        'EMAIL',
        'MDP',
        'DATE_DEBUT',
    ];

    /**
     * Obtenez le rôle de la personne.
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'ID_ROLE', 'ID_ROLE');
    }

    /**
     * Obtenez les chauffeurs associés à cette personne.
     */
    public function chauffeurs()
    {
        return $this->hasMany(Chauffeur::class, 'CIN', 'CIN');
    }

    /**
     * Obtenez les assistantes associées à cette personne.
     */
    public function assistantes()
    {
        return $this->hasMany(Assistante::class, 'CIN', 'CIN');
    }

    /**
     * Obtenez les parents associés à cette personne.
     */
    public function parents()
    {
        return $this->hasMany(Parent::class, 'CIN', 'CIN');
    }

    /**
     * Obtenez les gérants associés à cette personne.
     */
    public function gerants()
    {
        return $this->hasMany(Gerant::class, 'CIN', 'CIN');
    }

    /**
     * Obtenez les réponses associées à cette personne en tant que gérant.
     */
    public function reponsesEnTantQueGerant()
    {
        return $this->hasMany(Reponse::class, 'CIN', 'CIN');
    }

    /**
     * Obtenez les réponses associées à cette personne en tant que répondant.
     */
    public function reponsesEnTantQueRepondant()
    {
        return $this->hasMany(Reponse::class, 'ID_GERANT', 'CIN');
    }
}
