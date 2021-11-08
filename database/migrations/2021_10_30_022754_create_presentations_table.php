<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('tipo');
            $table->integer('NroFojas')->nullable();
            $table->string('file')->nullable();

            $table->unsignedBigInteger('expediente_id')->nullable();

            $table->timestamps();

            $table->foreign('expediente_id')->references('id')->on('expedientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentations');
    }
}
