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
        Schema::create('disks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->foreignId('computer_id')->nullable();
            $table->foreignId('notebook_id')->nullable();
            $table->string('serial');
            $table->integer('capacidad');
            $table->string('unidad');
            $table->string('modelo');
            $table->integer('tipo_memoria');//0 pc 1 laptop
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
        Schema::dropIfExists('disks');
    }
};
