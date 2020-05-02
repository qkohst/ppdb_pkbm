@extends('layouts.master_content')
@section('judul')
    <section class="client_section layout_padding">
      <div class="container">
        <h1 class="text-center text-warning">
            <b>Formulir Pendaftaran</b>
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
        <form action="/pesdik/daftar" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-user-graduate my-1 btn-sm-1"></i> Peserta Didik</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <label for="jenjang_daftar">Jenjang Pendaftaran <b>*</b></label>
                                    <select name="jenjang_daftar" class="form-control my-1 mr-sm-1 bg-light" id="jenjang_daftar"required>
                                        <option value="">-- Pilih Jenjang Pendaftaran --</option>
                                        <option value="Paket A">Paket A (setara SD/MI sederajat)</option>
                                        <option value="Paket B">Paket B (setara SMP/MTs sederajat)</option>
                                        <option value="Paket C">Paket C (setara SMA/SMK sederajat)</option>
                                        <option value="Keaksaraan Fungsional / KF">Keaksaraan Fungsional / KF (bagi Buta Aksara)</option>
                                        <option value="Khursus Komputer">Khursus Komputer</option>
                                    </select>
                                <label for="nama_sekolah_asal">Nama Sekolah Asal <b>*</b></label>
                                    <input value="{{old('nama_sekolah_asal')}}" name="nama_sekolah_asal" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nama_sekolah_asal"
                                    placeholder="Nama Sekolah Asal" required>
                                <label for="alamat_sekolah_asal">Alamat Sekolah Asal <b>*</b></label>
                                    <input value="{{old('alamat_sekolah_asal')}}" name="alamat_sekolah_asal" type="text" class="form-control my-1 mr-sm-1 bg-light" id="alamat_sekolah_asal"
                                    placeholder="Alamat Sekolah Asal" required>
                                <label for="tahun_lulus">Tahun Lulus <b>*</b></label>
                                    <select name="tahun_lulus" class="form-control my-1 mr-sm-1 bg-light" id="tahun_lulus"required>
                                        <option value="">-- Pilih Tahun Lulus --</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                    </select>
                                <label for="nama_lengkap_pesdik">Nama Lengkap Peserta Didik <i>(sesuai ijazah)</i> <b>*</b></label>
                                    <input value="{{old('nama_lengkap_pesdik')}}" name="nama_lengkap_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nama_lengkap_pesdik"
                                    placeholder="Nama Lengkap Peserta Didik" required>
                                <label for="jenis_kelamin_pesdik">Jenis Kelamin <b>*</b></label>
                                    <select name="jenis_kelamin_pesdik" class="form-control my-1 mr-sm-1 bg-light" id="jenis_kelamin_pesdik"required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                <label for="nik_pesdik">Nomor Induk Kependudukan / NIK <i>(sesuai di KTP)</i> <b>*</b></label>
                                    <input value="{{old('nik_pesdik')}}" name="nik_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nik_pesdik"
                                    placeholder="Nomor Induk Kependudukan / NIK" required>
                                <label for="tempat_lahir_pesdik">Tempat Lahir <i>(sesuai di Ijazah/Akta Kelahiran)</i> <b>*</b></label>
                                    <input value="{{old('tempat_lahir_pesdik')}}" name="tempat_lahir_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="tempat_lahir_pesdik"
                                    placeholder="Tempat Lahir" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="tanggal_lahir_pesdik">Tanggal Lahir <i>(sesuai di Ijazah/Akta Kelahiran)</i> <b>*</b></label>
                                    <input value="{{old('tanggal_lahir_pesdik')}}" name="tanggal_lahir_pesdik" type="date" class="form-control my-1 mr-sm-1 bg-light"
                                        id="tanggal_lahir_pesdik" required>
                                <label for="agama_pesdik">Agama <b>*</b></label>
                                    <select name="agama_pesdik" class="form-control my-1 mr-sm-1 bg-light" id="agama_pesdik" required>
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen ">Kristen </option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                <label for="kewarganegaraan_pesdik">Kewarganegaraan <b>*</b></label>
                                    <select name="kewarganegaraan_pesdik" class="form-control my-1 mr-sm-1 bg-light" id="kewarganegaraan_pesdik" required>
                                        <option value="">-- Pilih Kewarganegaraan --</option>
                                        <option value="WNI (Warga Negara Indonesia)">WNI (Warga Negara Indonesia)</option>
                                        <option value="WNA (Warga Negara Asing)">WNA (Warga Negara Asing)</option>
                                    </select>
                                <label for="alamat_pesdik">Alamat <i>(jalan, RT/RW, dusun)</i> <b>*</b></label>
                                    <input value="{{old('alamat_pesdik')}}" name="alamat_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="alamat_pesdik"
                                    placeholder="jalan, RT/RW, dusun" required>
                                <label for="kabupaten_pesdik">Kabupaten/Kota <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('kabupaten_pesdik')}}" name="kabupaten_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="kabupaten_pesdik"
                                    placeholder="Kabupaten/Kota" required>
                                <label for="kecamatan_pesdik">Kecamatan <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('kecamatan_pesdik')}}" name="kecamatan_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="kecamatan_pesdik"
                                    placeholder="Kecamatan" required>
                                <label for="desa_pesdik">Desa/Kelurahan <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('desa_pesdik')}}" name="desa_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="desa_pesdik"
                                    placeholder="Desa/Kelurahan" required>
                                <label for="no_hp_pesdik">Nomor HP Yang Aktif <b>*</b></label>
                                    <input value="{{old('no_hp_pesdik')}}" name="no_hp_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="no_hp_pesdik"
                                    placeholder="Nomor HP Yang Aktif" required>
                            </div>
                       </div>
                    </div>

                </div>   
                <br>

                <!-- Identitas Ayah -->
                <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-male"></i> Identitas Ayah</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <label for="nama_ayah">Nama Lengkap Ayah <i>(sesuai Akta Kelahiran Peserta Didik)</i> <b>*</b></label>
                                    <input value="{{old('nama_ayah')}}" name="nama_ayah" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nama_ayah"
                                    placeholder="Nama Lengkap Ayah" required>
                                <label for="nik_ayah">Nomor Induk Kependudukan Ayah <i>(sesuai Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('nik_ayah')}}" name="nik_ayah" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nik_ayah"
                                    placeholder="Nomor Induk Kependudukan Ayah" required>
                                <label for="tahun_lahir_ayah">Tahun Lahir Ayah <i>(sesuai KTP Ayah)</i><b>*</b></label>
                                    <select name="tahun_lahir_ayah" class="form-control my-1 mr-sm-1 bg-light" id="tahun_lahir_ayah"required>
                                        <option value="">-- Pilih Tahun Lahir Ayah --</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                    </select>
                                <label for="pendidikan_ayah">Pendidikan Terakhir Ayah <b>*</b></label>
                                    <select name="pendidikan_ayah" class="form-control my-1 mr-sm-1 bg-light" id="pendidikan_ayah" required>
                                        <option value="">-- Pilih Pendidikan Ayah --</option>
                                        <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                                        <option value="SD/Sederajat">SD/Sederajat</option>
                                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="pekerjaan_ayah">Pekerjaan Ayah <b>*</b></label>
                                    <select name="pekerjaan_ayah" class="form-control my-1 mr-sm-1 bg-light" id="pekerjaan_ayah" required>
                                        <option value="">-- Pilih Pekerjaan Ayah --</option>
                                        <option value="Petani/Pekebun">Petani/Pekebun</option>
                                        <option value="Nelayan">Nelayan</option>
                                        <option value="Pedagang">Pedagang</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                        <option value="Sopir">Sopir</option>
                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                        <option value="Guru">Guru</option>
                                        <option value="Lainnya....">Lainnya....</option>
                                    </select>
                                <label for="penghasilan_ayah">Penghasilan Ayah Perbulan <b>*</b></label>
                                    <select name="penghasilan_ayah" class="form-control my-1 mr-sm-1 bg-light" id="penghasilan_ayah" required>
                                        <option value="">-- Pilih Data --</option>
                                        <option value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                        <option value="Kurang dari Rp.500.000,-">Kurang dari Rp.500.000,-</option>
                                        <option value="Rp.500.000,- s/d Rp.999.000,-">Rp.500.000,- s/d Rp.999.000,-</option>
                                        <option value="Rp.1.000.000,- s/d Rp.1.999.000,-">Rp.1.000.000,- s/d Rp.1.999.000,-</option>
                                        <option value="Rp.2.000.000,- s/d Rp.2.999.000,-">Rp.2.000.000,- s/d Rp.2.999.000,-</option>
                                        <option value="Lebih dari Rp.3.000.000,-">Lebih dari Rp.3.000.000,-</option>
                                    </select>
                                <label for="keterangan_ayah">Keterangan Ayah <b>*</b></label>
                                    <select name="keterangan_ayah" class="form-control my-1 mr-sm-1 bg-light" id="keterangan_ayah" required>
                                        <option value="">-- Pilih Data --</option>
                                        <option value="Masih Hidup">Masih Hidup</option>
                                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    </select>
                            </div>
                       </div>
                    </div>
                </div>   
                <br>

                <!-- Identitas Ibu -->
                <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-female"></i> Identitas Ibu</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <label for="nama_ibu">Nama Lengkap Ibu <i>(sesuai Akta Kelahiran Peserta Didik)</i> <b>*</b></label>
                                    <input value="{{old('nama_ibu')}}" name="nama_ibu" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nama_ibu"
                                    placeholder="Nama Lengkap Ibu" required>
                                <label for="nik_ibu">Nomor Induk Kependudukan Ibu <i>(sesuai Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('nik_ibu')}}" name="nik_ibu" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nik_ibu"
                                    placeholder="Nomor Induk Kependudukan ibu" required>
                                <label for="tahun_lahir_ibu">Tahun Lahir Ibu <i>(sesuai KTP Ibu)</i><b>*</b></label>
                                    <select name="tahun_lahir_ibu" class="form-control my-1 mr-sm-1 bg-light" id="tahun_lahir_ibu"required>
                                        <option value="">-- Pilih Tahun Lahir Ibu --</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                    </select>
                                <label for="pendidikan_ibu">Pendidikan Terakhir Ibu <b>*</b></label>
                                    <select name="pendidikan_ibu" class="form-control my-1 mr-sm-1 bg-light" id="pendidikan_ibu" required>
                                        <option value="">-- Pilih Pendidikan Ibu --</option>
                                        <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                                        <option value="SD/Sederajat">SD/Sederajat</option>
                                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="pekerjaan_ibu">Pekerjaan Ibu <b>*</b></label>
                                    <select name="pekerjaan_ibu" class="form-control my-1 mr-sm-1 bg-light" id="pekerjaan_ibu" required>
                                        <option value="">-- Pilih Pekerjaan Ibu --</option>
                                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                        <option value="Petani/Pekebun">Petani/Pekebun</option>
                                        <option value="Nelayan">Nelayan</option>
                                        <option value="Pedagang">Pedagang</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                        <option value="Sopir">Sopir</option>
                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                        <option value="Guru">Guru</option>
                                        <option value="Lainnya....">Lainnya....</option>
                                    </select>
                                <label for="penghasilan_ibu">Penghasilan Ibu Perbulan <b>*</b></label>
                                    <select name="penghasilan_ibu" class="form-control my-1 mr-sm-1 bg-light" id="penghasilan_ibu" required>
                                        <option value="">-- Pilih Data --</option>
                                        <option value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                        <option value="Kurang dari Rp.500.000,-">Kurang dari Rp.500.000,-</option>
                                        <option value="Rp.500.000,- s/d Rp.999.000,-">Rp.500.000,- s/d Rp.999.000,-</option>
                                        <option value="Rp.1.000.000,- s/d Rp.1.999.000,-">Rp.1.000.000,- s/d Rp.1.999.000,-</option>
                                        <option value="Rp.2.000.000,- s/d Rp.2.999.000,-">Rp.2.000.000,- s/d Rp.2.999.000,-</option>
                                        <option value="Lebih dari Rp.3.000.000,-">Lebih dari Rp.3.000.000,-</option>
                                    </select>
                                <label for="keterangan_ibu">Keterangan Ibu <b>*</b></label>
                                    <select name="keterangan_ibu" class="form-control my-1 mr-sm-1 bg-light" id="keterangan_ibu" required>
                                        <option value="">-- Pilih Data --</option>
                                        <option value="Masih Hidup">Masih Hidup</option>
                                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    </select>
                            </div>
                       </div>
                    </div>
                    <div class="card-footer p-2">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> DAFTAR</button>
                        <a class="btn btn-danger btn-sm" href="/" role="button"><i class="fas fa-undo"></i> BATAL</a>
                    </div>
                </div>
        </form>
    </section>
@endsection
