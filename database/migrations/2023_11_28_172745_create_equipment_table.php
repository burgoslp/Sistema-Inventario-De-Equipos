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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('computer_id');
            $table->foreignId('notebook_id');
            $table->foreignId('monitor_id');
            $table->foreignId('keyboard_id');
            $table->foreignId('mouse_id');
            $table->foreignId('statu_id');
            $table->string('cod_oficina');
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
        Schema::dropIfExists('equipment');
    }
};
