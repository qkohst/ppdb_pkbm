@extends('layouts.master_content')
@section('judul')
    <section class="client_section layout_padding">
      <div class="container">
        <h1 class="text-center text-warning">
            <b>Alur Pendaftaran Online</b>
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
        <section class="content card" style="padding: 10px 10px 20px 20px  ">
        <div class="box">
            <div class="section-top-border">
				<h3 class="mb-30">Tata Cara Pendaftaran Online Peserta Didik Baru</h3>
				<div class="row">
					<div class="col-lg-12">
                        <p class="lead  my-1 mr-sm-1">1. Siapkan Berkas Untuk Mengisi Formulir</p>
						<blockquote class="generic-blockquote">
                            <ol class="my-1 mr-sm-1">a. Akta Kelahiran</ol>
                            <ol class="my-1 mr-sm-1">b. KTP</ol>
                            <ol class="my-1 mr-sm-1">c. Kartu Keluarga </ol>
                            <ol class="my-1 mr-sm-1">d. KTP Ayah dan Ibu </ol>
                            <ol class="my-1 mr-sm-1">e. Ijazah</ol>
						</blockquote>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
                        <p class="lead  my-1 mr-sm-1">2. Mengisi Formulir Pendaftaran Online</p>
						<blockquote class="generic-blockquote">
                        <ol class="my-1 mr-sm-1">Silahkan buka formulir pendaftaran melalui menu <a href="/pesdik/form_daftar"><b>daftar</b></a>, dan isikan identitas sesuai dengan berkas yang telah anda siapkan pada poin 1, kemudian klik tombol Daftar.</ol>
						</blockquote>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
                        <p class="lead  my-1 mr-sm-1">3. Konfirmasi Pendaftaran</p>
						<blockquote class="generic-blockquote">
                            <ol class="my-1 mr-sm-1">Setelah melakukan pengisian Formulir secara online, harap melakukan konfirmasi pendaftaran ke nomor : </ol>
                            <ol class="my-1 mr-sm-1">a. H. Suwardi : 0813-3024-9901</ol>
                            <ol class="my-1 mr-sm-1">b. Kukoh Santoso : 0852-3207-7932</ol>
						</blockquote>
					</div>
				</div>
			</div>  
        </div>
    </section>



    </section>
@endsection
