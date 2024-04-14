<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentTable extends Migration
{
    public function up()
    {
        Schema::create('parent', function (Blueprint $table) {
            $table->string('CIN', 100)->primary();
            $table->string('ID_PARENT', 100)->primary();
            $table->string('ID_ROLE', 100);
            $table->string('NOM', 100)->nullable();
            $table->string('PRENOM', 100)->nullable();
            $table->string('TELEPHONE', 100)->nullable();
            $table->string('EMAIL', 100)->nullable();
            $table->string('MDP', 100)->nullable();
            $table->date('DATE_DEBUT')->nullable();
            
            // Foreign key constraints
            $table->foreign('CIN')->references('CIN')->on('personne')->onDelete('cascade');
            $table->foreign('ID_ROLE')->references('ID_ROLE')->on('role')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('parent');
    }
}
