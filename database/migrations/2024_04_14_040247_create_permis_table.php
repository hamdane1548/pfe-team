<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisTable extends Migration
{
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
            // Utilisez 'ID_CHAUFFEUR' comme clé étrangère
            $table->foreign('ID_CHAUFFEUR')->references('ID_CHAUFFEUR')->on('chauffeur')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('permis');
    }
}
