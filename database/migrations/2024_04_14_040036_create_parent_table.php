<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentTable extends Migration
{
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->string('CIN', 100)->primary();
            $table->string('ID_PARENT', 100);
            $table->string('ID_ROLE', 100);
            $table->string('NOM', 100)->nullable();
            $table->string('PRENOM', 100)->nullable();
            $table->string('TELEPHONE', 100)->nullable();
            $table->string('EMAIL', 100)->nullable();
            $table->string('MDP', 100)->nullable();
            $table->date('DATE_DEBUT')->nullable();
            $table->timestamps();
        });

        Schema::table('parents', function (Blueprint $table) {
            $table->foreign('CIN')->references('CIN')->on('personne');
            // Assurez-vous que 'personne' est la bonne table de référence
        });
    }

    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
