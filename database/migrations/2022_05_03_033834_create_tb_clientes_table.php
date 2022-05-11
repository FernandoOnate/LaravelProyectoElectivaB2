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
        Schema::create('tb_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50)->nullable(false);
            $table->string('apellidos',50)->nullable(false);
            $table->string('telefono',11)->nullable(false);
            $table->string('correo',70)->nullable(false);
            $table->string('codigo',11)->nullable(false);
            $table->string('clave',100)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_clientes');
    }
};
