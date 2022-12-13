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
        Schema::create('sktms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nomor');
            $table->string('nama');
            $table->string('ttl');
            $table->string('jk');
            $table->string('namaOrtu');
            $table->string('alamatOrtu');
            $table->boolean('status');
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
        Schema::dropIfExists('sktms');
    }
};
