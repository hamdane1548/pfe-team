<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rec_parent', function (Blueprint $table) {
            $table->string('ID_RECLAMATION');
            $table->char('ID_REC_PARENT', 10);
            $table->string('ID_OBJET');
            $table->integer('ANNEE_SCOLAIRE');
            $table->string('CIN')->nullable();
            $table->string('ID_PARENT');
            $table->string('ID_ELEVE');
            $table->string('CONTENUE', 100)->nullable();
            $table->date('DATE_RECLAMATION')->nullable();

            // Foreign keys
            $table->foreign(['ID_RECLAMATION'])->references('ID_RECLAMATION')->on('reclamation')->onDelete('cascade');
            $table->foreign(['ID_OBJET'])->references('ID_OBJET')->on('objet')->onDelete('cascade');
            $table->foreign(['CIN', 'ID_PARENT'])->references(['CIN', 'ID_PARENT'])->on('parent')->onDelete('cascade');
            $table->foreign(['ID_ELEVE'])->references('ID_ELEVE')->on('eleve')->onDelete('cascade');

            $table->primary(['ID_RECLAMATION', 'ID_REC_PARENT']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rec_parent');
    }
}
