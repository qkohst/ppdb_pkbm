@extends('layouts.master_content')
@section('judul')
    <section class="client_section layout_padding">
      <div class="container">
        <h1 class="text-center text-warning">
            <b>Data Peserta Didik Pendaftar</b>
          </h1>
      </div>
    </section>
@endsection

@section('content')
    <section class="bg-transparent" style="padding: 10px 10px 10px 10px ">
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
        <br>
        <div> 
            <a href="/pesdik/export" class="btn btn-success btn-sm my-1 mr-sm-1"><i class="nav-icon fas fa-file-excel"></i> Download Excel</a><br>
        </div>
        <div class="row table-responsive">
                    <table class="table table-head-fixed table-hover" id='calon_pesdik'>
                        <thead>
                            <tr class="bg-light">
                                <th>No.</th>
                                <th>Jenjang Pendaftaran</th>
                                <th>Nama Peserta Didik</th>
                                <th>Jenis Kelamin</th>
                                <th>Tahun Lulus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach($data_pesdik as $pesdik)
                            <?php $no++ ;?>
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$pesdik->jenjang_daftar}}</td>
                                <td>{{$pesdik->nama_lengkap_pesdik}}</td>
                                <td>{{$pesdik->jenis_kelamin_pesdik}}</td>
                                <td>{{$pesdik->tahun_lulus}}</td>
                                <td>
                                <a href="/pesdik/{{$pesdik->id}}/detail"
                                    class="btn btn-primary btn-sm my-1 mr-sm-1"><i class="nav-icon fas fa-eye"></i> Lihat Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>

    </section>
@endsection
