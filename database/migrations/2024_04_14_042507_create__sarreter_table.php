<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSarreterTable extends Migration
{
    public function up()
    {
        Schema::create('sarreter', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trajet_id')->constrained()->onDelete('cascade');
            $table->foreignId('arret_id')->constrained()->onDelete('cascade');
            $table->string('ordre', 1000);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sarreter');
    }
}
