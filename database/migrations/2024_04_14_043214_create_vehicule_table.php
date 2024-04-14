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
            $table->string('CIN', 100); // Modifier la taille de la colonne pour correspondre à la taille dans la table chauffeur
            $table->string('ID_CHAUFFEUR', 100); // Modifier la taille de la colonne pour correspondre à la taille dans la table chauffeur
            $table->string('ASS_CIN', 100); // Modifier la taille de la colonne pour correspondre à la taille dans la table assistante
            $table->string('ID_ASSISTANTE', 100); // Modifier la taille de la colonne pour correspondre à la taille dans la table assistante
            $table->string('ID_TRAJET'); // Assurez-vous que la taille de cette colonne correspond à celle dans la table trajet
            $table->string('MODEL')->nullable();
            $table->date('ANNEE_ACHAT')->nullable();
            $table->string('MATRICULE')->nullable();
            $table->string('NUMERO_V')->nullable();

            // Définition des clés étrangères
            $table->foreign('CIN')->references('CIN')->on('chauffeur');
            $table->foreign('ID_CHAUFFEUR')->references('ID_CHAUFFEUR')->on('chauffeur');
            $table->foreign('ASS_CIN')->references('CIN')->on('assistante');
            $table->foreign('ID_ASSISTANTE')->references('ID_ASSISTANTE')->on('assistante');
            $table->foreign('ID_TRAJET')->references('ID_TRAJET')->on('trajet');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicule');
    }
}
