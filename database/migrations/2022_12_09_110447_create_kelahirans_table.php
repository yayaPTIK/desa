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
        Schema::create('kelahirans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nomor');
            $table->string('nama');
            $table->string('tempat');
            $table->string('tanggal');
            $table->string('anak');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
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
        Schema::dropIfExists('kelahirans');
    }
};
