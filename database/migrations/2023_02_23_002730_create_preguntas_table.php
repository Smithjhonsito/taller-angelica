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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta1');
            $table->string('pregunta2');
            $table->string('pregunta3');
            $table->string('pregunta4');
            $table->string('pregunta5');
            $table->string('pregunta6');
            $table->string('pregunta7');
            $table->string('pregunta8');
            $table->string('pregunta9');
            $table->string('pregunta10');
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
        Schema::dropIfExists('preguntas');
    }
};
