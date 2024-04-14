<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecAssistante extends Model
{
    protected $table = 'rec_assistante';
    protected $primaryKey = ['ID_RECLAMATION', 'ID_REC_ASSISTANTE'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ID_RECLAMATION',
        'ID_REC_ASSISTANTE',
        'ID_OBJET',
        'ANNEE_SCOLAIRE',
        'ID_PARENT',
        'ID_ELEVE',
        'CONTENUE',
        'DATE_RECLAMATION',
        'REC_CIN',
        'CIN',
        'ID_ASSISTANTE'
    ];

    /**
     * Relation avec la table Reclamation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */public function reclamation()
{
    return $this->belongsTo(Reclamation::class, 'ID_RECLAMATION', 'ID_RECLAMATION');
}

public function assistante()
{
    return $this->belongsTo(Assistante::class, 'ID_ASSISTANTE', 'ID_ASSISTANTE');
}

public function parent()
{
    return $this->belongsTo(Parent::class, 'ID_PARENT', 'ID_PARENT');
}

public function eleve()
{
    return $this->belongsTo(Eleve::class, 'ID_ELEVE', 'ID_ELEVE');
}}