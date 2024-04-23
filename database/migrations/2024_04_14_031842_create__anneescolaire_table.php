<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneeScolaireTable extends Migration
{
    public function up()
    {
        Schema::create('annee_scolaire', function (Blueprint $table) {
            // Utilisation de bigIncrements() pour la clé primaire
            $table->bigIncrements('ANNEE_SCOLAIRE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('annee_scolaire');
    }
}
