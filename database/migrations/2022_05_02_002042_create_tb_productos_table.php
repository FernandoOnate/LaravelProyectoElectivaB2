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
        Schema::create('tb_productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->decimal('precio',8,2)->nullable(false);
            $table->string('categoria')->nullable(false);
            $table->string('descripcion')->nullable(false);
            $table->integer('stock')->default(0);
            $table->string('imagen')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_productos');
    }
};
