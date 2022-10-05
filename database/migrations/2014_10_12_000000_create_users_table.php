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
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            //Cliente
            $table->string('tipo_C',1)->nullable();
            $table->string('NIT')->nullable()->unique();
            //Empleado
            $table->string('ci')->nullable()-> unique();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('fecha_n')->nullable();
            $table->string('sexo',1)->nullable();
            $table->float('salario')->nullable();
            $table->string('T_E',1)->nullable(); //puede ser empleado
            $table->string('T_C',1)->nullable(); //puede ser Cliente
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
