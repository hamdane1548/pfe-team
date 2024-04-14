<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistanteTable extends Migration
{
    public function up()
    {
        Schema::create('assistante', function (Blueprint $table) {
            $table->string('CIN', 100)->primary();
            $table->string('ID_ASSISTANTE', 100);
            $table->string('ID_ROLE', 100)->nullable();
            $table->string('NOM', 100)->nullable();
            $table->string('PRENOM', 100)->nullable();
            $table->string('TELEPHONE', 100)->nullable();
            $table->string('EMAIL', 100)->nullable();
            $table->string('MDP', 100)->nullable();
            $table->date('DATE_DEBUT')->nullable();
            $table->foreign('CIN')->references('CIN')->on('personne')->onDelete('cascade');

            $table->foreign('ID_ROLE')->references('ID_ROLE')->on('role')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('assistante');
    }
}
