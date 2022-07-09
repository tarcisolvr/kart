<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('running', function (Blueprint $table) {
            $table->id('id_corrida');
            $table->string('nome_corrida');
            $table->date('data');
            $table->string('hora_inicio');
            $table->string('hora_fim');
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
        Schema::dropIfExists('running');
    }
};
