<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSArreterTable extends Migration
{
    public function up()
    {
        Schema::create('Sarreter', function (Blueprint $table) {
            $table->string('ID_TRAJET', 100);
            $table->string('ID_ARRET', 100);
            $table->string('ORDRE', 1000);

            // Clés primaires
            $table->primary(['ID_TRAJET', 'ID_ARRET']);

            // Clé étrangère vers la table 'arret'
            $table->foreign('ID_ARRET')->references('ID_ARRET')->on('arret')->onDelete('cascade');

            // Clé étrangère vers la table 'trajet'
            $table->foreign('ID_TRAJET')->references('ID_TRAJET')->on('trajet')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Sarreter');
    }
}
