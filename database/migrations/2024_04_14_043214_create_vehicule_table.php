<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculeTable extends Migration
{
    public function up()
    {
        Schema::create('vehicule', function (Blueprint $table) {
            $table->string('ID_VEHICULE', 50)->primary();
            $table->string('ID_TRAJET', 100);
            $table->string('CIN', 100);
            $table->string('ASS_CIN', 100);
            $table->string('MODEL', 100)->nullable();
            $table->date('ANNEE_ACHAT')->nullable();
            $table->string('MATRICULE', 100)->nullable();
            $table->string('NUMERO_V', 100)->nullable();

            // Contraintes de clé étrangère
            $table->foreign('CIN')->references('CIN')->on('chauffeur');
            $table->foreign('ID_TRAJET')->references('ID_TRAJET')->on('trajet');
            $table->foreign('ASS_CIN')->references('CIN')->on('assistante');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicule');
    }
}
