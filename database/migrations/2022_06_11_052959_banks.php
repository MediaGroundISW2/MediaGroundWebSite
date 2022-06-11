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
        //
        Schema::create('banks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('numero_tarjeta',19)->unique();
            $table->string('nombre_propietario',20);
            $table->date('fecha_expiracion');
            $table->integer('CVV')->unique();
            $table->double('saldo',10,4)->nullable();
            
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
        //
    }
};
