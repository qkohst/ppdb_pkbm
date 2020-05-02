@extends('layouts.master_content')
@section('judul')
    <section class="client_section layout_padding">
      <div class="container">
        <h1 class="text-center text-warning">
            <b>Detail Calon Peserta Didik</b> 
        </h1>
        <h5 class="text-center text-warning">
          Data telah terdaftar, Silahkan konfirmasi pendaftaran ke nomor WA : <br>
          H. Suwardi : 0813-3024-9901 / Kukoh Santoso : 0852-3207-7932
        </h5>
      </div>
    </section>
@endsection

@section('content')
    <section class="bg-transparent" style="padding: 10px 10px 10px 10px ">
       
        <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
        {{csrf_field()}}
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/template/images/user.png"
                       alt="User profile picture" width="100">
                </div>

                <h3 class="profile-username text-center">{{$pesdik->nama_lengkap_pesdik}}</h3>

                <p class="text-muted text-center">{{$pesdik->jenjang_daftar}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    TTL <a class="float-right">{{$pesdik->tempat_lahir_pesdik}}, {{$pesdik->tanggal_lahir_pesdik}}</a>
                  </li>
                  <li class="list-group-item">
                    Jenis Kelamin <a class="float-right">{{$pesdik->jenis_kelamin_pesdik}}</a>
                  </li>
                  <li class="list-group-item">
                    No. HP <a class="float-right">{{$pesdik->no_hp_pesdik}}</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Peserta Didik</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Data Ayah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Data Ibu</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama_lengkap" value="{{$pesdik->nama_lengkap_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_panggilan" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama_panggilan" value="{{$pesdik->nik_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat, Tgl Lahir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="ttl" value="{{$pesdik->tempat_lahir_pesdik}}, {{$pesdik->tanggal_lahir_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="jenis_kelamin" value="{{$pesdik->jenis_kelamin_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="berat" class="col-sm-2 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="berat" value="{{$pesdik->nama_sekolah_asal}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="golongan_darah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="golongan_darah" value="{{$pesdik->alamat_sekolah_asal}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penyakit_pernah_derita" class="col-sm-2 col-form-label">Tahun Lulus</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="penyakit_pernah_derita" value="{{$pesdik->tahun_lulus}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="agama" value="{{$pesdik->agama_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="kewarganegaraan" value="{{$pesdik->kewarganegaraan_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="asal_tkra" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="asal_tkra" value="{{$pesdik->alamat_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_tkra" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="alamat_tkra" value="{{$pesdik->desa_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sttb" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="sttb" value="{{$pesdik->kecamatan_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kesulitan_di_tkra" class="col-sm-2 col-form-label">Kabupaten</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="kesulitan_di_tkra" value="{{$pesdik->kabupaten_pesdik}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bakat_minat_anak" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="bakat_minat_anak" value="{{$pesdik->no_hp_pesdik}}" readonly>
                        </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <div class="form-group row">
                        <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama_ayah" value="{{$pesdik->nama_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="ttl" value="{{$pesdik->nik_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama_ayah" class="col-sm-2 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="agama_ayah" value="{{$pesdik->tahun_lahir_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kewarganegaraan_ayah" class="col-sm-2 col-form-label">Pedidikan Terakhir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="kewarganegaraan_ayah" value="{{$pesdik->pendidikan_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="pekerjaan_ayah" value="{{$pesdik->pekerjaan_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penghasilan_ayah" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="penghasilan_ayah" value="{{$pesdik->penghasilan_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_ayah" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="alamat_ayah" value="{{$pesdik->keterangan_ayah}}" readonly>
                        </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <div class="form-group row">
                        <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama_ibu" value="{{$pesdik->nama_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="ttl" value="{{$pesdik->nik_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama_ibu" class="col-sm-2 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="agama_ibu" value="{{$pesdik->tahun_lahir_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pendidikan_ibu" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="pendidikan_ibu" value="{{$pesdik->pendidikan_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="pekerjaan_ibu" value="{{$pesdik->pekerjaan_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penghasilan_ibu" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="penghasilan_ibu" value="{{$pesdik->penghasilan_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_ibu" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="alamat_ibu" value="{{$pesdik->keterangan_ibu}}" readonly>
                        </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>

    </section>
@endsection
