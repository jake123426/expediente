<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->string('NroExpediente');
            $table->string('proceso');
            $table->string('tribunal');

            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->unsignedBigInteger('materia_id')->nullable();
            $table->unsignedBigInteger('despacho_id')->nullable();

            $table->timestamps();

            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('set null');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('set null');
            $table->foreign('despacho_id')->references('id')->on('despachos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
}
