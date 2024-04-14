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
            $table->string('CIN', 100);
            $table->string('ID_PARENT', 100);
            $table->string('ID_VEHICULE', 50);
            $table->string('NOM', 100)->nullable();
            $table->string('PRENOM', 100)->nullable();
            $table->date('DATE_NAISS')->nullable();
            $table->string('NUM_PLACE', 100)->nullable();
            $table->longText('ADRESSE')->nullable();
            $table->tinyInteger('PRESENCE')->nullable();

            // Foreign key constraints
            $table->foreign('ID_VEHICULE')->references('ID_VEHICULE')->on('vehicule')->onDelete('cascade');
            $table->foreign(['CIN', 'ID_PARENT'])->references(['CIN', 'ID_PARENT'])->on('parent')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eleve');
    }
}
