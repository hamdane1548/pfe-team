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
            $table->string('ID_CHAUFFEUR', 100);
            $table->date('DATE_EXPIRATION')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('CIN')->references('CIN')->on('chauffeur')->onDelete('cascade');
            $table->foreign('ID_CHAUFFEUR')->references('ID_CHAUFFEUR')->on('chauffeur')->onDelete('cascade');
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
