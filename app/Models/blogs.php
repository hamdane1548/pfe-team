<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'ID_BLOGS';
    public $timestamps = true;

    /**
     * Relation avec d'autres tables
     */

    // Si un blog a plusieurs commentaires
}
