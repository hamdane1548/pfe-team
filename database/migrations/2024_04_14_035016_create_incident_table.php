<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentTable extends Migration
{
    public function up()
    {
        Schema::create('incident', function (Blueprint $table) {
            $table->string('ID_INCIDENT', 100)->primary();
            $table->string('ID_VEHICULE', 50);
            $table->unsignedBigInteger('ANNEE_SCOLAIRE'); // Utilisez unsignedBigInteger() pour les clés étrangères

            $table->string('LOCALISATION', 100)->nullable();
            $table->dateTime('DATE_HEURE')->nullable();
            
            // Foreign key constraints
            $table->foreign('ANNEE_SCOLAIRE')->references('ANNEE_SCOLAIRE')->on('annee_scolaire');
            $table->foreign('ID_VEHICULE')->references('ID_VEHICULE')->on('vehicule');
        });
    }

    public function down()
    {
        Schema::dropIfExists('incident');
    }
}
