@extends('layouts.master')
@section('header')
<section class="client_section">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Selamat Datang Di<br>
            Website PPDB Online
          </h3>
          <h1>
            PKBM Nurul Jadid
          </h1>
          <p>
            PKBM Nurul Jadid Tambakboyo menyelenggarakan pendidikan kesetaraan paket A/B/C, Pendidikan Keaksaraan Fungsional/KF (bagi Buta Aksara) & Kursus Komputer <br>
            Daftarkan diri anda sekarang juga.
          </p>
          <div class="hero_btn-continer">
            <a href="" class="call_to-btn btn_white-border">
              <span>
                Daftar Sekarang
              </span>
              <!-- <img src="/template/images/right-arrow.png" alt=""> -->
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="/template/images/unnamed.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

@endsection

@section('content')
 
    <!-- about section -->
    <section class="client_section layout_padding">
        <div class="container">
        <h2 class="main-heading ">
            Tentang Lembaga
        </h2>
        <p class="text-center">
            PKBM Nurul Jadid Tambakboyo merupakan embaga swadaya masyarakat (LSM) yang bergerak dalam bidang pendidikan yang berada dibawah naungan Yayasan Pondok Pesantren Fathimiyyah, dan telah terdaftar di Dinas Pendidikan Kabupaten Tuban.<br>
            Yang mana di PKBM Nurul Jadid menyelenggarakan program-program pendidikan diantaranya : <br>
            1. Pendidikan Kesetaraan Paket A, B, dan C. <br>
            2. Pendidikan Keaksaraan Fungsional/KF (bagi Buta Aksara) <br>
            3. Kursus Komputer <br>
            4. Dll.
        </p>
        <div class="about_img-box ">
            <img src="/template/images/npsn.jpg" alt="" class="img-fluid w-100">
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="/template/images/npsn.jpg" target="_blank" class="call_to-btn  ">

            <span>
                Lihat Detail 
            </span>
            <img src="/template/images/right-arrow.png" alt="">
            </a>
        </div>
        </div>
    </section>

@endsection