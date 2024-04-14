<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse', function (Blueprint $table) {
            $table->string('ID_MESSAGE', 100);
            $table->string('CIN', 100);
            $table->string('ID_GERANT', 100);
            $table->string('REPONSE', 2000)->nullable();
            $table->date('DATE_REPONSE')->nullable();
            
            // Primary key
            $table->primary(['ID_MESSAGE', 'CIN', 'ID_GERANT']);

            // Foreign keys
            $table->foreign('ID_MESSAGE')->references('ID_MESSAGE')->on('message')->onDelete('cascade');
            $table->foreign(['CIN', 'ID_GERANT'])->references(['CIN', 'ID_GERANT'])->on('gerant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponse');
    }
}

