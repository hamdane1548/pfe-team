<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepondreTable extends Migration
{
    public function up()
    {
        Schema::create('repondre', function (Blueprint $table) {
            $table->string('ID_RECLAMATION', 100);
            $table->string('CIN', 100);
            $table->date('DATE_REPONSE')->nullable();
            $table->string('REPONSE', 2000)->nullable();

            // Clés primaires et étrangères
            $table->primary(['ID_RECLAMATION', 'CIN']);
            $table->foreign('CIN')->references('CIN')->on('gerant');
            $table->foreign('ID_RECLAMATION')->references('ID_RECLAMATION')->on('rec_parent');
        });
    }

    public function down()
    {
        Schema::dropIfExists('repondre');
    }
}
