<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGerantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerant', function (Blueprint $table) {
            $table->string('CIN', 100)->primary();
            $table->string('ID_GERANT', 100)->primary();
            $table->string('ID_ROLE', 100);
            $table->string('NOM', 100)->nullable();
            $table->string('PRENOM', 100)->nullable();
            $table->string('TELEPHONE', 100)->nullable();
            $table->string('EMAIL', 100)->nullable();
            $table->string('MDP', 100)->nullable();
            $table->date('DATE_DEBUT')->nullable();

            // Clé étrangère vers la table personne
            $table->foreign('CIN')->references('CIN')->on('personne')->onDelete('cascade');

            // Clé étrangère vers la table role
            $table->foreign('ID_ROLE')->references('ID_ROLE')->on('role')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gerant');
    }
}
