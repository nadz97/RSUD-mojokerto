{{-- Extends layout --}}
@extends('layout.default')

@push('css')
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {{-- start tab 1 --}}
                <div class="tab" id="tab-1">

                    <h3 class="text-center card-title mb-3">Pengkajian Perawat</h3>

                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="namabayi" placeholder="Nama Bayi">
                                <label for="namabayi">Nama Bayi</label>
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-control" aria-label="Default select example">
                                <option selected="true">Pilih Kelamin</option>
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="noregbayi" placeholder="No.Registrasi Bayi">
                                <label for="noregbayi">No.Registrasi Bayi</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="namaibu" placeholder="Nama Ibu">
                                <label for="namaibu">Nama Ibu</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="namaayah" placeholder="Nama Ayah">
                                <label for="namaayah">Nama Ayah</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="ruangibu" placeholder="Ruangan Ibu">
                                <label for="ruangibu">Ruangan Ibu</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="noregibu" placeholder="No.Registrasi Ibu">
                                <label for="noregibu">No.Registrasi Ibu</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Cara Persalinan</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Keadaan bayi waktu dilahirkan</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <h4>Riwayat Ibu</h4>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <p>Riwayat obsterik</p>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="g" placeholder="G">
                                <label for="g">G</label>
                            </div>
                        </div>
                        <div class="col">

                            <div class="form-floating">
                                <input type="text" class="form-control" id="p" placeholder="P">
                                <label for="p">P</label>
                            </div>
                        </div>
                        <div class="col">

                            <div class="form-floating">
                                <input type="text" class="form-control" id="a" placeholder="A">
                                <label for="a">A</label>
                            </div>
                        </div>
                        <div class="col">

                            <div class="form-floating">
                                <input type="text" class="form-control" id="t" placeholder="T">
                                <label for="t">T</label>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <p>Usia Gestasi</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <p>Riwayat penyakit ibu</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <p>Sebelum Hamil</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <p>Selama Hamil</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>



                    <div class="row mt-4">
                        <h4>Pemeriksaan fisik sekarang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="umum" placeholder="Keadaan Umum">
                                <label for="umum">Keadaan Umum</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="apgar2" placeholder="Apgar Score">
                                <label for="apgar2">Apgar Score</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <p>Tanda-tanda Vital</p>
                    </div>
                    <div class="row">
                        <div class="col">

                            <div class="d-flex flex-column">
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="suhu" placeholder="Suhu">
                                        <label for="suhu">Suhu</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nadi" placeholder="Nadi">
                                        <label for="nadi">Nadi</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="rr" placeholder="RR">
                                        <label for="rr">RR</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                            <div class="d-flex flex-column">
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="darah"
                                            placeholder="Tekanan Darah">
                                        <label for="darah">Tekanan Darah</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="o2" placeholder="Sat O2">
                                        <label for="o2">Sat O2</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <p>Antropometri</p>
                    </div>
                    <div class="row">
                        <div class="col">

                            <div class="d-flex flex-column">
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="bbl" placeholder="BBL">
                                        <label for="bbl">BBL</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="bbs" placeholder="BBS">
                                        <label for="bbs">BBS</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="badan"
                                            placeholder="Panjang Badan">
                                        <label for="badan">Panjang Badan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                            <div class="d-flex flex-column">
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="kepala"
                                            placeholder="Lingkar kepala">
                                        <label for="kepala">Lingkar Kepala</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="dada"
                                            placeholder="Lingkar dada">
                                        <label for="dada">Lingkar Dada</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="perut"
                                            placeholder="Lingkar Perut">
                                        <label for="perut">Lingkar Perut</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Apgar Score --}}
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p class="text-center">Apgar Score</p>
                        </div>
                        <div class="col">
                            <p class="text-center">1 menit</p>
                        </div>
                        <div class="col">
                            <p class="text-center">5 menit</p>
                        </div>
                    </div>
                    {{-- apgar content --}}
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Warna Kulit</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Reflek</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Denyut Jantung</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Tonus</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Usaha bernafas</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <p>Jumlah Score</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row text-center mt-4">
                        <h4>Skor Downe</h4>
                    </div>
                    {{-- skor content --}}
                    <div class="col-md-8">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <p class="centertext">Frekuensi Nafas</p>
                            </div>
                            <div class="col-md-5">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="0">
                                        < 60 x/menit</option>
                                    <option value="2">60 - 80 x/menit</option>
                                    <option value="3">> 80 x/menit</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <p class="centertext">Retraksi</p>
                            </div>
                            <div class="col-md-5">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="0">Tidak ada retraksi</option>
                                    <option value="1">Retraksi ringan</option>
                                    <option value="2">Retraksi berat</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <p class="centertext">Sianosis</p>
                            </div>
                            <div class="col-md-5">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="0">Tidak ada sianosis</option>
                                    <option value="1">Sianosis hilang dengan pemberian O<sub>2</sub></option>
                                    <option value="2">Sianosis menetap walaupun diberi O<sub>2</sub></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <p class="centertext">Suara Nafas</p>
                            </div>
                            <div class="col-md-5">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="0">Suara nafas di kedua paru baik</option>
                                    <option value="1">Suara nafas di kedua paru menurun</option>
                                    <option value="2">Tidak ada suara di kedua paru</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <p class="centertext">Merintih</p>
                            </div>
                            <div class="col-md-5">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="0">Tidak Merintih</option>
                                    <option value="1">Dapat didengar dengan stetoskop</option>
                                    <option value="2">Dapat di dengar tanpa alat bantu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-5">

                                <input type="text" class="form-control" placeholder="total" readonly>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p>Evaluasi</p>
                        <ul>
                            <li>Nilai total < 3=Gawat nafas ringan</li>
                            <li>Nilai total 4 - 5 = Gawat nafas sedang</li>
                            <li>Nilai total > 6 = Gawat nafas Berat</li>
                        </ul>
                    </div>

                    {{-- button --}}
                    <div class="text-center mt-4">
                        <button id="btn-tab-1" type="button" class="btn btn-primary ">Next</button>
                    </div>
                    {{-- button --}}

                </div>
                {{-- end tab 1 --}}

                {{-- start tab 2 --}}
                <div class="tab m-4" id="tab-2">
                    {{-- skala nips content --}}
                    <div class="row mt-4">
                        <div class="row-md-3">
                            <h4>SKALA NIPS <i>(NEONATAL INFANT PAIN SCALE)</i></h4>
                        </div>
                        {{-- skala nips content --}}
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="centertext">Ekspresi Wajah</p>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="0">Santai / Tenang</option>
                                        <option value="1">Meringis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="centertext">Tangisan</p>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="0">Tidak Menangis</option>
                                        <option value="1">Merengek</option>
                                        <option value="1">Menangis Keras</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="centertext">Pola Pernafasan</p>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option selected>Open this select menu</option>
                                        <option value="0">Santai / Tenang</option>
                                        <option value="1">Berubah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="centertext">Lengan</p>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="0">Santai / Tenang</option>
                                        <option value="1">Fleksi / Ekstensi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="centertext">Kaki</p>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="0">Santai / Tenang</option>
                                        <option value="1">Fleksi / Ekstensi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="centertext">Keadaan bayi</p>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="0">Tidur / Bangun</option>
                                        <option value="1">Rewel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-5">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="total" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{-- start sistem pernafasan --}}
                    <div class="row">
                        <div class="row-md-3">
                            <h4>Sistem Pernafasan</h4>
                        </div>
                        <form class="row mt-4">
                            <div class="col-md-3">
                                <p>Spontan</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                        </form>
                        <form class="row mt-4">
                            <div class="col-md-3">
                                <p>Jalan Nafas</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Tidak ada masalah</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Ada sumbatan jalan nafas</label>
                                </div>
                            </div>
                        </form>
                        <form class="row mt-4">
                            <div class="col-md-3">
                                <p>Suara Nafas</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Wheezing</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Ronchi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Rales</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Stridor</label>
                                </div>
                            </div>
                        </form>
                        <form class="row mt-4">
                            <div class="col-md-3">
                                <p>Cuping Hidung</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Ada</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Tidak ada</label>
                                </div>
                            </div>
                        </form>
                        <form class="row mt-4">
                            <div class="col-md-3">
                                <p>Pembesaran Kelenjar</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Tidak kelainan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Ada Kelainan</label>
                                </div>
                            </div>
                        </form>
                        <form class="row mt-4">

                            <div class="col-md-3">
                                <p>Dada</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Ada retraksi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Tidak ada retraksi</label>
                                </div>
                            </div>

                        </form>

                        <form class="row mt-4">
                            <div class="col-md-3">
                                <p>Hasil AGD</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Asidosis respiratorik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Asidosis metabolic</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Alkalosis Respiratorik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Alkalosis Metabolik</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- start sistem pernafasan --}}

                    {{-- start sistem sirkulasi --}}
                    <div class="row-md-3 mt-4">
                        <h4>Sistem Sirkulasi</i></h4>
                    </div>
                    <div class="row mt-4">
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <p class="centertext">Capilary refill time</p>
                            </div>
                            <div class="col">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <p class="centertext">Ekstrimitas</p>
                            </div>
                            <form class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Hangat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Dingin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Cyanosis</label>
                                </div>
                            </form>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <p class="centertext">Perdarahan</p>
                            </div>
                            <form class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </form>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <p class="centertext">Arteri Carotis</p>
                            </div>
                            <form class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Kuat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Lemah</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- end sistem sirkulasi --}}

                    {{-- sistem pencernaan --}}
                    <div class="row-md-3 mt-4">
                        <h4>Sistem Percenaan</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="centertext">Bibir</p>
                        </div>
                        <div class="col form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bibir" id="lembab"
                                    value="lembab">
                                <label class="form-check-label" for="lembab">Lembab</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="bibir" id="kering"
                                    value="kering">
                                <label class="form-check-label" for="kering">Kering</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="bibir" id="labioschizis"
                                    value="labioschizis">
                                <label class="form-check-label" for="labioschizis">Labioschizis</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="centertext">Mulut</p>
                        </div>
                        <div class="form-group col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Normal</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Stomatitis</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Palatoschizis</label>
                            </div>

                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Stomatitis</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Palatoschizis</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Abdomen</p>
                        </div>
                        <div class="col-md-5">
                            <select class="form-control" id="abdomen" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="supel">supel</option>
                                <option value="hizis">hizis</option>
                                <option value="labiopalatognatosc">Labiopalatognatosc</option>
                                <option value="kembung">Kembung</option>
                                <option id="lainlain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    {{-- sistem saraf pusat --}}
                    <div class="row-md-3 mt-4">
                        <h4>Sistem Saraf Pusat</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Kesadaran</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kesadaran" id="composmentis"
                                        value="composmentis">
                                    <label class="form-check-label" for="composmentis">Composmentis</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="kesadaran" id="composmentis"
                                        value="apatis">
                                    <label class="form-check-label" for="apatis">Apatis</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="kesadaran" id="composmentis"
                                        value="somnolent">
                                    <label class="form-check-label" for="somnolent">Somnolent</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kesadaran" id="soporo"
                                        value="soporo">
                                    <label class="form-check-label" for="soporo">Soporo coma</label>
                                </div>
                                <div class="form-check form-check-inline ml-4">
                                    <input class="form-check-input" type="radio" name="kesadaran" id="coma"
                                        value="coma">
                                    <label class="form-check-label" for="coma">Coma</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Pupil Mata</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pupil_mata" id="isokor"
                                        value="isokor">
                                    <label class="form-check-label" for="isokor">Isokor</label>
                                </div>
                                <div class="form-check form-check-inline ml-4">
                                    <input class="form-check-input" type="radio" name="pupil_mata" id="anisokor"
                                        value="anisokor">
                                    <label class="form-check-label" for="anisokor">Anisokor</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pupil_mata" id="reaksi"
                                        value="Ada reaksi terhadap cahaya">
                                    <label class="form-check-label" for="reaksi">Ada reaksi terhadap cahaya</label>
                                </div>
                                <div class="form-check form-check-inline ml-4">
                                    <input class="form-check-input" type="radio" name="pupil_mata" id="noreaksi"
                                        value="Tidak reaksi terhadap cahaya">
                                    <label class="form-check-label" for="noreaksi">Tidak reaksi terhadap cahaya</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Tangisan</p>
                        </div>
                        <div class="form-group col">
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="tangisan" id="kuat"
                                    value="kuat">
                                <label class="form-check-label" for="kuat">Kuat</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="tangisan" id="melengking"
                                    value="melengking">
                                <label class="form-check-label" for="melengking">melengking</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="tangisan" id="merintih"
                                    value="merintih">
                                <label class="form-check-label" for="merintih">merintih</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="tangisan" id="tidakMenangis"
                                    value="tidak menangis">
                                <label class="form-check-label" for="tidakMenangis">tidak menangis</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Ubun-ubun</p>
                        </div>
                        <div class="form-group col">
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="ubun_ubun" id="datar"
                                    value="datar">
                                <label class="form-check-label" for="datar">datar</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="ubun_ubun" id="cekung"
                                    value="cekung">
                                <label class="form-check-label" for="cekung">cekung</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="ubun_ubun" id="cembung"
                                    value="cembung">
                                <label class="form-check-label" for="cembung">cembung</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <p>Kepala</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kepala" id="tidakKelainan"
                                        value="tidak kelainan">
                                    <label class="form-check-label" for="tidakKelainan">tidak kelainan</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="kepala" id="anencephal"
                                        value="anencephal">
                                    <label class="form-check-label" for="anencephal">Anencephal</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="kepala" id="ceptal"
                                        value="Ceptal Hematoma">
                                    <label class="form-check-label" for="ceptal">Ceptal Hematoma</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kepala" id="soporo"
                                        value="soporo">
                                    <label class="form-check-label" for="soporo">Hidrosepalus</label>
                                </div>
                                <div class="form-check form-check-inline ml-4">
                                    <input class="form-check-input" type="radio" name="kepala" id="caput"
                                        value="Caput Succedenium">
                                    <label class="form-check-label" for="caput">Caput Succedenium</label>
                                </div>
                                <div class="form-check form-check-inline ml-4">
                                    <input class="form-check-input" type="radio" name="kepala" id="perdarahan"
                                        value="Perdarahan venticular">
                                    <label class="form-check-label" for="perdarahan">Perdarahan venticular</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Kepala</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tonus_otot"
                                        value="tidak kelainan">
                                    <label class="form-check-label" for="tidakKelainan">Aktif</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="tonus_otot" value="lemah">
                                    <label class="form-check-label" for="lemah">Lemah</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="tonus_otot" value="paralisis">
                                    <label class="form-check-label" for="paralisis">Paralisis</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <h4>Sistem Endokrin</h4>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="centertext">Frekuensi Nafas</p>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="centertext">Elektrolit</p>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="natirum" placeholder="Natrium">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="chlorida" placeholder="Chlorida">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="kalium" placeholder="Kalium">
                        </div>
                    </div>

                    {{-- sistem integumen --}}
                    <div class="row">
                        <div class="row mt-4">
                            <h4>Sistem Integumen</h4>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <p>Warna Kulit</p>
                            </div>
                            <div class="form-group col">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="turgor_kulit"
                                            id="kemerahan" value="kemerahan">
                                        <label class="form-check-label" for="kemerahan">kemerahan</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="radio" name="turgor_kulit"
                                            id="pucat" value="pucat">
                                        <label class="form-check-label" for="pucat">pucat</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="radio" name="turgor_kulit"
                                            id="ikterus" value="ikterus">
                                        <label class="form-check-label" for="ikterus">ikterus</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Turgor kulit</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="turgor_kulit" id="elastis"
                                        value="elastis">
                                    <label class="form-check-label" for="elastis">elastis</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="turgor_kulit" id="tidakElastis"
                                        value="tidak elastis">
                                    <label class="form-check-label" for="tidakElastis">tidak elastis</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Integritas Kulit</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="integritas_kulit"
                                        id="utuh" value="utuh">
                                    <label class="form-check-label" for="utuh">utuh</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="integritas_kulit"
                                        id="kering" value="kering">
                                    <label class="form-check-label" for="kering">kering</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="integritas_kulit"
                                        id="rash" value="rash">
                                    <label class="form-check-label" for="rash">rash</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="integritas_kulit"
                                        id="bulae" value="bulae">
                                    <label class="form-check-label" for="bulae">bulae</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="integritas_kulit"
                                        id="pustula" value="pustula">
                                    <label class="form-check-label" for="pustula">pustula</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="integritas_kulit"
                                        id="ptechiae" value="ptechiae">
                                    <label class="form-check-label" for="ptechiae">ptechiae</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="integritas_kulit"
                                        id="lesi" value="lesi mengelupas">
                                    <label class="form-check-label" for="lesi">lesi mengelupas</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="integritas_kulit"
                                        id="lesi" value="lesi kemerahan">
                                    <label class="form-check-label" for="lesi">lesi kemerahan</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Tali pusat</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tali_pusat" id="ada"
                                        value="ada">
                                    <label class="form-check-label" for="ada">ada</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="tali_pusat" id="tidak ada"
                                        value="tidak ada">
                                    <label class="form-check-label" for="tidak ada">tidak ada</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Puntung umblical</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="puntung_umblical"
                                        id="kering" value="kering">
                                    <label class="form-check-label" for="kering">kering</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="puntung_umblical"
                                        id="basah" value="basah">
                                    <label class="form-check-label" for="basah">basah</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="puntung_umblical"
                                        id="busuk" value="bau busuk">
                                    <label class="form-check-label" for="busuk">bau busuk</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="puntung_umblical"
                                        id="kemerahan" value="kemerahan">
                                    <label class="form-check-label" for="kemerahan">kemerahan</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="puntung_umblical"
                                        id="pus" value="pus">
                                    <label class="form-check-label" for="pus">pus</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Abdomen</p>
                        </div>
                        <div class="form-group col">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="abdomen"
                                        id="tidakadakelainan" value="tidak ada kelainan">
                                    <label class="form-check-label" for="tidakadakelainan">tidak ada kelainan</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="abdomen" id="lukaoperasi"
                                        value="luka operasi">
                                    <label class="form-check-label" for="lukaoperasi">luka operasi</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="abdomen" id="Kolostomi"
                                        value="Kolostomi">
                                    <label class="form-check-label" for="Kolostomi">Kolostomi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6">
                            <button id="btn-tab-2-prev" type="button" class="btn btn-primary">Previous</button>
                        </div>
                        <div class="col-md-6">
                            <button id="btn-tab-2-next" type="button" class="btn btn-primary">Next</button>
                        </div>
                    </div>



                </div>
                {{-- end tab 2 --}}

                {{-- start tab 3 --}}
                <div class="tab m-4" id="tab-3">
                    <div class="row mt-4">
                        <h4>Sistem Genetalia</h4>
                    </div>
                    <div class="row">
                        <p>A. Perempuan</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Vagina</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsivg"
                                        value="bersih">
                                    <label class="form-check-label" for="opsivg">bersih</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsivg2"
                                        value="kotor">
                                    <label class="form-check-label" for="opsivg2">kotor</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Pseudomenstruasi</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsips"
                                        value="ya">
                                    <label class="form-check-label" for="opsips">ya</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsips2"
                                        value="tidak">
                                    <label class="form-check-label" for="opsips2">tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Kateter</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsiktt"
                                        value="ya">
                                    <label class="form-check-label" for="opsiktt">ya</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsiktt2"
                                        value="tidak">
                                    <label class="form-check-label" for="opsiktt2">tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Labia, Prominen</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsilb"
                                        value="ya">
                                    <label class="form-check-label" for="opsilb">ya</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsilb2"
                                        value="tidak">
                                    <label class="form-check-label" for="opsilb2">tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <p>B. Laki-laki</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Preputium</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsipre"
                                        value="bersih">
                                    <label class="form-check-label" for="opsipre">bersih</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsipre2"
                                        value="kotor">
                                    <label class="form-check-label" for="opsipre2">kotor</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <p>Hipospadia</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsihip"
                                        value="ya">
                                    <label class="form-check-label" for="opsihip">ya</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="vagina" id="opsihip2"
                                        value="tidak">
                                    <label class="form-check-label" for="opsihip2">tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-3 ">
                            <h5>Kondisi</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5>Tidak ada</h5>
                        </div>
                        <div class="col ">
                            <h5>Ada (Jelaskan)</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Trauma Lahir</p>
                        </div>
                        <div class="col-md-2 form-group">
                            <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                            </div>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Cacat Bawaan</p>
                        </div>
                        <div class="col-md-2 form-group">
                            <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                            </div>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text">
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="row">
                            <h4>Sistem Eliminasi</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Buang Air Kecil (BAK)</p>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-3 ">
                                    <input type="text" class="form-control" placeholder="Frekuensi" aria-label="Frekuensi" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">x/hari</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-3 ">
                                    <input type="text" class="form-control" placeholder="Produksi urine" aria-label="Produksi urine" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">cc/kg &ensp; BB/jam</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">

                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="vagina" id="opsibak" value="jernih">
                                        <label class="form-check-label" for="opsibak">jernih</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="radio" name="vagina" id="opsibak2" value="pekat">
                                        <label class="form-check-label" for="opsibak2">pekat</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Retensi urin
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-5">
                                <div class="row ml-1">
                                    <div class="col form-group form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Inkontinensia urine
                                        </label>
                                    </div>
                                    <div class="col form-group form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Hematuri
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p>Buang Air Besar(BAB)</p>
                        </div>
                        <div class="col-md-1">
                            <p>Anus :</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="anus" id="opsianus" value="Ada">
                                    <label class="form-check-label" for="opsianus">Ada</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="anus" id="opsianus2" value="tidak">
                                    <label class="form-check-label" for="opsianus2">tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p></p>
                        </div>
                        <div class="col-md-5 input-group">
                            <input type="text" class="form-control" placeholder="Mekonium" aria-label="Mekonium" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Jam setelah lahir</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p></p>
                        </div>
                        <div class="col-md-5 input-group">
                            <input type="text" class="form-control" placeholder="Frekuensi BAB" aria-label="Frekuensi BAB" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">x/hari</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p></p>
                        </div>
                        <div class="col-md-2">
                            <p>Konsistensi BAB</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="konsistensi_bab" id="opsibab" value="Lembek">
                                    <label class="form-check-label" for="opsibab">Lembek</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="konsistensi_bab" id="opsibab2" value="Cair berampas">
                                    <label class="form-check-label" for="opsibab2">Cair berampas</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="konsistensi_bab" id="opsibab3" value="Cair tanpa ampas">
                                    <label class="form-check-label" for="opsibab2">Cair tanpa ampas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <p></p>
                        </div>
                        <div class="col-md-2">
                            <p>Warna</p>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="warna" id="opsiwarna" value="Kuning">
                                    <label class="form-check-label" for="opsiwarna">Kuning</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="warna" id="opsiwarna2" value="Hijau">
                                    <label class="form-check-label" for="opsiwarna2">Hijau</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="warna" id="opsiwarna3" value="Dempul">
                                    <label class="form-check-label" for="opsiwarna2">Dempul</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="warna" id="opsiwarna4" value="Hitam/Kecoklatan">
                                    <label class="form-check-label" for="opsiwarna4">Hitam/Kecoklatan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <h3 class="centeredtext">ASESMEN FARMASI</h3>
                    </div>
                    <div class="row">
                        <div class="col ml-4">
                            <h4>Masalah Kefarmasian :</h4>
                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Ada indikasi tapi tidak ada terapi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Ada terapi tapi tidak ada indikasi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Pemilihan obat tidak tepat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Dosis Obat terlalu rendah / tinggi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Efek samping obat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Pasien tidak menggunakan obat
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4>Rencana Awal Intervensi Farmasi</h4>
                            <div class="row">
                                <p>intervensi pada dokter :</p>
                            </div>
                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Informasi kepada dokter
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Konfirmasi kepada dokter
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col ml-4">
                            <h4>Faktor Penghambat Kepatuan :</h4>
                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Pemahaman tentang obat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Pemahaman tentang penyakit
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Komunikasi atau bahasa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Ingatan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Tingkat pendidikan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Kemampuan menggunakan obat secara mandiri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Kebosanan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Polifarmasi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="faktor_penghambat_kepatuhan" type="checkbox" value="faktor" id="faktorlain">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Lain-lain
                                    </label>
                                </div>
                                <input class="form-control" id="optionalfaktor" placeholder="Lain-lain" type="text">
                                <div class="form-check">
                                    <input class="form-check-input" name="faktor_penghambat_kepatuhan" type="checkbox" value="faktor" id="faktorlain">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Tidak ada masalah kefarmasian
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <p>Intervensi pada tenaga kesehatan lain :</p>
                            </div>
                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Rute / cara pemeberian obat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Penyimpanan obat
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <p>Intervensi pada obat :</p>
                            </div>
                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Pergantian obat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    perubahan dosis
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Perubahan bentuk sediaan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Perubahan aturan pakai
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Penghentian obat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="optobat" id="optobat">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Lain-lain
                                    </label>
                                </div>
                                <input class="form-control" id="optionalobat" placeholder="Lain-lain" type="text">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Tidak ada masalah kefarmasian
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- button --}}
                    <div class="row text-center mt-5">
                        <div class="col">
                            <button id="btn-tab-3-prev" type="button" class="btn btn-primary">Previous</button>
                        </div>
                    </div>
                    {{-- button --}}

                </div>
                {{-- end tab 3 --}}
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(function() {
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
                    if (hideTab < showTab) { // if not press previous
                        let current = 0;
                        x = $('#tab-' + hideTab);
                    }

                    // Progress bar
                    for (i = 1; i <= showTab; i++) {
                        $("#step-" + i).css("opacity", "1");

                    }

                    // Switch tab
                    $("#tab-" + hideTab).css("display", "none");
                    $("#tab-" + showTab).css("display", "block");
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

                const checkbox = $('#faktorlain');
                const checkbox2 = $('#optobat');
                const optfaktor = $('#optionalfaktor');
                const optobat = $('#optionalobat');

                $('input[name="skrining_gizi"]').click(function(e) {
                    if (e.target.value === 'lainlain') {
                        $('#optional').show();
                    } else {
                        $('#optional').hide();
                        $('#optional').val('');
                    }
                })

                $('#optional').hide();

                $(checkbox).click(function() {
                    $(optfaktor).toggle(this.checked);
                });
                $(optfaktor).hide();

                $(checkbox2).click(function() {
                    $(optobat).toggle(this.checked);
                });
                $(optobat).hide();



                // end function
            })
        });
    </script>
@endsection

@push('js')
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
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
