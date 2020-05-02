<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesdikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesdik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenjang_daftar');
            $table->string('nama_sekolah_asal');
            $table->text('alamat_sekolah_asal');
            $table->string('tahun_lulus');

            $table->string('nama_lengkap_pesdik');
            $table->string('jenis_kelamin_pesdik');
            $table->string('nik_pesdik');
            $table->string('tempat_lahir_pesdik');
            $table->date('tanggal_lahir_pesdik');
            $table->string('agama_pesdik');
            $table->string('kewarganegaraan_pesdik');
            $table->text('alamat_pesdik');
            $table->string('kabupaten_pesdik');
            $table->string('kecamatan_pesdik');
            $table->string('desa_pesdik');
            $table->string('no_hp_pesdik');

            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('tahun_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('keterangan_ayah');

            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('tahun_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('keterangan_ibu');

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
        Schema::dropIfExists('pesdik');
    }
}
