<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    use HasFactory;

    protected $table = 'objet';
    protected $primaryKey = 'ID_OBJET';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_OBJET',
        'LIBELLE',
    ];

    // Relation avec la table Reclamation (un objet peut être associé à plusieurs réclamations)
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'ID_OBJET', 'ID_OBJET');
    }
}