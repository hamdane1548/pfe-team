<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permis', function (Blueprint $table) {
            $table->string('ID_PERMIS', 100)->primary();
            $table->string('CIN', 100);
            $table->date('DATE_EXPIRATION')->nullable();

            // Clé étrangère
            $table->foreign('CIN')->references('CIN')->on('chauffeur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permis');
    }
}
