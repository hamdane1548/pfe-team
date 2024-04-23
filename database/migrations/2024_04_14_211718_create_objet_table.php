<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetTable extends Migration
{
    public function up()
    {
        Schema::create('objet', function (Blueprint $table) {
            $table->string('ID_OBJET', 100)->primary();
            $table->string('LIBELLE', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('objet');
    }
}