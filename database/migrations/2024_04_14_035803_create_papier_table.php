<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papier', function (Blueprint $table) {
            $table->string('ID_PAPIER', 100)->primary();
            $table->string('ID_VEHICULE', 50);
            $table->string('ID_TYPEP', 100);
            $table->date('DATE_D_EXPIRATION')->nullable();
            $table->timestamps();

            // Clés étrangères
            $table->foreign('ID_VEHICULE')->references('ID_VEHICULE')->on('vehicule');
            $table->foreign('ID_TYPEP')->references('ID_TYPEP')->on('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papier');
    }
}
