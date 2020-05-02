<?php

namespace App\Http\Controllers;
use App\Pesdik;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\PesdikExport;
use Maatwebsite\Excel\Facades\Excel;

class PesdikController extends Controller
{
    public function form_daftar()
    {
        return view('pesdik.form_daftar');
    }
    
    public function lihat_pendaftar()
    {
        $data_pesdik = \App\Pesdik::all();
        return view('pesdik.lihat_pendaftar', compact('data_pesdik'));
    }

    public function alur_pendaftaran()
    {
        return view('pesdik.alur_pendaftaran');
    }

    public function daftar (Request $request)
    {
        $request->validate([
            'nama_sekolah_asal'     => 'min:5',
            'alamat_sekolah_asal'   => 'min:5',

            'nama_lengkap_pesdik'   => 'min:5',
            'nik_pesdik'            => 'min:16|numeric',
            'tempat_lahir_pesdik'   => 'min:3',
            'alamat_pesdik'         => 'min:3',
            'kabupaten_pesdik'      => 'min:3',
            'kecamatan_pesdik'      => 'min:3',
            'desa_pesdik'           => 'min:3',
            'no_hp_pesdik'          => 'min:11|numeric',

            'nama_ayah'             => 'min:5',
            'nik_ayah'              => 'min:16|numeric',

            'nama_ibu'             => 'min:5',
            'nik_ibu'              => 'min:16|numeric',

        ]);
        $pesdik = new Pesdik();
        $pesdik->jenjang_daftar             = $request->input('jenjang_daftar');
        $pesdik->nama_sekolah_asal          = $request->input('nama_sekolah_asal');
        $pesdik->alamat_sekolah_asal        = $request->input('alamat_sekolah_asal');
        $pesdik->tahun_lulus                = $request->input('tahun_lulus');

        $pesdik->nama_lengkap_pesdik        = $request->input('nama_lengkap_pesdik');
        $pesdik->jenis_kelamin_pesdik       = $request->input('jenis_kelamin_pesdik');
        $pesdik->nik_pesdik                 = $request->input('nik_pesdik');
        $pesdik->tempat_lahir_pesdik        = $request->input('tempat_lahir_pesdik');
        $pesdik->tanggal_lahir_pesdik       = $request->input('tanggal_lahir_pesdik');
        $pesdik->agama_pesdik               = $request->input('agama_pesdik');
        $pesdik->kewarganegaraan_pesdik     = $request->input('kewarganegaraan_pesdik');
        $pesdik->alamat_pesdik              = $request->input('alamat_pesdik');
        $pesdik->kabupaten_pesdik           = $request->input('kabupaten_pesdik');
        $pesdik->kecamatan_pesdik           = $request->input('kecamatan_pesdik');
        $pesdik->desa_pesdik                = $request->input('desa_pesdik');
        $pesdik->no_hp_pesdik               = $request->input('no_hp_pesdik');

        $pesdik->nama_ayah                  = $request->input('nama_ayah');
        $pesdik->nik_ayah                   = $request->input('nik_ayah');
        $pesdik->tahun_lahir_ayah           = $request->input('tahun_lahir_ayah');
        $pesdik->pendidikan_ayah            = $request->input('pendidikan_ayah');
        $pesdik->pekerjaan_ayah             = $request->input('pekerjaan_ayah');
        $pesdik->penghasilan_ayah           = $request->input('penghasilan_ayah');
        $pesdik->keterangan_ayah            = $request->input('keterangan_ayah');

        $pesdik->nama_ibu                  = $request->input('nama_ibu');
        $pesdik->nik_ibu                   = $request->input('nik_ibu');
        $pesdik->tahun_lahir_ibu           = $request->input('tahun_lahir_ibu');
        $pesdik->pendidikan_ibu            = $request->input('pendidikan_ibu');
        $pesdik->pekerjaan_ibu             = $request->input('pekerjaan_ibu');
        $pesdik->penghasilan_ibu           = $request->input('penghasilan_ibu');
        $pesdik->keterangan_ibu            = $request->input('keterangan_ibu');
      
        $pesdik->save();

        return view('/pesdik/detail', compact('pesdik'));

    }

    public function detail($id_pesdik)
    {
        $pesdik = \App\Pesdik::find($id_pesdik);
        return view('/pesdik/detail', compact('pesdik'));
    }

    public function cetak_biodata($id_pesdik)
    {
        $pesdik = \App\Pesdik::find($id_pesdik);
        return view('/pesdik/cetak_biodata', compact('pesdik'));
    }

    public function export() 
    {
        return Excel::download(new PesdikExport, 'PPDB_Online_NurulJadid.xlsx');
    }
}
