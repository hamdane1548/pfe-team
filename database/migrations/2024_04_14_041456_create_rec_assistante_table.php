<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecAssistanteTable extends Migration
{
    public function up()
    {
        Schema::create('rec_assistante', function (Blueprint $table) {
            $table->string('ID_RECLAMATION', 100)->primary();
            $table->string('REC_CIN', 100);
            $table->string('CIN', 100);
            $table->string('ID_OBJET', 100);
            $table->integer('ANNEE_SCOLAIRE');
            $table->string('ID_ELEVE', 100);
            $table->string('CONTENUE', 100)->nullable();
            $table->date('DATE_RECLAMATION')->nullable();

            // Contraintes de clé étrangère
            $table->foreign('CIN')->references('CIN')->on('assistante');
            $table->foreign('ID_RECLAMATION')->references('ID_RECLAMATION')->on('reclamation');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rec_assistante');
    }
}
