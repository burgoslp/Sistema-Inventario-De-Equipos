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
        Schema::create('keyboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('statu_id');
            $table->foreignId('brand_id');
            $table->foreignId('connector_id');
            $table->foreignId('keyboard_model_id');
            $table->foreignId('keyboard_size_id');
            $table->text('observation');
            $table->string('serial');
            $table->string('image');
            $table->string('qrcode');
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
        Schema::dropIfExists('keyboards');
    }
};
