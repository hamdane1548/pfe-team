<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeTable extends Migration
{
    public function up()
    {
        Schema::create('type', function (Blueprint $table) {
            $table->string('ID_TYPEP', 100)->primary();
            $table->string('NOM', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type');
    }
}
