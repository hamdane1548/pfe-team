<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepondreTable extends Migration
{
    public function up()
    {
        Schema::create('repondre', function (Blueprint $table) {
            $table->string('ID_RECLAMATION', 100);
            $table->char('ID_REC_PARENT', 10);
            $table->string('CIN', 100);
            $table->string('ID_GERANT', 100);
            $table->date('DATE_REPONSE')->nullable();
            $table->string('REPONSE', 2000)->nullable();
            
            // Primary key
            $table->primary(['ID_RECLAMATION', 'ID_REC_PARENT', 'CIN', 'ID_GERANT']);
            
            // Foreign keys
            $table->foreign(['CIN', 'ID_GERANT'])->references(['CIN', 'ID_GERANT'])->on('gerant')->onDelete('cascade');
            $table->foreign(['ID_RECLAMATION', 'ID_REC_PARENT'])->references(['ID_RECLAMATION', 'ID_REC_PARENT'])->on('rec_parent')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('repondre');
    }
}
