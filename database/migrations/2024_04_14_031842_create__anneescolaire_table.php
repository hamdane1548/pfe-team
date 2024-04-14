<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneeScolaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee_scolaire', function (Blueprint $table) {
            $table->increments('ANNEE_SCOLAIRE');
            // Ajoutez d'autres colonnes si nécessaire

            // Exemple de colonne avec index
            // $table->string('nom_colonne')->index();

            // Exemple de colonne avec relation de clé étrangère
            // $table->unsignedBigInteger('autre_table_id');
            // $table->foreign('autre_table_id')->references('id')->on('autre_table')->onDelete('cascade');

            // Exemple de colonne avec index et relation de clé étrangère
            // $table->unsignedBigInteger('autre_table_id')->index();
            // $table->foreign('autre_table_id')->references('id')->on('autre_table')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annee_scolaire');
    }
}
