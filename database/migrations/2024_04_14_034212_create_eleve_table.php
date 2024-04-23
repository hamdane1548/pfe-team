<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEleveTable extends Migration
{
    public function up()
    {
        Schema::create('eleve', function (Blueprint $table) {
            $table->string('ID_ELEVE', 100)->primary();
            $table->string('ID_VEHICULE', 50);
            $table->string('CIN', 100);
            $table->string('NOM', 100)->nullable();
            $table->string('PRENOM', 100)->nullable();
            $table->date('DATE_NAISS')->nullable();
            $table->string('NUM_PLACE', 100)->nullable();
            $table->longText('ADRESSE')->nullable();
            $table->tinyInteger('PRESENCE')->nullable();
            
            $table->timestamps();

            // Contraintes de clé étrangère
            $table->foreign('ID_VEHICULE')->references('ID_VEHICULE')->on('vehicule');
            $table->foreign('CIN')->references('CIN')->on('parents');

        });
    }

    public function down()
    {
        Schema::dropIfExists('eleve');
    }
}
