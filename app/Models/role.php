<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'ID_ROLE';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    /**
     * Relation avec la table 'Personne'.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnes()
    {
        return $this->hasMany(Personne::class, 'ID_ROLE', 'ID_ROLE');
    }
}
