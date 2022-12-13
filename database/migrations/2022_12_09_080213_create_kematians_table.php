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
        Schema::create('kematians', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nama2');
            $table->string('tempat');
            $table->string('tanggal');
            $table->string('agama2');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_ktp');
            $table->string('Hari');
            $table->string('tanggal_meninggal');
            $table->string('tempat_meninggal');
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
        Schema::dropIfExists('kematians');
    }
};
