<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecParentTable extends Migration
{
    public function up()
    {
        Schema::create('rec_parent', function (Blueprint $table) {
            $table->string('ID_RECLAMATION', 100)->primary();
            $table->string('ID_OBJET', 100);
            $table->integer('ANNEE_SCOLAIRE');
            $table->string('ID_ELEVE', 100);
            $table->string('CIN', 100)->nullable();
            $table->string('CONTENUE', 100)->nullable();
            $table->date('DATE_RECLAMATION')->nullable();

            // Contrainte de clé étrangère
            $table->foreign('ID_RECLAMATION')->references('ID_RECLAMATION')->on('reclamation');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rec_parent');
    }
}
