<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    /**
     * Le nom de la table associée au modèle.
     *
     * @var string
     */
    protected $table = 'trajet';

    /**
     * Le nom de la clé primaire de la table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_TRAJET';

    /**
     * Indique si les ID sont auto-incrémentés.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID_TRAJET', 'NOM_TRAJET',
    ];

    /**
     * Obtenez les arrêts pour ce trajet.
     */
    public function arrets()
    {
        return $this->belongsToMany(Arret::class, 's_arreter', 'ID_TRAJET', 'ID_ARRET')
                    ->withPivot('ORDRE')
                    ->withTimestamps();
    }

    /**
     * Obtenez les véhicules qui effectuent ce trajet.
     */
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class, 'ID_TRAJET', 'ID_TRAJET');
    }
}

