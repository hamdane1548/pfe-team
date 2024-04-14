<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objet', function (Blueprint $table) {
            $table->string('ID_OBJET', 100)->primary();
            $table->string('LIBELLE', 100)->nullable();
            // Ajoutez ici d'autres colonnes si nécessaire
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objet');
    }
}
