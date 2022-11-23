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
        select::-ms-expand {
            display: none !important;
        }

        p {
            font-weight: 600;
        }

        input[type="radio"] {
            margin-top: -1px;
            vertical-align: middle;
            height: 100%;
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
            <div class="card-body">
                <div class="tab" id="tab-1">

                    {{-- start tab 1 --}}
                    <h3 class="text-center">ASESMEN PASIEN KEBIDANAN DAN KANDUNGAN DI PONEK</h3>
                    <div class="row mt-4">
                        <div class="col-md-2">
                            <p>Sumber Data</p>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="sumber_data" checked>Pasien
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="sumber_data">Keluarga
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="sumber_data" value="lainnya">Lainnya
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="input-submer-data">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-2">
                            <p>Rujukan</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="RS">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Pusk">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="dr.">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Lainnya">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Dx, Rujukan">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="rujukan-tidak" >Tidak
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="rujukan-tidak">Datang sendiri
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="rujukan-tidak" value="diantar">Diantar oleh
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="diantar">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Nama keluarga yang bisa dihubungi</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-2"></div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="alamat">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="No.Telp">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Transportasi waktu datang</p>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="transportasi" >Ambulance
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio"  name="transportasi" value="transportasi-lain">Lainnya
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" >
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Agama</p>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input class="form-control" type="text" list="opsiagama" id="agamaasesmen" placeholder="Agama"/>
                                <datalist id="opsiagama">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                </datalist>
                                <label style="font-size:14px;" for="agamaasesmen">Agama</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Kepercayaan / nilai yang dianut</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Kebudayaan / Suku bangsa</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Bahasa</p>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input class="form-control" type="text" list="opsibahasa" id="bahasaasesmen" placeholder="Bahasa"/>
                                <datalist id="opsibahasa">
                                    <option>Indonesia</option>
                                    <option>Daerah </option>
                                    <option>Asing </option>
                                </datalist>
                                <label style="font-size:14px;" for="bahasaasesmen">Bahasa</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Pekerjaan</p>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input class="form-control" type="text" list="opsipekerjaan" id="pekerjaanbox" placeholder="Pekerjaan"/>
                                <datalist id="opsipekerjaan">
                                    <option>PNS</option>
                                    <option>Swasta</option>
                                    <option>Ibu Rumah Tangga</option>
                                </datalist>
                                <label style="font-size:14px;" for="pekerjaanbox">Pekerjaan</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Pendidikan</p>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input class="form-control" type="text" list="opsipendidikan" id="pendidikanbox" placeholder="Pendidikan"/>
                                <datalist id="opsipendidikan">
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>D3</option>
                                    <option>S1</option>
                                </datalist>
                                <label style="font-size:14px;" for="pendidikanbox">Pendidikan</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>obat dibawa dari rumah</p>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="obat-rumah">Tidak
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio"  name="obat-rumah">Ya
                            </label>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Alergi</p>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="obat-rumah">Tidak
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio"  name="obat-rumah" value="ya">Ya
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="obat-rumah">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>Alat bantu yang digunakan</p>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input class="form-control" type="text" list="opsi-alatbantu" id="alatbantubox" placeholder="Alat Bantu"/>
                                <datalist id="opsi-alatbantu">
                                    <option>KAcamata</option>
                                    <option>Lensa kontak</option>
                                    <option>Gigi palsu</option>
                                    <option>Alat bantu dengar</option>
                                </datalist>
                                <label style="font-size:14px;" for="alatbantubox">Alat Bantu</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <h4 class="text-center">DATA SUBYEKTIF (S)</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            <p>1.</p>
                        </div>
                        <div class="col-md-2">
                            <p>Keluhan utama</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            <p>2.</p>
                        </div>
                        <div class="col-md-2">
                            <p>Riwayat menstruasi</p>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Menarche umur" aria-label="Menarche umur" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Thn</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Siklus" aria-label="Siklus" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">hari</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="riwayat-menstruasi">Teratur
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio"  name="riwayat-menstruasi" value="tidak teratur">Tidak Teratur
                            </label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Lama" aria-label="Lama" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Hari</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <p>Keluhan saat haid</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-1">
                            <p>3.</p>
                        </div>
                        <div class="col-md-3">
                            <p>Riwayat perkawinan</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <p>Status :</p>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio"  name="status-perkawinan" value="Belum kawin">Belum kawin
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio"  name="status-perkawinan" value="Cerai">Cerai
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio"  name="status-perkawinan" value="Kawin">Kawin
                            </label>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="kali">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Umur  waktu pertama kawin" aria-label="Umur waktu pertama kawin" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Th</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Kawin dgn suami I" aria-label="Kawin dgn suami I" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Th</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Kawin dgn suami II" aria-label="Kawin dgn suami II" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Th</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-1">
                                <p>4.</p>
                            </div>
                            <div class="col-md-2">
                                <p>Riwayat kehamilan</p>
                            </div>
                            <div class="col">
                                CONTENT
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-1">
                                <p>5.</p>
                            </div>
                            <div class="col-md-2">
                                <p>Riwayat KB terakhir</p>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline">
                                    <input type="radio"  name="riwayat-kb-terakhir" >Tidak
                                </label>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline">
                                    <input type="radio"  name="riwayat-kb-terakhir" value="ya">Ya
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="jenis">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Lama pemakaian">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-1">
                                <p>6.</p>
                            </div>
                            <div class="col-md-3">
                                <p>Riwayat Hamil ini</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
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
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
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
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
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
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
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
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <p>Keluhan Saat Hamil</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-1">
                                <p>7.</p>
                            </div>
                            <div class="col-md-2">
                                <p>Riwayat penyakit yang lalu</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" type="text" list="opsipenyakit" id="penyakitasesmen" placeholder="Penyakit"/>
                                    <datalist id="opsipenyakit">
                                        <option>Hipertensi</option>
                                        <option>Kencing manis</option>
                                        <option>Jantung</option>
                                        <option>Asma</option>
                                        <option>Jiwa</option>
                                        <option>Tumor di </option>
                                        <option>HIV</option>
                                        <option>Hepatitis </option>
                                    </datalist>
                                    <label style="font-size:14px;" for="penyakitasesmen">Penyakit</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <p>Pernah dirawat</p>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline">
                                    <input type="radio" name="pernah-dirawat" >Tidak
                                </label>
                            </div>
                            <div class="col-md-2">
                                <label class="radio-inline">
                                    <input type="radio" name="pernah-dirawat" >Ya
                                </label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Alasan rawat" name="" id="">
                            </div>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="di">
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button id="btn-tab-1" type="button" class="btn btn-primary ">Next</button>
                        </div>

                    </div>
                </div>
                {{-- end tab 1 --}}

                {{-- start tab 2 --}}
                <div class="tab" id="tab-2">
                    <div class="row">
                        <h4 class="text-center">DATA SUBYEKTIF (S)</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            <p>1.</p>
                        </div>
                        <div class="col-md-3">
                            <p>Pemeriksaan umum</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <span>Tinggi Badan</span>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <span>Lila</span>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <span>BB</span>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <span>Status Gizi</span>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="status-gizi" >Baik
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="status-gizi" >Lebih
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="status-gizi" >Kurang
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="status-gizi" >Buruk
                            </label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <span>KU</span>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="TD" aria-label="TD" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Mmhg</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Suhu" aria-label="Suhu" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">°C</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nadi" aria-label="Nadi" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">x/m</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="RR" aria-label="RR" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">x/m</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            <p>2.</p>
                        </div>
                        <div class="col-md-3">
                            <p>Inspeksi</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Mata / muka</span>
                        </div>
                        <div class="col-md-1">
                            <span>:</span>
                        </div>
                        <div class="col">
                            <select name="mata-muka" id="konjunctiva" class="form-control">
                                <option value="" selected disabled>.::konjunctiva::.</option>
                                <option value="">Pucat</option>
                                <option value="">Normal</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="mata-muka" id="sklera" class="form-control">
                                <option value="" selected disabled>.::sklera::.</option>
                                <option value="">Putih</option>
                                <option value="">Kuning</option>
                                <option value="">Merah</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Mamae</span>
                        </div>
                        <div class="col-md-1">
                            <span>:</span>
                        </div>
                        <div class="col">
                            <select name="mamae" id="bentuk" class="form-control">
                                <option value="" selected disabled>.::bentuk::.</option>
                                <option value="">Simetris</option>
                                <option value="">Asimetris</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="mamae" id="putting-susu" class="form-control">
                                <option value="" selected disabled>.::putting susu::.</option>
                                <option value="">Menonjol</option>
                                <option value="">Datar</option>
                                <option value="">Masuk</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-1"></div>
                        <div class="col">
                            <select name="mamae" id="pengeluaran" class="form-control">
                                <option value="" selected disabled>.::pengeluaran::.</option>
                                <option value="tidak ada">Tidak ada</option>
                                <option value="ada">Ada</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="mamae" id="opsiada" class="form-control">
                                <option value="" selected disabled>.::pilih opsi::.</option>
                                <option value="">Colostrum</option>
                                <option value="">ASI</option>
                                <option value="">Nanah</option>
                                <option value="">Darah</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-1"></div>
                        <div class="col">
                            <select name="mamae" id="kebersihan" class="form-control">
                                <option value="" selected disabled>.::kebersihan::.</option>
                                <option value="">Cukup</option>
                                <option value="">Kurang</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input class="form-control" type="text" list="opsikelainan" id="kelainan" placeholder="Kelainan"/>
                                <datalist id="opsikelainan">
                                    <option>Lecet</option>
                                    <option>Bengkak</option>
                                    <option>Lainnya</option>
                                </datalist>
                                <label style="font-size:14px;" for="kelainan">Kelainan</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Extermitas</span>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="extermitas" >Simetris
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="radio-inline">
                                <input type="radio" name="extermitas" >Asimetris
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Abdomen</span>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1">
                            <p>3.</p>
                        </div>
                        <div class="col-md-3">
                            <p>Palpasi</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Abdomen</span>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="TFU">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Letak">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="His">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2"></div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Massa">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Nyeri tekan</span>
                        </div>
                        <div class="col-md-2">
                            <div class="radio-inline">
                                <input type="radio" name="nyeri-tekan" id="nyeri-tdk" value="tidak ada">
                                <label for="nyeri-tdk" >Tidak ada</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio-inline">
                                <input type="radio" name="nyeri-tekan" id="nyeri-ada"  value="ada">
                                <label for="nyeri-ada">ada</label>
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" id="lokasi" placeholder="Lokasi" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Ektremitas</span>
                        </div>
                        <div class="col-md-1">
                            <span>:</span>
                        </div>
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
                    <div class="row mt-3">
                        <div class="col-md-1">
                            <p>4.</p>
                        </div>
                        <div class="col-md-2">
                            <p>Auskultasi</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Bising usus</span>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-2">
                            <div class="radio-inline">
                                <input type="radio" name="bising-usu" id="">
                                <label for="">Ada</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio-inline">
                                <input type="radio" name="bising-usu" id="">
                                <label for="">Tidak ada</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Denyut jantung janin(DJJ)</span>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-4 input-group mb-3">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">x/mnt</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1">
                            <p>5.</p>
                        </div>
                        <div class="col-md-2">
                            <p>Perkusi</p>
                        </div>
                        <div class="col-md-1">:</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <span>Refleks Pstella</span>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-2">
                            <div class="radio-inline">
                                <input type="radio" name="refleks-pstella" id="" value="ada">
                                <label for="">Ada</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio-inline">
                                <input type="radio" name="refleks-pstella" id="" value="tidak ada">
                                <label for="">Tidak ada</label>
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control reflek">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control reflek">
                        </div>
                    </div>


                </div>
                {{-- end tab 2 --}}
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        // default condition
            // $(".tab").css("display", "none")
            //     $("#tab-1").css("display", "block");
            //     $("#step-1").css("opacity", "1");

            //     function run(hideTab, showTab) {
            //         if(hideTab < showTab){ // if not press previous
            //             let current = 0;
            //             x = $('#tab-'+hideTab);
            //         }

            //         // Progress bar
            //         for (i = 1; i <= showTab; i++){
            //             $("#step-"+i).css("opacity", "1");

            //         }

            //         // Switch tab
            //         $("#tab-"+hideTab).css("display", "none");
            //         $("#tab-"+showTab).css("display", "block");
            //         $(this).scrollTop(0);

            //     }

            //     // tab 1
            //     $('#btn-tab-1').click(function() {
            //         run(1, 2);
            //     });

            //     // tab 2
            //     $('#btn-tab-2-prev').click(function() {
            //         run(2, 1);
            //     });
            //     $('#btn-tab-2-next').click(function() {
            //         run(2, 3);
            //     });

            //     // tab 2
            //     $('#btn-tab-3-prev').click(function() {
            //         run(3, 2);
            //     });

            $("#opsiada").hide();

            $("#pengeluaran").change(function (e) {
                e.preventDefault();
                if(e.target.value === 'ada') {
                    $("#opsiada").show();
                }
                else {
                    $("#opsiada").hide();
                    $("#opsiada").val('');
                }
            });

            $("#lokasi").hide();
            $('input[name="nyeri-tekan"]').click(function (e) {

                if(e.target.value == "ada") {
                    $("#lokasi").show();
                } else {
                    $("#lokasi").hide();
                    $("#lokasi").val('');
                }
            });

            $('.reflek').hide();
            $('input[name="refleks-pstella"]').click(function (e) {
                if(e.target.value === 'tidak ada') {
                    $('.reflek').show();
                } else {
                    $('.reflek').hide();
                    $('.reflek').val('');
                }

            });
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
