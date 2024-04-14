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
            $table->string('CIN', 100);
            $table->string('ID_MESSAGE', 100);
            $table->string('REPONSE', 2000)->nullable();
            $table->date('DATE_REPONSE')->nullable();

            // Clés étrangères
            $table->primary(['CIN', 'ID_MESSAGE']);
            $table->foreign('CIN')->references('CIN')->on('gerant');
            $table->foreign('ID_MESSAGE')->references('ID_MESSAGE')->on('message');
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
