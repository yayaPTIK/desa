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
        Schema::create('k_t_p_s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('noKK');
            $table->string('nik');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('provinsi');
            $table->string('pendidikan');
            $table->string('status_kawin');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('negara');
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
        Schema::dropIfExists('k_t_p_s');
    }
};
