<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affecter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'affecter';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['ASS_CIN', 'CIN', 'ANNEE_SCOLAIRE', 'ID_VEHICULE'];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ASS_CIN', 'CIN', 'ANNEE_SCOLAIRE', 'ID_VEHICULE', 'DATE_D_AFFECTATION'
    ];

      public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'ID_VEHICULE', 'ID_VEHICULE');
    }

    public function assistante()
    {
        return $this->belongsTo(Assistante::class, 'ASS_CIN', 'CIN')->where('ID_ASSISTANTE', $this->ID_ASSISTANTE);
    }

    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class, 'CIN', 'CIN')->where('ID_CHAUFFEUR', $this->ID_CHAUFFEUR);
    }

    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'ANNEE_SCOLAIRE', 'ANNEE_SCOLAIRE');
    }
}