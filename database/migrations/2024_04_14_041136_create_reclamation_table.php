<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationTable extends Migration
{
    public function up()
    {
        Schema::create('reclamation', function (Blueprint $table) {
            $table->string('ID_RECLAMATION', 100)->primary();
            $table->string('ID_OBJET', 100);
            $table->unsignedBigInteger('ANNEE_SCOLAIRE');
            $table->string('ID_ELEVE', 100);
            $table->string('CIN', 100);
            $table->string('CONTENUE', 100)->nullable();
            $table->date('DATE_RECLAMATION')->nullable();

            // Clés étrangères
            $table->foreign('ANNEE_SCOLAIRE')->references('ANNEE_SCOLAIRE')->on('annee_scolaire');
            $table->foreign('ID_ELEVE')->references('ID_ELEVE')->on('eleve');
            $table->foreign('CIN')->references('CIN')->on('parents');
            $table->foreign('ID_OBJET')->references('ID_OBJET')->on('objet');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reclamation');
    }
}
