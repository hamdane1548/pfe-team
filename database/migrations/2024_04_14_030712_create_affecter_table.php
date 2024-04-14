<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffecterTable extends Migration
{
    public function up()
    {
        Schema::create('affecter', function (Blueprint $table) {
            $table->integer('ANNEE_SCOLAIRE');
            $table->string('ID_VEHICULE', 50);
            $table->string('ASS_CIN', 100);
            $table->string('ID_ASSISTANTE', 100);
            $table->string('CIN', 100);
            $table->string('ID_CHAUFFEUR', 100);
            $table->date('DATE_D_AFFECTATION')->nullable();

            // Define foreign keys
           
            $table->foreign('ID_VEHICULE')->references('ID_VEHICULE')->on('vehicule');
            $table->foreign(['CIN', 'ID_CHAUFFEUR'])->references(['CIN', 'ID_CHAUFFEUR'])->on('chauffeur');
            $table->foreign(['ASS_CIN', 'ID_ASSISTANTE'])->references(['CIN', 'ID_ASSISTANTE'])->on('assistante');

            // Define other foreign keys if necessary

            $table->primary(['ANNEE_SCOLAIRE', 'ID_VEHICULE', 'ASS_CIN', 'ID_ASSISTANTE', 'CIN', 'ID_CHAUFFEUR']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('affecter');
    }
}
