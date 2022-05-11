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
        Schema::create('tb_proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('nit')->nullable(false);
            $table->string('correo')->nullable(false);
            $table->string('insumo')->nullable(false);
            $table->string('telefono')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_proveedores');
    }
};
