{{-- Extends layout --}}
@extends('layout.default')

@push('css')
	<link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    {{-- <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@endpush

@section('content')

<div class="row">
    <div class="col-md-2">
        <h5>Sumber Data</h5>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" name="sumberData" class="form-check-input" id="pasien">
            <label for="pasien" class="form-check-label">Pasien</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" name="sumberData" class="form-check-input" id="keluarga">
            <label for="keluarga" class="form-check-label">Keluarga</label>
        </div>
    </div>
    <div class="col-md-4">
        <input type="text" name="sumberData" id="sumberLainya" class="form-control" placeholder="Sumber Data Lainya...">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h5>Rujukan</h5>
    </div>
    <div class="col-md-3 d-flex">
        <label for="rujukanRs" class="label-input mr-2">RS</label>
        <input type="text" name="rs" id="rujukanRs" class="form-control">
    </div>
    <div class="col-md-3 d-flex">
        <label for="rujukanRs" class="label-input mr-2">Pusk</label>
        <input type="text" name="pusk" id="rujukanPush" class="form-control">
    </div>
    <div class="col-md-3 d-flex">
        <label for="rujukanRs" class="label-input mr-2">Dr</label>
        <input type="text" name="dr" id="rujukanDr" class="form-control">
    </div>
    <div class="col-md-3 d-flex">
        <label for="rujukanLain" class="label-input" style="width:140px">Lain-lain</label>
        <input type="text" name="dr" id="rujukanLain" class="form-control">
    </div>
    <div class="col-md-6 mt-3">
        <label class="label-input">Dx.Rujukan</label>
        <input type="text" name="rujukan" class="form-control" placeholder="Rujukan">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6 d-flex">
        <label class="label-input" style="width: 140px">Diantar Oleh</label>
        <input type="text" class="form-control" placeholder="Diantar Oleh...">
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="datangSendiri">
            <label for="datangSendiri" class="form-check-label">Datang Sendiri</label>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12 d-flex">
        <label for="keluargaDihubungi" class="label-input" style="width:500px;">Nama Keluarga Yang Dapat
            Dihubungi</label>
        <input type="text" id="keluargaDihubungi" name="keluargaDihubungi" class="form-control">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-3">
        <label class="label-input" style="width: 200px">Alamat dan Telephone</label>
    </div>
    <div class="col-md-4">
        <input type="text" name="alamat" class="form-control" placeholder="Alamat...">
    </div>
    <div class="col-md-4">
        <input type="text" name="telephone" class="form-control" placeholder="Telephone...">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-3">
        <label class="label-input">Transportasi Waktu Datang</label>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" name="transportasi" class="form-check-input" id="ambulance">
            <label for="ambulance" class="form-check-label">Ambulance</label>
        </div>
    </div>
    <div class="col-md-4 d-flex">
        <label class="label-input mr-2">Lainya</label>
        <input type="text" name="transportasi" id="transportasiLain" class="form-control"
            placeholder="Transportasi Lain...">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12 d-flex">
        <label>Agama</label>
        <div class="form-check ml-4">
            <input type="radio" name="agama" class="form-check-input" id="islam">
            <label for="islam" class="form-check-label">islam</label>
        </div>
        <div class="form-check ml-4">
            <input type="radio" name="agama" class="form-check-input" id="kristen">
            <label for="kristen" class="form-check-label">Kristen</label>
        </div>
        <div class="form-check ml-4">
            <input type="radio" name="agama" class="form-check-input" id="katholik">
            <label for="katholik" class="form-check-label">Katholik</label>
        </div>
        <div class="form-check ml-4">
            <input type="radio" name="agama" class="form-check-input" id="hindu">
            <label for="hindu" class="form-check-label">Hindu</label>
        </div>
        <div class="form-check ml-4">
            <input type="radio" name="agama" class="form-check-input" id="budha">
            <label for="budha" class="form-check-label">Budha</label>
        </div>
        <div class="ml-4 d-flex">
            <label for="agamaLain" class="label-input">Lainya</label>
            <input type="text" name="agama" id="agamaLain" class="form-control ml-2" placeholder="Agama Lainya...">
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-3">
        <label>Obat Dibawa Dari Rumah</label>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" name="obatDibawa" id="yaBawa" class="form-check-input">
            <label for="yaBawa" class="form-check-label">Ya</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" name="obatDibawa" id="tidakBawa" class="form-check-input">
            <label for="tidakBawa" class="form-check-label">Tidak</label>
        </div>
    </div>
</div>
<h5 class="mt-4">1.Riwayat Ibu</h5>
<div class="row">
    <div class="col-md-12">
        <label style="width: 160px">Riwayat Kehamilan</label>
    </div>
    <div class="col-md-3">
        <label class="label-input">G</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-md-3">
        <label class="label-input">P</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-md-3">
        <label class="label-input">A</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-md-3">
        <label class="label-input">T</label>
        <input type="text" class="form-control">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <label class="label-input">Usia Gestasi</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="label-input">Sebelum Hamil</label>
        <input type="text" class="form-control">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <label class="label-input">Riwayat Penyakit Ibu</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="label-input">Selama Hamil</label>
        <input type="text" class="form-control">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <h5>2.Pemeriksaan Fisik Sekarang</h5>
    </div>
    <div class="col-md-12">
        <label class="label-input">Keadaan Umum</label>
        <textarea name="keadaanUmum" cols="30" rows="10" class="form-control"></textarea>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h5>Tanda Tanda Vital</h5>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4">
        <label class="label-input">Suhu</label>
        <input type="text" name="tandaSuhu" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="label-input">Nadi</label>
        <input type="text" name="tandaNadi" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="label-input">RR</label>
        <input type="text" name="tandaRr" class="form-control">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4">
        <label class="label-input">Tekanan Darah</label>
        <input type="text" name="tandaTekananDarah" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="label-input">SatO2</label>
        <input type="text" name="tandaSato2" class="form-control">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h5>Antropometri</h5>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4">
        <label class="label-input">BBL</label>
        <input type="text" name="bbl" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="label-input">BBS</label>
        <input type="text" name="bbs" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="label-input">Panjang Badan</label>
        <input type="text" name="panjangBadan" class="form-control">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4">
        <label class="label-input">Lingkar Kepala</label>
        <input type="text" name="lingkarKepala" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="label-input">Lingkar Dada</label>
        <input type="text" name="lingkarDada" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="label-input">Lingkar Perut</label>
        <input type="text" name="lingkarPerut" class="form-control">
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <h3 class="text-center">Skala Nyeri Untuk Bayi 0 - 28 Hari</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Indikator Usia Gestasi</label>
    </div>
    <div class="col-md-6">
        <select name="skalaNyeri" id="skala1" class="form-control">
            <option value="0" style="display: none">Pilih Usia</option>
            <option value="0"> > 36 minggu </option>
            <option value="1">32 minggu - 35 minggu 6 hari</option>
            <option value="2">28 minggu - 31 minggu 6 hari</option>
            <option value="3">
                < 28 minggu</option> </select> </div> <div class="col-md-3">
                    <input type="text" name="scoreSkala1" id="scoreSkala1" class="form-control text-center">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Tahapan Perilaku</label>
    </div>
    <div class="col-md-6">
        <select name="skalaNyeri" id="skala2" class="form-control">
            <option value="0" style="display: none">Pilih Tahapan</option>
            <option value="0">Aktif / bangun, mata terbuka, ada gerakan wajah </option>
            <option value="1">Tenang/terbangun, mata terbuka, tidak ada gerakan wajah</option>
            <option value="2">Aktif/tertidur,mata tertutup, ada gerakan wajah</option>
            <option value="3">Tenang/tertidur, mata tertutup, tidak ada gerakan wajah </option>
        </select>
    </div>
    <div class="col-md-3">
        <input type="text" name="scoreSkala2" id="scoreSkala2" class="form-control text-center">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Laju jantung maksimal</label>
    </div>
    <div class="col-md-6">
        <select name="skalaNyeri" id="skala3" class="form-control">
            <option value="0" style="display: none">Pilih Laju Jantung</option>
            <option value="0">Meningkat 0 - 4 denyut/menit </option>
            <option value="1">Meningkat 5 - 14 denyut/menit</option>
            <option value="2">Meningkat 15 - 24 denyut/menit</option>
            <option value="3">Meningkat > 25 denyut/menit</option>
        </select>
    </div>
    <div class="col-md-3">
        <input type="text" name="scoreSkala3" id="scoreSkala3" class="form-control text-center">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Saturasi oksigen minimal</label>
    </div>
    <div class="col-md-6">
        <select name="skalaNyeri" id="skala4" class="form-control">
            <option value="0" style="display: none">Pilih Saturasi</option>
            <option value="0">Turun 0 - 2,4 %</option>
            <option value="1">Turun 2,5 - 4,9 %</option>
            <option value="2">Turun 5 - 7,4 %</option>
            <option value="3">Turun > 7,5 %</option>
        </select>
    </div>
    <div class="col-md-3">
        <input type="text" name="scoreSkala4" id="scoreSkala4" class="form-control text-center">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Kerutan dahi</label>
    </div>
    <div class="col-md-6">
        <select name="skalaNyeri" id="skala5" class="form-control">
            <option value="0" style="display: none">Pilih Kerutan Dahi</option>
            <option value="0">Tidak ada (< 9%waktu observasi)</option> <option value="1">Minimal (10-39% waktu
                    observasi)</option>
            <option value="2">Sedang (40-69% waktu observasi)</option>
            <option value="3">Maksimal ( > 70% waktu observasi)</option>
        </select>
    </div>
    <div class="col-md-3">
        <input type="text" name="scoreSkala5" id="scoreSkala5" class="form-control text-center">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Mata tertutup rapat </label>
    </div>
    <div class="col-md-6">
        <select name="skalaNyeri" id="skala6" class="form-control">
            <option value="0" style="display: none">Pilih Keterangan Mata</option>
            <option value="0">Tidak ada (< 9%waktu observasi)</option> <option value="1">Minimal (10-39% waktu
                    observasi)</option>
            <option value="2">Sedang (40-69% waktu observasi)</option>
            <option value="3">Maksimal ( > 70% waktu observasi)</option>
        </select>
    </div>
    <div class="col-md-3">
        <input type="text" name="scoreSkala6" id="scoreSkala6" class="form-control text-center">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Lipatan nasolabial mendalam </label>
    </div>
    <div class="col-md-6">
        <select name="skalaNyeri" id="skala7" class="form-control">
            <option value="0" style="display: none">Pilih Lipatan</option>
            <option value="0">Tidak ada (< 9%waktu observasi)</option> <option value="1">Minimal (10-39% waktu
                    observasi)</option>
            <option value="2">Sedang (40-69% waktu observasi)</option>
            <option value="3">Maksimal ( > 70% waktu observasi)</option>
        </select>
    </div>
    <div class="col-md-3">
        <input type="text" name="scoreSkala7" id="scoreSkala7" class="form-control text-center">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-9"></div>
    <div class="col-md-3">
        <input type="text" name="totalSkalaNyeri" id="totalSkalaNyeri" class="form-control text-center">
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <h5>Sistem Pernafasan</h5>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Spontan</label>
    </div>
    <div class="col-md-1">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="yaSpontan">
            <label for="yaSpontan" class="form-check-label">Ya</label>
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidakSpontan">
            <label for="tidakSpontan" class="form-check-label">Tidak</label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Jalan Nafas</label>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidakMasalah">
            <label for="tidakMasalah" class="form-check-label">Tidak Ada Masalah</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-check">
            <input type="text" name="masalahJalanNafas" class="form-control" placeholder="Masalah Jalan Nafas">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Suara Nafas</label>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="whezzing">
            <label for="whezzing" class="form-check-label">Whezzing</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="ronchi">
            <label for="ronchi" class="form-check-label">Ronchi</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="rales">
            <label for="rales" class="form-check-label">Rales</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="stridor">
            <label for="stridor" class="form-check-label">Stridor</label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Pembesaran Kelenjar</label>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input type="radio" name="pembesaranKelenjar" class="form-check-input" id="tidakAdaKelainan">
            <label for="tidakAdaKelainan" class="form-check-label">Tidak Ada Kelainan</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-check">
            <input type="text" name="pembesaranKelenjar" class="form-control" placeholder="Masalah Pembesaran Kelenjar">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Dada</label>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="adaRetraksi">
            <label for="adaRetraksi" class="form-check-label">Ada Retraksi</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidakAdaRetraksi">
            <label for="tidakAdaRetraksi" class="form-check-label">Tidak Ada Retraksi</label>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-3">
        <label class="label-input">Hasil AGD</label>
    </div>
    <div class="col-md-4">
        <input type="text" name="hasilAgd" class="form-control">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="asidosis1">
            <label for="stridor" class="form-check-label">Asidosis respiratorik</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="asidosis2">
            <label for="stridor" class="form-check-label">Asidosis Metabolic</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="alkalosis1">
            <label for="stridor" class="form-check-label">Alkalosis Respiratorik</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="alkalosis2">
            <label for="stridor" class="form-check-label">Alkalosis Metabolic</label>
        </div>
    </div>
</div>

{{-- Perhitungan score --}}
<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Apgar Score</th>
                    <th>1 Menit</th>
                    <th>5 Menit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Warna Kulit</td>
                    <td>
                        <input type="text" name="apgarSatuMenit" id="apgarSatuMenit1" class="form-control"
                            placeholder="Warna Kulit 1 Menit">
                    </td>
                    <td>
                        <input type="text" name="apgarLimaMenit" id="apgarLimaMenit1" class="form-control"
                            placeholder="Warna Kulit 5 Menit">
                    </td>
                </tr>
                <tr>
                    <td>Reflek</td>
                    <td>
                        <input type="text" name="apgarSatuMenit" id="apgarSatuMenit2" class="form-control"
                            placeholder="Reflek 1 Menit">
                    </td>
                    <td>
                        <input type="text" name="apgarLimaMenit" id="apgarLimaMenit2" class="form-control"
                            placeholder="Reflek 5 Menit">
                    </td>
                </tr>
                <tr>
                    <td>Denyut Jantung</td>
                    <td>
                        <input type="text" name="apgarSatuMenit" id="apgarSatuMenit3" class="form-control"
                            placeholder="Denyut Jantung 1 Menit">
                    </td>
                    <td>
                        <input type="text" name="apgarLimaMenit" id="apgarLimaMenit3" class="form-control"
                            placeholder="Denyut Jantung 5 Menit">
                    </td>
                </tr>
                <tr>
                    <td>Tonus</td>
                    <td>
                        <input type="text" name="apgarSatuMenit" id="apgarSatuMenit4" class="form-control"
                            placeholder="Tonus 1 Menit">
                    </td>
                    <td>
                        <input type="text" name="apgarLimaMenit" id="apgarLimaMenit4" class="form-control"
                            placeholder="Tonus 5 Menit">
                    </td>
                </tr>
                <tr>
                    <td>usahaBernafas</td>
                    <td>
                        <input type="text" name="apgarSatuMenit" id="apgarSatuMenit5" class="form-control"
                            placeholder="Usaha Bernafas 1 Menit">
                    </td>
                    <td>
                        <input type="text" name="apgarLimaMenit" id="apgarLimaMenit5" class="form-control"
                            placeholder="Usaha Bernafas 5 Menit">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Score</td>
                    <td>
                        <input type="text" name="jumlahScore1Menit" id="totalApgarSatuMenit" class="form-control"
                            placeholder="Jumlah Score 1 Menit">
                    </td>
                    <td>
                        <input type="text" name="jumlahScore5Menit" id="totalApgarLimaMenit" class="form-control"
                            placeholder="Jumlah Score 5 Menit">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <h3 class="text-center">SKOR DOWNE</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Frekuensi Nafas</label>
    </div>
    <div class="col-md-6">
        <select name="skorDowne" id="skorDowne1" class="form-control">
            <option value="0" style="display: none">Pilih Frekuensi Nafas</option>
            <option value="0">
                < 60x/menit </option> <option value="1"> 60-80x/menit
            </option>
            <option value="2"> > 80x/menit </option>
        </select>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Retraksi</label>
    </div>
    <div class="col-md-6">
        <select name="skorDowne" id="skorDowne2" class="form-control">
            <option value="0" style="display: none">Pilih Retraksi</option>
            <option value="0">Tidak Ada Retraksi</option>
            <option value="1">Retraksi Ringan</option>
            <option value="2">Retraksi Berat</option>
        </select>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Sianosis</label>
    </div>
    <div class="col-md-6">
        <select name="skorDowne" id="skorDowne3" class="form-control">
            <option value="0" style="display: none">Pilih Sianosis</option>
            <option value="0">Tidak ada sianosis</option>
            <option value="1">Sianosis hilang dengan pemberian O2</option>
            <option value="2">Sianosis menetap walaupun diberi O2</option>
        </select>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Suara Nafas</label>
    </div>
    <div class="col-md-6">
        <select name="skorDowne" id="skorDowne4" class="form-control">
            <option value="0" style="display: none">Pilih Suara Nafas</option>
            <option value="0">Suara nafas di kedua paru baik</option>
            <option value="1">Suara nafas di kedua paru menurun</option>
            <option value="2">Tidak ada suara di kedua paru</option>
        </select>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Merintih</label>
    </div>
    <div class="col-md-6">
        <select name="skorDowne" id="skorDowne5" class="form-control">
            <option value="0" style="display: none">Pilih Merintih</option>
            <option value="0">Tidak Merintih</option>
            <option value="1">Dapat didengar dengan stetoskop</option>
            <option value="2">Dapat di dengar tanpa alat bantu</option>
        </select>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Total Skore</label>
    </div>
    <div class="col-md-6">
        <input type="text" name="totalSkorDowne" id="totalSkorDowne" class="form-control" placeholder="Total Skore"
            readonly>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <label>Evaluasi</label>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input type="radio" name="evaluasiDowne" id="evaluasiDowne1" class="form-check-input" disabled>
            <label class="form-check-label">NILAI TOTAL < 3 : Gawat Nafas Ringan</label> </div> </div> <div
                    class="col-md-3">
                    <div class="form-check">
                        <input type="radio" name="evaluasiDowne" id="evaluasiDowne2" class="form-check-input" disabled>
                        <label class="form-check-label">NILAI TOTAL 4 - 5 : Gawat Nafas Sedang</label>
                    </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="evaluasiDowne" id="evaluasiDowne3" class="form-check-input" disabled>
                <label class="form-check-label">NILAI TOTAL > 6 : Gawat Nafas Berat</label>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <h5>Sistem Sirkulasi</h5>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Carpilary refill time</label>
        </div>
        <div class="col-md-6">
            <input type="text" name="capilary" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Ekstrimitas</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="ekstrimitas" id="ektrimitasHangat" class="form-check-input">
                <label for="ekstrimitasHangat" class="form-check-label">Hangat</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="ekstrimitas" id="ekstrimitasDingin" class="form-check-input">
                <label for="ekstrimitasDingin" class="form-check-label">Dingin</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="ekstrimitas" id="ekstrimitasCyanosis" class="form-check-input">
                <label for="ekstrimitasCyanosis" class="form-check-label">Cyanosis</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Pendarahan</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="pendarahan" id="yaPendarahan" class="form-check-input">
                <label for="yaPendarahan" class="form-check-label">Ya</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="pendarahan" id="tidakPendarahan" class="form-check-input">
                <label for="tidakPendarahan" class="form-check-label">Tidak</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Arteri Carotis</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="arteriCarotis" id="arteriKuat" class="form-check-input">
                <label for="arteriKuat" class="form-check-label">Kuat</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="arteriCarotis" id="arteriLemah" class="form-check-input">
                <label for="arteriLemah" class="form-check-label">Lemah</label>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h5>Sistem Pencernaan</h5>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Bibir</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="bibir" id="bibirLembab" class="form-check-input">
                <label for="bibirLembab" class="form-check-label">Lembab</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="bibir" id="bibirKering" class="form-check-input">
                <label for="bibirKering" class="form-check-label">Kering</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="bibir" id="bibirLabioschizis" class="form-check-input">
                <label for="bibirLabioschizis" class="form-check-label">Labioschizis</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Mulut</label>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="mulut" id="mulutStomatis" class="form-check-input">
                <label for="mulutStomatis" class="form-check-label">Stomatis</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="mulut" id="mulutNormal" class="form-check-input">
                <label for="mulutNormal" class="form-check-label">Normal</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="mulut" id="mulutPalatoschizis" class="form-check-input">
                <label for="mulutPalatoschizis" class="form-check-label">Palatoschizis</label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3 mt-2 mb-3">
            <div class="form-check">
                <input type="radio" name="mulut" id="mulutLabioschizis" class="form-check-input">
                <label for="mulutLabioschizis" class="form-check-label">Labioschizis</label>
            </div>
        </div>
        <div class="col-md-3 mt-2 mb-3">
            <div class="form-check">
                <input type="radio" name="mulut" id="mulutGnatoschizis" class="form-check-input">
                <label for="mulutGnatoschizis" class="form-check-label">Gnatoschizis</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Abdomen</label>
        </div>
        <div class="col-md-1">
            <div class="form-check">
                <input type="radio" name="abdomen" id="abdomenSupel" class="form-check-input">
                <label for="abdomenSupel" class="form-check-label">Supel</label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-check">
                <input type="radio" name="abdomen" id="abdomenHizis" class="form-check-input">
                <label for="abdomenHizis" class="form-check-label">Hizis</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="abdomen" id="abdomenLabiopalatognatosc" class="form-check-input">
                <label for="abdomenLabiopalatognatosc" class="form-check-label">Labiopalatognatosc</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="abdomen" id="abdomenKembung" class="form-check-input">
                <label for="abdomenKembung" class="form-check-label">Kembung</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <input type="text" name="abdomen" class="form-control">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h5>Sistem Saraf Pusat</h5>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Kesadaran</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="kesadaran" id="kesadarabComposmentis" class="form-check-input">
                <label for="kesadarabComposmentis" class="form-check-label">Composmentis</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="kesadaran" id="kesadaranApatis" class="form-check-input">
                <label for="kesadaranApatis" class="form-check-label">Apatis</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="kesadaran" id="kesadaranSomnolent" class="form-check-input">
                <label for="kesadaranSomnolent" class="form-check-label">Somnolent</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="kesadaran" id="kesadaranSoporaComa" class="form-check-input">
                <label for="kesadaranSoporaComa" class="form-check-label">Sopora Coma</label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="kesadaran" id="kesadaranComa" class="form-check-input">
                <label for="kesadaranComa" class="form-check-label">Coma</label>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label>Pupil Mata</label>
        </div>
        <div class="col-md-5">
            <div class="form-check">
                <input type="radio" name="pupilMata" id="pupilTidakReaksi" class="form-check-input">
                <label for="pupilTidakReaksi" class="form-check-label">Tidak ada reaksi terhadap cahaya</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input type="radio" name="pupilMata" id="pupilReaksi" class="form-check-input">
                <label for="pupilReaksi" class="form-check-label">Ada reaksi terhadap cahaya</label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="pupilMata" id="pupilAnisokor" class="form-check-input">
                <label for="pupilAnisokor" class="form-check-label">Anisokor</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="pupilMata" id="pupilIsokor" class="form-check-input">
                <label for="pupilIsokor" class="form-check-label">Isokor</label>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label>Tangisan</label>
        </div>
        <div class="col-md-1">
            <div class="form-check">
                <input type="radio" name="tangisan" id="tangisanKuat" class="form-check-input">
                <label for="tangisanKuat" class="form-check-label">Kuat</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="tangisan" id="tangisanMelengking" class="form-check-input">
                <label for="tangisanMelengking" class="form-check-label">Melengking</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="tangisan" id="tangisanMerintih" class="form-check-input">
                <label for="tangisanMerintih" class="form-check-label">Merintih</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="tangisan" id="tidakMenangis" class="form-check-input">
                <label for="tidakMenangis" class="form-check-label">Tidak Menangis</label>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label>Ubun Ubun</label>
        </div>
        <div class="col-md-1">
            <div class="form-check">
                <input type="radio" name="ubunUbun" id="ubunDatar" class="form-check-input">
                <label for="ubunDatar" class="form-check-label">Datar</label>
            </div>
        </div>
        <div class="col-md-1 mr-3">
            <div class="form-check">
                <input type="radio" name="ubunUbun" id="ubunCekung" class="form-check-input">
                <label for="ubunCekung" class="form-check-label">Cekung</label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-check">
                <input type="radio" name="ubunUbun" id="ubunCembung" class="form-check-input">
                <label for="ubunCembung" class="form-check-label">Cembung</label>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label>Kepala</label>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="kepala" id="kepalaTidakKelainan" class="form-check-input">
                <label for="kepalaTidakKelainan" class="form-check-label">Tidak Kelainan</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="kepala" id="kepalaAnechepal" class="form-check-input">
                <label for="kepalaAnechepal" class="form-check-label">Anenchepal</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="kepala" id="kepalaCeptal" class="form-check-input">
                <label for="kepalaCeptal" class="form-check-label">Ceptal Hematoma</label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="kepala" id="kepalaHidrosepalus" class="form-check-input">
                <label for="kepalaHidrosepalus" class="form-check-label">Hidrosepalus</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="kepala" id="kepalaCaput" class="form-check-input">
                <label for="kepalaCaput" class="form-check-label">Caput Succedenium</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="kepala" id="kepalaPerdarahan" class="form-check-input">
                <label for="kepalaPerdarahan" class="form-check-label">Perdarahan venticular</label>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label>Tonus Otot</label>
        </div>
        <div class="col-md-1">
            <div class="form-check">
                <input type="radio" name="tonus" id="tonusAktif" class="form-check-input">
                <label for="tonusAktif" class="form-check-label">Aktif</label>
            </div>
        </div>
        <div class="col-md-1 mr-3">
            <div class="form-check">
                <input type="radio" name="tonus" id="tonusLemah" class="form-check-input">
                <label for="tonusLemah" class="form-check-label">Lemah</label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-check">
                <input type="radio" name="tonus" id="tonusParalisis" class="form-check-input">
                <label for="tonusParalisis" class="form-check-label">Paralisis</label>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label>Kejang</label>
        </div>
        <div class="col-md-1 mr-3">
            <div class="form-check">
                <input type="radio" name="kejang" id="kejangSubtle" class="form-check-input">
                <label for="kejangSubtle" class="form-check-label">Subtle</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="kejang" id="kejangTonik" class="form-check-input">
                <label for="kejangTonik" class="form-check-label">Tonik/Klonik</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input type="radio" name="kejang" id="tidakkejang" class="form-check-input">
                <label for="tidakkejang" class="form-check-label">Tidak ada kejang</label>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h5>Sistem Endoktrin</h5>
        </div>
        <div class="col-md-3">
            <label>Gula Darah</label>
        </div>
        <div class="col-md-6">
            <input type="text" name="gulaDarah" class="form-control">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <label>Elektrolit :</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="elektrolitNatrium" class="form-control" placeholder="Natrium">
        </div>
        <div class="col-md-4">
            <input type="text" name="elektrolitChlorida" class="form-control" placeholder="Chlorida">
        </div>
        <div class="col-md-4">
            <input type="text" name="elektrolitKalium" class="form-control" placeholder="Kalium">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h5>Sistem Integumen</h5>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Warna Kulit</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenWarnaKulit" class="form-check-input" id="warnaKemerahan">
                <label for="warnaKemerahan" class="form-check-label">Kemerahan</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenWarnaKulit" class="form-check-input" id="warnaPucat">
                <label for="warnaPucat" class="form-check-label">Pucat</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenWarnaKulit" class="form-check-input" id="warnaIkterus">
                <label for="warnaIkterus" class="form-check-label">Ikterus</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Turgor Kulit</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenTurgorKulit" class="form-check-input" id="elastis">
                <label for="elastis" class="form-check-label">Elastis</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenTurgorKulit" class="form-check-input" id="tidakElastis">
                <label for="tidakElastis" class="form-check-label">Tidak Elastis</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Integritas Kulit</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenIntegritasKulit" class="form-check-input" id="utuh">
                <label for="utuh" class="form-check-label">Utuh</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenIntegritasKulit" class="form-check-input" id="integritaskering">
                <label for="integritaskering" class="form-check-label">Kering</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenIntegritasKulit" class="form-check-input" id="integritasRash">
                <label for="integritasRash" class="form-check-label">Rash</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Tali Pusat</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenTaliPusat" class="form-check-input" id="taliPusatAda">
                <label for="taliPusatAda" class="form-check-label">Ada</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenTaliPusat" class="form-check-input" id="taliPusatTidakAda">
                <label for="taliPusatTidakAda" class="form-check-label">Tidak Ada</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Putung Umbilicial</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenUmbilicial" class="form-check-input" id="umbilicialKering">
                <label for="umbilicialKering" class="form-check-label">Kering</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenUmbilicial" class="form-check-input" id="umbilicialBasah">
                <label for="umbilicialBasah" class="form-check-label">Basah</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenUmbilicial" class="form-check-input" id="umbilicialBauBusuk">
                <label for="umbilicialBauBusuk" class="form-check-label">Bau Busuk</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenUmbilicial" class="form-check-input" id="umbilicialKemerahan">
                <label for="umbilicialKemerahan" class="form-check-label">Kemerahan</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Abdomen</label>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input type="radio" name="integumenAbdomen" class="form-check-input" id="abdomenTidakKelainan">
                <label for="abdomenTidakKelainan" class="form-check-label">Tidak Ada Kelainan</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenAbdomen" class="form-check-input" id="abdomenLukaOperasi">
                <label for="abdomenLukaOperasi" class="form-check-label">Luka Operasi</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="integumenAbdomen" class="form-check-input" id="abdomenKolostomi">
                <label for="abdomenKolostomi" class="form-check-label">Kolostomi</label>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h5>Sistem Genetalia</h5>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <label>A. Perempuan</label>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Vagina</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaVagina" id="vaginaBersih" class="form-check-input">
                <label for="vaginaBersih" class="form-check-label">Bersih</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaVagina" id="vaginaKotor" class="form-check-input">
                <label for="vaginaKotor" class="form-check-label">Kotor</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Pseudomenstruasi</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaPseudomenstruasi" id="yaPseudomenstruasi" class="form-check-input">
                <label for="yaPseudomenstruasi" class="form-check-label">Ya</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaPseudomenstruasi" id="tidakPseudomenstruasi"
                    class="form-check-input">
                <label for="tidakPseudomenstruasi" class="form-check-label">Tidak</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Kateter</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaKateter" id="yaKateter" class="form-check-input">
                <label for="yaKateter" class="form-check-label">Ya</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaKateter" id="tidakKateter" class="form-check-input">
                <label for="tidakKateter" class="form-check-label">Tidak</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Labia, Prominen</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaLabina" id="yaLabina" class="form-check-input">
                <label for="yaLabina" class="form-check-label">Ya</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaLabina" id="tidakLabina" class="form-check-input">
                <label for="tidakLabina" class="form-check-label">Tidak</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <label>B. Laki-Laki</label>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Vagina</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaPreptiun" id="preptiumBersih" class="form-check-input">
                <label for="preptiumBersih" class="form-check-label">Bersih</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaPreptiun" id="preptiumKotor" class="form-check-input">
                <label for="preptiumKotor" class="form-check-label">Kotor</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <label>Hipospadia</label>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaHipospadia" id="yaHipospadia" class="form-check-input">
                <label for="yaHipospadia" class="form-check-label">Ya</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" name="genetaliaHipospadia" id="tidakHipospadia" class="form-check-input">
                <label for="tidakHipospadia" class="form-check-label">Tidak</label>
            </div>
        </div>
    </div>

@endsection

@push('js')
	<script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	{{-- <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script> --}}
	<script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/deznav-init.js') }}"></script>
	<!-- Apex Chart -->
	<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
	<!-- Dashboard 1 -->
	<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
@endpush

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<script>

    $(function(){

        $('#sumberLainya').focus(function(e) {
    e.preventDefault();
    $("input[type=radio][name=sumberData]").prop('checked', false);
});

$('#transportasiLain').focus(function(e) {
    e.preventDefault();
    $("input[type=radio][name=transportasi]").prop('checked', false);
});

$('#agamaLain').focus(function(e) {
    e.preventDefault();
    $("input[type=radio][name=agama]").prop('checked', false);
});

function getSkalaNyeri() {
    let arr = $("[name='skalaNyeri']");
    let total = 0;
    for (let i = 0; i < arr.length; i++) {
        let score = parseInt(arr[i].value);
        total += score;
    }
    return total;
}
for (let i = 0; i < 7; i++) {
    $('#skala' + i).change(function(e) {
        e.preventDefault();
        $('#scoreSkala' + i).val($(this).val());
        $('#totalSkalaNyeri').val(getSkalaNyeri());
    });
}

$(document).keyup(function(e) {
    let total1menit = 0;
    let total5menit = 0;
    for (let i = 1; i < 6; i++) {
        let score1 = parseInt($('#apgarSatuMenit' + i).val());
        let score2 = parseInt($('#apgarLimaMenit' + i).val());
        total1menit += score1;
        total5menit += score2;
    }
    $('#totalApgarSatuMenit').val(total1menit + " Skor");
    $('#totalApgarLimaMenit').val(total5menit + " Skor");
});

function getSkoreDowne() {
    let select = $("[name='skorDowne']");
    let total = 0;
    for (let i = 0; i < select.length; i++) {
        let score = parseInt(select[i].value);
        total += score;
        if (total < 3) {
            $('#evaluasiDowne1').prop('checked', true);
        } else if (total >= 3 && total < 6) {
            $('#evaluasiDowne2').prop('checked', true);
        } else {
            $('#evaluasiDowne3').prop('checked', true);
        }
    }
    return total;
}
for (let i = 0; i < 6; i++) {
    $('#skorDowne' + i).change(function(e) {
        e.preventDefault();
        $('#totalSkorDowne').val(getSkoreDowne());
    });
}

    });

</script>
