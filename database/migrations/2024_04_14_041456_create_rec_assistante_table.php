<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecAssistanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rec_assistante', function (Blueprint $table) {
            $table->string('ID_RECLAMATION', 100);
            $table->char('ID_REC_ASSISTANTE', 10);
            $table->string('ID_OBJET', 100);
            $table->integer('ANNEE_SCOLAIRE');
            $table->string('ID_PARENT', 100);
            $table->string('ID_ELEVE', 100);
            $table->string('CONTENUE', 100)->nullable();
            $table->date('DATE_RECLAMATION')->nullable();
            $table->string('REC_CIN', 100);
            $table->string('CIN', 100);
            $table->string('ID_ASSISTANTE', 100);
            
            $table->primary(['ID_RECLAMATION', 'ID_REC_ASSISTANTE']);
            $table->foreign(['ID_RECLAMATION'])->references('ID_RECLAMATION')->on('reclamation')->onDelete('cascade');
            $table->foreign(['CIN', 'ID_ASSISTANTE'])->references(['CIN', 'ID_ASSISTANTE'])->on('assistante')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rec_assistante');
    }
}
