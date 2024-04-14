<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arret extends Model
{
    protected $table = 'arret';
    protected $primaryKey = 'ID_ARRET';
    public $timestamps = false;

    public function sArreters()
    {
        return $this->hasMany(SArreter::class, 'ID_ARRET', 'ID_ARRET');
    }
}
