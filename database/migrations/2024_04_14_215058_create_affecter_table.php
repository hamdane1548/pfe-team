<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffecterTable extends Migration
{
    public function up()
    {
        Schema::create('affecter', function (Blueprint $table) {
            $table->string('ASS_CIN', 100);
            $table->string('CIN', 100);
            $table->unsignedBigInteger('ANNEE_SCOLAIRE');
            $table->string('ID_VEHICULE', 50);
            $table->date('DATE_D_AFFECTATION')->nullable();

            // Clés étrangères
            $table->primary(['ASS_CIN', 'CIN', 'ANNEE_SCOLAIRE', 'ID_VEHICULE']);
            $table->foreign('ASS_CIN')->references('CIN')->on('assistante');
            $table->foreign('CIN')->references('CIN')->on('chauffeur');
            $table->foreign('ANNEE_SCOLAIRE')->references('ANNEE_SCOLAIRE')->on('annee_scolaire');
            $table->foreign('ID_VEHICULE')->references('ID_VEHICULE')->on('vehicule');
        });
    }

    public function down()
    {
        Schema::dropIfExists('affecter');
    }
}
