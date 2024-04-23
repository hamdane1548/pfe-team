<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSArreterTable extends Migration
{
    public function up()
    {
        Schema::create('s_arreter', function (Blueprint $table) {
            $table->string('ID_TRAJET', 100);
            $table->string('ID_ARRET', 100);
            $table->string('ORDRE', 1000);

            // Clés primaires
            $table->primary(['ID_TRAJET', 'ID_ARRET']);

            // Clés étrangères
            $table->foreign('ID_TRAJET')->references('ID_TRAJET')->on('trajet');
            $table->foreign('ID_ARRET')->references('ID_ARRET')->on('arret');
        });
    }

    public function down()
    {
        Schema::dropIfExists('s_arreter');
    }
}
