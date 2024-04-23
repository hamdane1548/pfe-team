<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArretTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arret', function (Blueprint $table) {
            $table->string('ID_ARRET', 100)->primary();
            $table->string('NOM_ARRET', 100)->nullable();
            $table->string('POINT_ARRET', 125)->nullable();
            $table->string('LOCALISATION', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arret');
    }
}
