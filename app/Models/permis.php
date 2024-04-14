<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permis extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'permis';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_PERMIS';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID_PERMIS',
        'CIN',
        'ID_CHAUFFEUR',
        'DATE_EXPIRATION',
    ];

    /**
     * Get the chauffeur associated with the permis.
     */
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class, 'CIN', 'CIN');
    }

    /**
     * Get the chauffeur associated with the permis.
     */
    public function chauffeurDetail()
    {
        return $this->belongsTo(Chauffeur::class, 'ID_CHAUFFEUR', 'ID_CHAUFFEUR');
    }
}
