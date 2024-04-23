<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajet', function (Blueprint $table) {
            $table->string('ID_TRAJET', 100)->primary();
            $table->string('NOM_TRAJET', 100)->nullable();
            // Ajoutez d'autres colonnes si nécessaire
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
        Schema::dropIfExists('trajet');
    }
}
