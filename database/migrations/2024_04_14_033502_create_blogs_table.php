<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('ID_BLOGS')->primary(); // Rend ID_BLOGS comme clé primaire
            $table->string('IMAGE', 2000)->nullable();
            $table->string('TITRE', 100)->nullable();
            $table->mediumText('DESCRIPTION')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
