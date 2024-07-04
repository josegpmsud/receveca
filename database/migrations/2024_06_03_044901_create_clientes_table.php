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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nac'); //nacionalidad

            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula_rif')->unique();

            $table->string('b_nac')->nullable(true);
            $table->string('b_nombre')->nullable(true);
            $table->string('b_apellido')->nullable(true);
            $table->string('b_cedula')->nullable(true);

            $table->string('direccion');
            $table->string('telefono');

            $table->tinyInteger('estado')->default(1);
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
        Schema::dropIfExists('clientes');
    }
};
