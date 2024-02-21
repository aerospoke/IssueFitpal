<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre de la clase
            $table->text('descripcion')->nullable(); // Descripción opcional de la clase
            $table->dateTime('hora_inicio'); // Hora de inicio de la clase
            $table->dateTime('hora_fin'); // Hora de finalización de la clase
            // Puedes agregar más columnas según tus necesidades
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
        Schema::dropIfExists('clases');
    }
}
