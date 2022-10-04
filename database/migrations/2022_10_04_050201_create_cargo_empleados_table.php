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
        Schema::create('cargo_empleados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable()->foreign('users_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('cargo_id')->nullable()->foreign('cargo_id')->references('id')->on('cargos')->onDelete('set null');
            $table->timestamp('fecha_ini')->nullable();
            $table->timestamp('fecha_fin')->nullable();
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
        Schema::dropIfExists('cargo_empleados');
    }
};
