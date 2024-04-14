<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepondreTable extends Migration
{
    public function up()
    {
        Schema::create('repondre', function (Blueprint $table) {
            $table->string('ID_RECLAMATION');
            $table->char('ID_REC_PARENT', 10);
            $table->string('CIN');
            $table->string('ID_GERANT');
            $table->date('DATE_REPONSE')->nullable();
            $table->string('REPONSE', 2000)->nullable();

            // Clés étrangères
            $table->foreign('ID_RECLAMATION')->references('ID_RECLAMATION')->on('reclamation');
            $table->foreign('ID_REC_PARENT')->references('ID_REC_PARENT')->on('rec_parent');
            $table->foreign('CIN')->references('CIN')->on('gerant');
            $table->foreign('ID_GERANT')->references('ID_GERANT')->on('gerant');

            $table->primary(['ID_RECLAMATION', 'ID_REC_PARENT', 'CIN', 'ID_GERANT']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('repondre');
    }
}
