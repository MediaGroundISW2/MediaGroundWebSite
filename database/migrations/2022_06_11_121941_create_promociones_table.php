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
        Schema::create('promociones', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->date('f_inicio');
            $table->date('f_fin');
            $table->double('descuento',10,4);
            $table->string('portada');
            $table->bigInteger('contenido_id')->unsigned();
            $table->timestamps();

            $table->foreign('contenido_id')->references('id')->on('contenidos')->onDelete("cascade");
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promociãons');
    }
};
