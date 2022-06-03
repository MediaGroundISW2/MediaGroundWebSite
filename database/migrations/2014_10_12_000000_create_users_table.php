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
        Schema::create('users', function (Blueprint $table) {
            /* ID */
            $table->id();
            /* Personal Information */
            $table->string('nombre',20);
            $table->string('apellido_paterno',20);
            $table->string('apellido_materno',20);
            $table->string('DNI',8)->unique();
            $table->string('email')->unique();
            $table->string('nombre_usuario',20)->unique();
            $table->string('password');
            /* Internal Information */
            $table->timestamp('email_verified_at')->nullable();
            $table->double('saldo',10,4)->nullable();;
            $table->string('foto_perfil')->nullable();
            /* Aditional MT */
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
