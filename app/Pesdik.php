<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesdik extends Model
{
    protected $table = 'pesdik';
    protected $fillable = [
                            'jenjang_daftar','nama_sekolah_asal','alamat_sekolah_asal','tahun_lulus',
                            'nama_lengkap_pesdik','jenis_kelamin_pesdik','nik_pesdik','tempat_lahir_pesdik','tanggal_lahir_pesdik','agama_pesdik','kewarganegaraan_pesdik','alamat_pesdik','kabupaten_pesdik','kecamatan_pesdik','desa_pesdik','no_hp_pesdik',
                            'nama_ayah','nik_ayah','tahun_lahir_ayah','pendidikan_ayah','pekerjaan_ayah','penghasilan_ayah','keterangan_ayah',
                            'nama_ibu','nik_ibu','tahun_lahir_ibu','pendidikan_ibu','pekerjaan_ibu','penghasilan_ibu','keterangan_ibu'
                            ];
}
