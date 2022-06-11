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
        Schema::create('contenidos', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->string('nombre_contenido');
            $table->string('tipo');
            $table->string('descripcion');
            $table->string('formato');
            $table->double('precio',10,4);
            $table->string('contenido');

            $table->bigInteger('autor_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();


            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autors')->onDelete("cascade");
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenidos');
    }
};
