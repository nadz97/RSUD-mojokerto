{{-- Extends layout --}}
@extends('layout.default')

@push('css')
	<link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
@endpush

{{-- Content --}}
@section('content')

    <style>
        select {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        p {
            font-weight: 600;
        }

        select::-ms-expand {
            display: none !important;
        }
        .step{
            display: inline-block;
            height: 60px;
            width: 60px;
            background: #450B5A;
            color: white;
            border-radius: 50%;
            line-height: 60px;
            text-align: center;
            margin: 0;
            opacity: 0.25;
            font-size: 1.2rem;
        }
        .line{
            height: 2px;
            width: 40px;
            background-color: #bbb;
            text-align: center;

            margin: 28px 0px;
            padding: 0px;
            }

        .rtl {
            direction: rtl;
        }

        #table1 {
            border-collapse:separate;
            border-spacing: 0 1.4em;
        }
    </style>

    <div class="d-flex justify-content-center">
        <span class="step" id="step-1">1</span>
        <span class="line"></span>
        <span class="step" id="step-2">2</span>
        <span class="line"></span>
        <span class="step" id="step-3">3</span>
        <span class="clear"></span>

    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body" id="cardBody">
                {{-- start tab-1 --}}
                <div class="tab" id="tab-1">
                    <div class="row text-center">
                        <h3>PENGKAJIAN BIDAN</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Tiba di rungan</p>
                        </div>
                        <div class="col">
                            <input type="datetime-local" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Sumber dana</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Rujukan</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Nama Keluarga</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Alamat</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Telepon</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Transportasi waktu datang</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Keluhan Utama</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <h5>A. Riwayat Kesehatan</h5>
                    </div>
                    <div class="row mt-2">

                        {{-- <div class="col">
                            <form id="radioform">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" id="radiono" checked>Penyakit utama
                                </label>
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optradio" id="operasi">operasi
                                </label>
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optradio" id="cedera">Cedera mayor
                                </label>
                            </form>
                        </div> --}}
                        <div class="input-group">
                            <div class="col-md-3">
                                <p>Riwayat Pasien</p>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" id="radiono" checked>Penyakit utama
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optradio" id="operasi">operasi
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optradio" id="cedera">Cedera mayor
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col">
                            <input class="form-control" type="text" list="opsi" id="riwayat_pasien" placeholder="Riwayat pasien"/>
                                <datalist id="opsi">
                                    <option>Hipertensi</option>
                                    <option>PPOK</option>
                                    <option>Diabetes</option>
                                    <option>Kanker</option>
                                    <option>Asma</option>
                                    <option>Infark Miokard</option>
                                    <option>Hepatitis</option>
                                    <option>Kejang</option>
                                    <option>Stroke</option>
                                    <option>TB</option>
                                    <option>Jantung</option>
                                    <option>Ulkus</option>
                                    <option>Penyakit Ginjam</option>
                                    <option>Gangguan Jiwa</option>
                                    <option>Penyakit Paru Lainnya</option>
                                    <option>Lainnya</option>
                                </datalist>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Riwayat Alergi</p>
                        </div>
                        <div class="col">
                            <form id="radioform">
                                <label class="radio-inline">
                                    <input type="radio" name="optalergi" id="radiotidak" checked>Tidak
                                </label>
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optalergi" id="sebutkan">Ya, sebutkan
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Riwayat Pengobatan</p>
                        </div>
                        <div class="col">
                            <form id="radioform">
                                <label class="radio-inline">
                                    <input type="radio" name="optpengobatan" id="radiotidakada" checked>Tidak ada
                                </label>
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" id="sebutkan">Ada, sebutkan
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Riwayat keluarga</p>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" list="opsikeluarga" id="riwayat_keluarga" placeholder="Riwayat keluarga"/>
                                <datalist id="opsikeluarga">
                                    <option>Penyakit Jantung</option>
                                    <option>Hipertensi</option>
                                    <option>Stroke</option>
                                    <option>Asma</option>
                                    <option>Gangguan Jiwa</option>
                                    <option>Ginjal</option>
                                    <option>TB</option>
                                    <option>Kanker</option>
                                    <option>StGangguan Hematologiroke</option>
                                    <option>Anastesi</option>
                                    <option>Kejang</option>
                                    <option>Diabetes</option>
                                    <option>Tidak ada</option>
                                    <option>Lainnya</option>
                                </datalist>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="row mt-4">
                            <h5>B. Status Sosial, Ekonomi, Spiritual Suku / Budaya, Nilai Kepercayaan</h5>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-floating">
                                    <input class="form-control" type="text" list="opsipekerjaan" id="pekerjaanbox" placeholder="Pekerjaan"/>
                                    <datalist id="opsipekerjaan">
                                        <option>PNS/TNI/POLRI</option>
                                        <option>Swasta</option>
                                        <option>Pensiun</option>
                                    </datalist>
                                    <label style="font-size:14px;" for="combobox1">Pekerjaan</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input class="form-control" type="text" list="opsi2" id="combobox2" placeholder="Pendidikan"/>
                                    <datalist id="opsi2">
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                        <option>Akademi/PT</option>
                                        <option>Pasca Sarjana</option>
                                    </datalist>
                                    <label for="combobox2">Pendidikan</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input class="form-control" type="text" list="opsi3" id="combobox3" placeholder="Spiritual (Agama)"/>
                                    <datalist id="opsi3">
                                        <option>Islam</option>
                                        <option>Protestan</option>
                                        <option>Katholik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                    </datalist>
                                    <label for="combobox3">Spiritual (Agama)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sukubudaya" placeholder="Suku/Budaya">
                                    <label for="sukubudaya">Suku/Budaya</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input class="form-control" type="text" list="opsikeper" id="kepercayaan" placeholder="Nilai nilai kepercayaan"/>
                                    <datalist id="opsikeper">
                                        <option>Tidak</option>
                                        <option>Ada</option>
                                    </datalist>
                                    <label style="font-size:14px;" for="kepercayaan">Nilai nilai kepercayaan</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input class="form-control" type="text" list="opsilogis" id="psikologis" placeholder="Status Psikologis"/>
                                    <datalist id="opsilogis">
                                        <option>Tenang</option>
                                        <option>Cemas</option>
                                        <option>Sedih</option>
                                        <option>Depresi</option>
                                        <option>Marah</option>
                                        <option>Hiperaktif</option>
                                        <option>Mengganggu sekitar</option>
                                        <option>Lain-lain</option>
                                    </datalist>
                                    <label for="psikologis">Status Psikologis</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <select class="form-control" id="test" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Janda / Duda">Janda / Duda</option>
                                  </select>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button id="btn-tab-1" type="button" class="btn btn-primary ">Next</button>
                        </div>
                    </div>
                </div>
                {{-- end tab-1 --}}

                {{-- start tab-2 --}}
                <div class="tab" id="tab-2">
                    <div class="row text-center">
                        <h3>PEMERIKSAAN FUNGSIONAL DAN OBSTETRI - GINEKOLOGI</h3>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Keluhan utama</p>
                        </div>
                        <div class="col input-group mb-3">
                            <input type="text" class="form-control" placeholder="Menarche umur" aria-label="Menarche umur" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">thn</span>
                            </div>
                        </div>
                        <div class="col input-group mb-3">
                            <input type="text" class="form-control" placeholder="Siklus" aria-label="Siklus" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">hari</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" id="radiono" >Teratur
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" id="radiono" >Tidak Teratur
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Keluhan saat haid</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Riwayat Pernikahan</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <p>status</p>
                        </div>
                        <div class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" id="radiono" >Belum Nikah
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" id="radiono" >Cerai
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" id="radiono" >Nikah
                                </label>
                            </div>
                            {{-- belum selesai --}}
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 input-group">
                                <input type="text" class="form-control" placeholder="Umur waktu pertama nikah" aria-label="Umur waktu pertama nikah" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">th</span>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 input-group">
                                <input type="text" class="form-control" placeholder="Nikah dengan Suami ke 1" aria-label="Nikah dengan Suami ke 1" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">th</span>
                            </div>
                            <div class="col-md-4 input-group">
                                <input type="text" class="form-control" placeholder="Nikah dengan Suami ke 2" aria-label="Nikah dengan Suami ke 2" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">th</span>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <p>Riwayat KB terakhir</p>
                            </div>
                            <div class="col input-group">
                                <div class="col-md-3">
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" id="radiono" >Tidak
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" id="radiono" >Ya
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3"></div>
                            <div class="col">
                                <div class="form-floating">
                                    <input class="form-control" type="text" list="opsi" id="combobox1" placeholder="Pekerjaan Penanggung Jawab Pasien"/>
                                    <datalist id="opsi">
                                        <option>Suntik</option>
                                        <option>IUD</option>
                                        <option>Implan</option>
                                        <option>Pil</option>
                                        <option>MOW</option>
                                        <option>Lain-lain</option>
                                    </datalist>
                                    <label style="font-size:14px;" for="combobox1">Pekerjaan Penanggung Jawab Pasien</label>
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Lama pemakaian">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <h5>Riwayat Kehamilan</h5>
                            </div>
                            <div class="col-md-1">:</div>
                        </div>
                        {{-- belum selesai --}}
                        <div class="row mt-4">
                            <p>Riwayat Hamil ini</p>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Hari Pertama Haid Terakhir (HPHT)">
                                    <label for="floatingInput">Hari Pertama Haid Terakhir (HPHT)</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Tafsiran partus(HPHT)">
                                    <label for="floatingInput">Tafsiran partus(HPHT)</label>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <p>ANC</p>
                            </div>
                            <div class="col input-group">
                                <div class="col-md-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="opttidak" id="radiono" >Tidak
                                    </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="optya" id="radiono" >Ya
                                    </label>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" list="opsipekerjaan" id="pekerjaanbox" placeholder="Pekerjaan"/>
                                        <datalist id="opsipekerjaan">
                                            <option>Dokter Kandungan</option>
                                            <option>Dokter Umum</option>
                                            <option>Bidan</option>
                                            <option>Lainnya</option>
                                        </datalist>
                                        <label style="font-size:14px;" for="combobox1">Pekerjaan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <p>Frekuensi</p>
                            </div>
                            <div class="col input-group">
                                <div class="col-md-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="opttidak" id="radiono" >1x
                                    </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="opttidak" id="radiono" >2x
                                    </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="opttidak" id="radiono" >3x
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <p>Imunisasi TT</p>
                            </div>
                            <div class="col input-group">
                                <div class="col-md-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="opttidak" id="radiono" >Tidak
                                    </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="opttidak" id="radiono" >ya
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="kali">
                                        <label for="floatingInput">berapakali</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <p>Keluhan Saat Hamil</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>


                    </div>
                    <div class="row mt-4 justify-content-center text-center">
                        <div class="col-md-6 text-right">
                            <button id="btn-tab-2-prev" style="width: 120px;" type="button" class="btn btn-primary ">Previous</button>
                        </div>
                        <div class="col-md-6 text-left">
                            <button id="btn-tab-2-next" style="width: 120px;" type="button" class="btn btn-primary ">Next</button>
                        </div>
                    </div>
                </div>
                {{-- end tab-2 --}}

                {{-- start tab-3 --}}
                <div class="tab" id="tab-3">
                    <div class="row">
                        <p><strong>Pemeriksaan Umum</strong></p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nadi" aria-label="Nadi" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">x/mnt</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="TD" aria-label="TD" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">mmHg</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="BB" aria-label="BB" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">kg</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Lila" aria-label="Lila" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="SpO2" aria-label="SpO2" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">SpO2</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nafas" aria-label="Nafas" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">x/mnt</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="TB" aria-label="TB" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Suhu" aria-label="Suhu" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">°C</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <p><strong>Muka/Mata</strong></p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Oedama</p>
                        </div>
                        <form class="col input-group">
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >Tidak
                                </label>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >ya
                                </label>
                            </div>
                        </form>



                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Kongjungtiva</p>
                        </div>
                        <form class="col input-group">
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >Normal
                                </label>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >Pucat
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Sklera</p>
                        </div>
                        <form class="col input-group">
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >Putih
                                </label>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >Kuning
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >Merah
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Gangguan Visus</p>
                        </div>
                        <form class="col input-group">
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >Tidak
                                </label>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optpengobatan" >Ya
                                </label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </form>
                    </div>


                    <div class="row mt-4">
                        <p><strong>Dada</strong></p>
                    </div>
                    <form class="row">
                        <div class="col-md-3">
                            <label class="radio-inline ml-3">
                                <input type="radio" name="optdada" >Pernafasan Normal
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline ml-3">
                                <input type="radio" name="optdada" >Wheezing
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline ml-3">
                                <input type="radio" name="optdada" >Ronchi
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline ml-3">
                                <input type="radio" name="optdada" >Sesak
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline ml-3">
                                <input type="radio" name="optdada" >Batuk
                            </label>
                        </div>
                    </form>


                    <div class="row mt-4">
                        <p><strong>Payudara</strong></p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Gangguan Visus</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                        </div>
                        <form action="#" class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optdada" >Menongol
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optdada" >Datar
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optdada" >Tenggelam
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Pengeluaran</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="optpengeluaran" id="opsipeng1" value="Tidak ada">
                                    <label class="form-check-label" for="opsipeng1">Tidak ada</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="optpengeluaran" id="opsipeng2" value="Ada">
                                    <label class="form-check-label" for="opsipeng2">Ada</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" id="opsipengeluaran">
                            <select>
                                <option value="Colostrum">Colostrum</option>
                                <option value="ASI">ASI</option>
                                <option value="Nanah">Nanah</option>
                                <option value="Darah">Darah</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Kelainan</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                        </div>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="optkelainan" id="opsikel1" value="Lecet">
                                    <label class="form-check-label" for="opsikel1">Lecet</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="optkelainan" id="opsikel2" value="Bengek">
                                    <label class="form-check-label" for="opsikel2">Bengek</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="optkelainan" id="opsikel3" value="Lainnya">
                                    <label class="form-check-label" for="opsikel3">Lainnya</label>
                                </div>
                            </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="lainnya">
                        </div>
                    </div>


                    <div class="row mt-4">
                        <p><strong>Abdomen</strong></p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Luka Bekas Operasi</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                        </div>
                        <form action="#" class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optluka" value='tidak ada'>Tidak ada
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optluka" value='ada'>Ada
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="lukaBekas">
                            </div>
                        </form>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <p>Massa</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                        </div>
                        <form action="#" class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optmassa" value='tidak ada'>Tidak ada
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optmassa" value='ada'>Ada
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="massa">
                            </div>
                        </form>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <p>Nyeri Tekan</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                        </div>
                        <form action="#" class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optnyeri" value='tidak ada'>Tidak ada
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optnyeri" value='ada'>Ada
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="nyeri">
                            </div>
                        </form>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <p>Bising Usus</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                        </div>
                        <form action="#" class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optbisingusus" value='ada'>ada
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optbisingusus" value='ada'>Tidak Ada/Menurun
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <p>Palpasi</p>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-4 input-group mb-3">
                            <input type="text" class="form-control" placeholder="TFU" aria-label="TFU" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <p>Letak</p>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <p>DJJ</p>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-4 input-group mb-3">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">x/mnt</span>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <p><strong>Genetalia</strong></p>
                    </div>
                    <div class="row">
                        <form action="#" class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optbisingusus" value='Flour Albus'>Flour Albus
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optbisingusus" value='Fluxus'>Fluxus
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optbisingusus" value='Varises'>Varises
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <form action="#" class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optbisingusus" value='Abses Bartholin'>Abses Bartholin
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optbisingusus" value='Labra Kiri'>Labra Kiri
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="optbisingusus" value='Labra Kanan'>Labra Kanan
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ml-4">
                            <input type="text" placeholder="VT" class="form-control" name="" id="">
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="his" class="form-control" name="" id="">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <p><strong>Ekstremitas</strong></p>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <p>Oedama</p>
                        </div>
                        <form class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="opt_oedem" >Tidak ada
                                </label>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="opt_oedem" >ada
                                </label>
                            </div>
                        </form>

                    </div>
                    <div class="row ml-2">
                        <table class="col-md-4">
                            <tbody>
                            <tr>
                            <td style="border-right: 5px solid black; border-bottom: 5px solid black;"><input type="text" style="width: 180px; float: right;" class="form-control mr-2 mb-2"></td>
                            <td><input type="text" style="width: 180px; float: left" class="form-control mb-2 ml-2"></td>
                            </tr>
                            <tr>
                            <td style="border-right: 5px solid black;"><input type="text" style="width: 180px; float: right; " class="form-control mt-2 mr-2"></td>
                            <td style="border-top: 5px solid black;"><input type="text" style="width: 180px; float: left border-left:5px solid black;" class="form-control mt-2 ml-2"></td>
                            </tr>
                            </tbody>
                            </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2">
                            <p>Reflek Patella</p>
                        </div>
                        <form class="col input-group">
                            <div class="col-md-3">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="opt_reflek_patella" >Tidak ada
                                </label>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline ml-3">
                                    <input type="radio" name="opt_reflek_patella" >ada
                                </label>
                            </div>
                        </form>

                    </div>
                    <div class="row">

                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <p class="text-center">/</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Pemeriksaan Dalam (Vaginal Thoucher / Rectal Toucher / Inspekulo)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Laboratorium</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">USG</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                    </div>
                    <div class="row mt-4">
                        <h4>1.NRS / VA</h4>
                        <img src="{{asset ('images/NRSVA.png')}}" style="width:800px; height:125px;" alt="">
                    </div>
                    <div class="row mt-4">
                        <h4>2.Wong Baker Face Scale</h4>
                        <img src="{{asset ('images/wong baker.png')}}" style="width:800px; height:160px;" alt="">
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="radio-inline">
                                <input type="radio" name="opt_reflek_patella" >Tidak ada Nyeri (0)
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="radio-inline">
                                <input type="radio" name="opt_reflek_patella" >Nyeri ringan (1-3)
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="radio-inline">
                                <input type="radio" name="opt_reflek_patella" >Nyeri sedang (4-6)
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="radio-inline">
                                <input type="radio" name="opt_reflek_patella" >Nyeri berat (7-10)
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <p>Catatan : Bila pasien tidak sadar maka gunakan formulir penilaian nyeri dengan skala BPS (Behavior Pain Scale1)</p>
                    </div>
                    <div class="row mt-4">
                        <h6 class="text-center">BEHAVIOR PAIN SCALE</h6>
                    </div>

                    <div class="row mt-4">
                        <table id="table1">
                            <thead>
                              <tr>
                                <th class="text-center">Parameter</th>
                                <th class="text-center">Scale 1</th>
                                <th class="text-center">Scale 2</th>
                                <th class="text-center">Scale 3</th>
                                <th class="text-center">Scale 4</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="col-md-2">Ekspresi Wajah</td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="opt_reflek_patella" >Normal
                                </label></td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" name="opt_reflek_patella" >Mengencang sebagian (alis mengerut)
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" name="opt_reflek_patella" >Mengencang total (kelopak mata mengatup rapat)
                                    </label>
                                </td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="opt_reflek_patella" >Menangis
                                </label></td>
                              </tr>
                              <tr>
                                <td class="col-md-2">Ekstremitas atas</td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="another" >Tidak ada pergerakan
                                </label></td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="another" >Tertekuk sebagian
                                </label></td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="another" >Tertekuk total dengan fleksi jari
                                </label></td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="another" >Retraksi permanen
                                </label></td>
                              </tr>
                              <tr>
                                <td class="col-md-2">Compliance terhadap ventilator</td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="other" >Toleransi terhadap ventilator
                                </label></td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="other" >Sesekali terbatuk, namun masih toleransi terhadap ventilator
                                </label></td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="other" >Melawan ventilator
                                </label></td>
                                <td class="text-center"><label class="radio-inline">
                                    <input type="radio" name="other" >Tidak dapat mengendalikan pola napas
                                </label></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4 text-center">
                        <h4>PENILAIAN RISIKO JATUH PASIEN DEWASA > 18 Th (Fall Morse Scale)</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            1.
                        </div>
                        <div class="col-md-3">
                            <p>Riwayat jatuh yang baru atau dalam 3 bulan terakhir</p>
                        </div>
                        <div class="col-md-4">
                            <select name="penilaian_risiko" id="penilaian1" class="form-control">
                                <option selected disabled>Pilih Opsi</option>
                                <option value="0">Tidak</option>
                                <option value="25">ya</option>
                            </select>
                        </div>
                        <div class="col">
                            <input id="sub_total1" name="sub_total" class="form-control" type="text" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            2.
                        </div>
                        <div class="col-md-3">
                            <p>Diagnosis Medis Sekunder > 1</p>
                        </div>
                        <div class="col-md-4">
                            <select name="penilaian_risiko" id="penilaian2" class="form-control">
                                <option selected disabled>Pilih Opsi</option>
                                <option value="0">Tidak</option>
                                <option value="15">ya</option>
                            </select>
                        </div>
                        <div class="col">
                            <input id="sub_total2" name="sub_total" class="form-control" type="text" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            3.
                        </div>
                        <div class="col-md-3">
                            <p>Menggunakan alat bantu jalan</p>
                        </div>
                        <div class="col-md-4">
                            <select name="penilaian_risiko" id="penilaian3" class="form-control">
                                <option selected disabled>Pilih Opsi</option>
                                <option value="0">Bed rest/dibantu perawat</option>
                                <option value="15">Penopang/tongkat/walker</option>
                                <option value="30">Menggunakan furnitur</option>
                            </select>
                        </div>
                        <div class="col">
                            <input id="sub_total3" name="sub_total" class="form-control" type="text" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            4.
                        </div>
                        <div class="col-md-3">
                            <p>Menggunakan infus</p>
                        </div>
                        <div class="col-md-4">
                            <select name="penilaian_risiko" id="penilaian4" class="form-control">
                                <option selected disabled>Pilih Opsi</option>
                                <option value="0">Tidak</option>
                                <option value="15">Ya</option>
                            </select>
                        </div>
                        <div class="col">
                            <input id="sub_total4" name="sub_total" class="form-control" type="text" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            5.
                        </div>
                        <div class="col-md-3">
                            <p>Cara</p>
                        </div>
                        <div class="col-md-4">
                            <select name="penilaian_risiko" id="penilaian5" class="form-control">
                                <option selected disabled>Pilih Opsi</option>
                                <option value="0">Normal/bed rest/imobilisasi</option>
                                <option value="15">Lemah</option>
                                <option value="20">Terganggu</option>
                            </select>
                        </div>
                        <div class="col">
                            <input id="sub_total5" name="sub_total" class="form-control" type="text" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            6.
                        </div>
                        <div class="col-md-3">
                            <p>Status mental</p>
                        </div>
                        <div class="col-md-4">
                            <select name="penilaian_risiko" id="penilaian6" class="form-control">
                                <option selected disabled>Pilih Opsi</option>
                                <option value="0">Orientasi sesuai kemampuan diri</option>
                                <option value="15">Lupa keterbatasan diri</option>
                            </select>
                        </div>
                        <div class="col">
                            <input id="sub_total6" name="sub_total" class="form-control" type="text" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4"></div>
                        <div class="col">
                            <input id="total_skor" class="form-control" type="text" placeholder="Total" disabled>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <h4 class="text-center">DIAGNOSA</h4>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <h4 class="text-center">PENATAAKSANAAN</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <p>jam</p>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success" id="btn-plus">+</button>
                            {{-- <button class="btn btn-danger">-</button> --}}
                        </div>
                    </div>
                    <div class="row mt-4 text-center">
                        <div class="col">
                            <button id="btn-tab-3-prev" type="button" class="btn btn-primary">Previous</button>
                        </div>
                    </div>
                </div>


                {{-- end tab-3 --}}
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $(function () {
            // start function
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });



                // default condition
                $(".tab").css("display", "none")
                $("#tab-1").css("display", "block");
                $("#step-1").css("opacity", "1");

                function run(hideTab, showTab) {
                    if(hideTab < showTab){ // if not press previous
                        let current = 0;
                        x = $('#tab-'+hideTab);
                    }

                    // Progress bar
                    for (i = 1; i <= showTab; i++){
                        $("#step-"+i).css("opacity", "1");

                    }

                    // Switch tab
                    $("#tab-"+hideTab).css("display", "none");
                    $("#tab-"+showTab).css("display", "block");
                    $(this).scrollTop(0);

                }

                // tab 1
                $('#btn-tab-1').click(function() {
                    run(1, 2);
                });

                // tab 2
                $('#btn-tab-2-prev').click(function() {
                    run(2, 1);
                });
                $('#btn-tab-2-next').click(function() {
                    run(2, 3);
                });

                // tab 2
                $('#btn-tab-3-prev').click(function() {
                    run(3, 2);
                });


            $('input[name="optpengeluaran"]').click(function(e) {
                if(e.target.value === 'Ada') {
                    $('#opsipengeluaran').show();
                } else {
                    $('#opsipengeluaran').hide();
                    $('#opsipengeluaran').val('');
                }
            })

            $('#opsipengeluaran').hide();

            $('input[name="optkelainan"]').click(function(e) {
                if(e.target.value === 'Lainnya') {
                    $('#lainnya').show();
                } else {
                    $('#lainnya').hide();
                    $('#lainnya').val('');
                }
            })

            $('#lainnya').hide();

            $('input[name="optluka"]').click(function(e) {
                if(e.target.value === 'ada') {
                    $('#lukaBekas').show();
                } else {
                    $('#lukaBekas').hide();
                    $('#lukaBekas').val('');
                }
            })

            $('#lukaBekas').hide();

            $('input[name="optmassa"]').click(function(e) {
                if(e.target.value === 'ada') {
                    $('#massa').show();
                } else {
                    $('#massa').hide();
                    $('#massa').val('');
                }
            })

            $('#massa').hide();

            $('input[name="optnyeri"]').click(function(e) {
                if(e.target.value === 'ada') {
                    $('#nyeri').show();
                } else {
                    $('#nyeri').hide();
                    $('#nyeri').val('');
                }
            })

            $('#nyeri').hide();

            // let nilai = $('#penilaian1').val();
            // $('#sub_total1').val(nilai);

        function findTotal() {
            let arr = $(`[name='sub_total']`);
            let tot = 0;
            for(let i=0;i<arr.length;i++) {
                if(parseInt(arr[i].value))
                    tot += parseInt(arr[i].value);
            }
            let subTotal = $('#total_skor').val(tot)
        }

        for (let i= 1; i <= 6; i++) {
            $("#penilaian"+i).change(function (e) {
                e.preventDefault();
                $("#sub_total"+i).val($("#penilaian"+i).val());
                findTotal();
            });
        }


        });
    });
    // function myFunction(e) {
    // document.getElementById("myText").value = e.target.value
// }
</script>
@endsection

@push('js')

	<script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	{{-- <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script> --}}
	<script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/deznav-init.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<!-- Apex Chart -->
	{{-- <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script> --}}
    <!-- Chart piety plugin files -->
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Chartist -->
    <script src="{{ asset('vendor/chartist/js/chartist.min.js') }}"></script>
	<!-- Dashboard 1 -->
	<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
@endpush

