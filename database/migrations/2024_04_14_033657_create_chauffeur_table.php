<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChauffeurTable extends Migration
{
    public function up()
    {
        Schema::create('chauffeur', function (Blueprint $table) {
            $table->string('CIN', 100)->primary();
            $table->string('ID_ROLE', 100);
            $table->string('NOM', 100)->nullable();
            $table->string('PRENOM', 100)->nullable();
            $table->string('TELEPHONE', 100)->nullable();
            $table->string('EMAIL', 100)->nullable();
            $table->string('MDP', 100)->nullable();
            $table->date('DATE_DEBUT')->nullable();
            $table->text('EXPERIENCE')->nullable();

            // Clé étrangère vers la table personne
            $table->foreign('CIN')->references('CIN')->on('personne');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chauffeur');
    }
}
