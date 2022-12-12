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
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="form-group text-center">
                    <label>Riwayat Panas</label>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="riwayatPanas" id="riwayatPanas">
                        <label class="form-check-label" for="riwayatPanas">
                            Ya
                        </label>
                    </div>
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="riwayatPanas" id="riwayatPanas1">
                        <label class="form-check-label" for="riwayatPanas1">
                            Tidak
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="form-group text-center">
                    <label>Batuk:</label>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="batuk" id="batuk">
                        <label class="form-check-label" for="batuk">
                            Ya
                        </label>
                    </div>
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="batuk" id="batuk1">
                        <label class="form-check-label" for="batuk1">
                            Tidak
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="keteranganRiwayat" id="keteranganRiwayat">
                    <label class="form-check-label" for="keteranganRiwayat">
                        Infeksius / TB
                    </label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="radio" name="keteranganRiwayat" id="keteranganRiwayat1">
                    <label class="form-check-label" for="keteranganRiwayat1">
                        Regular
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-11">
                <div class="form-group d-flex justify-content-around" id="kasusPasien">
                    <div class="form-check">
                        <input class="form-check-input kasusPasien" type="radio" name="kasusPasien"
                            id="ponekNeonatus" value="Ponek Neonatus">
                        <label class="form-check-label" for="ponekNeonatus">
                            Ponek Neonatus
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kasusPasien" id="neonatus"
                            value="Neonatus">
                        <label class="form-check-label" for="neonatus">
                            Neonatus
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kasusPasien" id="geriatriKasus"
                            value="Geriatri Kasus">
                        <label class="form-check-label" for="geriatriKasus">
                            Geriatri Kasus
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kasusPasien" id="psikiatri"
                            value="Psikiatri">
                        <label class="form-check-label" for="psikiatri">
                            Psikiatri
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-1" id="buttonCancel"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <label>Cara Datang :</label>
            </div>
            <div class="col-md-9">
                <select name="caraDatang" id="" class="form-control">
                    <option style="display: none">Pilih Cara Datang</option>
                    <option value="Jalan">Jalan</option>
                    <option value="Terlentang">Terlentang</option>
                    <option value="Digendong">Digendong</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <label>Jenis Kasus :</label>
            </div>
            <div class="col-md-9 d-flex justify-content-center align-items-center">
                <div class="form-check mr-5">
                    <input class="form-check-input" type="radio" name="jenisKasus" id="jenisKasus">
                    <label class="form-check-label" for="jenisKasus">
                        Non Trauma
                    </label>
                </div>
                <div class="form-check ml-5">
                    <input class="form-check-input" type="radio" name="jenisKasus" id="jenisKasus1">
                    <label class="form-check-label" for="jenisKasus1">
                        Trauma
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <label>Kategori Triase :</label>
            </div>
        </div>
    </div>
    <div class="col-md-3 text-center">
        <div class="card">
            <div class="card-body">
                <label>Merah</label>
            </div>
        </div>
    </div>
    <div class="col-md-3 text-center">
        <div class="card">
            <div class="card-body">
                <label>Kuning</label>
            </div>
        </div>
    </div>
    <div class="col-md-3 text-center">
        <div class="card">
            <div class="card-body">
                <label>Hijau</label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body d-flex justify-content-start align-items-center">
                <label>Pernafasan<br>(airway)</label>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="airwayMerah" id="airwayMerah">
                    <label class="form-check-label" for="airwayMerah">
                        Sumbatan Total
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="airwayMerah" id="airwayMerah1">
                    <label class="form-check-label" for="airwayMerah1">
                        Sumbatan Sebagian
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check justify-content-center align-items-center">
                    <input class="form-check-input" type="radio" name="airwayKuning" id="airwayKuning">
                    <label class="form-check-label" for="airwayKuning">
                        Bebas
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body d-flex justify-content-start align-items-center">Pernafasan Breathing</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingRed"
                        id="pernafasanBreathingRed">
                    <label class="form-check-label" for="pernafasanBreathingRed">
                        Henti Nafas / Hipoventilasi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingRed"
                        id="pernafasanBreathingRed1">
                    <label class="form-check-label" for="pernafasanBreathingRed1">
                        Distress Pernafasan Berat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingRed"
                        id="pernafasanBreathingRed2">
                    <label class="form-check-label" for="pernafasanBreathingRed2">
                        Tidak Mampu Bicara
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingKuning"
                        id="pernafasanBreathingKuning">
                    <label class="form-check-label" for="pernafasanBreathingKuning">
                        Nafas Spontan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingKuning"
                        id="pernafasanBreathingKuning1">
                    <label class="form-check-label" for="pernafasanBreathingKuning1">
                        Komunikasi Dengan Baik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingKuning"
                        id="pernafasanBreathingKuning2">
                    <label class="form-check-label" for="pernafasanBreathingKuning2">
                        Distress Pernafasan Ringan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingKuning"
                        id="pernafasanBreathingKuning3">
                    <label class="form-check-label" for="pernafasanBreathingKuning3">
                        Bicara Terbata-Bata
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingHijau"
                        id="pernafasanBreathingHijau">
                    <label class="form-check-label" for="pernafasanBreathingHijau">
                        Nafas Spontan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingHijau"
                        id="pernafasanBreathingHijau1">
                    <label class="form-check-label" for="pernafasanBreathingHijau1">
                        Distress Pernafasan Tidak Ada
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pernafasanBreathingHijau"
                        id="pernafasanBreathingHijau2">
                    <label class="form-check-label" for="pernafasanBreathingHijau2">
                        Bicara Dengan Baik
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body d-flex justify-content-start align-items-center">
                <label>Sirkulasi (Circulation)</label>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiMerah" id="sirkulasiMerah">
                    <label class="form-check-label" for="sirkulasiMerah">
                        Henti Jantung
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiMerah" id="sirkulasiMerah1">
                    <label class="form-check-label" for="sirkulasiMerah1">
                        Nadi Tidak Teraba
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiMerah" id="sirkulasiMerah2">
                    <label class="form-check-label" for="sirkulasiMerah2">
                        Gangguan
                        Hemodinamik Berat
                        (akral dingin, pucat,
                        kebiruan)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiMerah" id="sirkulasiMerah3">
                    <label class="form-check-label" for="sirkulasiMerah3">
                        Berdarah Berat
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiKuning" id="sirkulasiKuning">
                    <label class="form-check-label" for="sirkulasiKuning">
                        Nadi Teraba Normal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiKuning" id="sirkulasiKuning1">
                    <label class="form-check-label" for="sirkulasiKuning1">
                        Nadi Teraba
                        Abnormal
                        (Bradikardi, Takikardi,
                        Lemah)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiKuning" id="sirkulasiKuning2">
                    <label class="form-check-label" for="sirkulasiKuning2">
                        Gangguan
                        Hemodinamik
                        Ringan
                        (pucat, akral hangat /
                        dingin)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiKuning" id="sirkulasiKuning3">
                    <label class="form-check-label" for="sirkulasiKuning3">
                        Tanda Dehidrasi (+)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiKuning" id="sirkulasiKuning4">
                    <label class="form-check-label" for="sirkulasiKuning4">
                        Tanda Pendarahan
                        Ringan
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiHijau" id="sirkulasiHijau">
                    <label class="form-check-label" for="sirkulasiHijau">
                        Nadi Teraba Normal
                        Sesuai Usia
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiHijau" id="sirkulasiHijau1">
                    <label class="form-check-label" for="sirkulasiHijau1">
                        Tanpa Gangguan
                        Hemodinamik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sirkulasiHijau" id="sirkulasiHijau2">
                    <label class="form-check-label" for="sirkulasiHijau2">
                        Tanda Dehidrasi (-)
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body d-flex justify-content-start align-items-center">
                <label>Kesadaran :</label>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kesadaranMerah" id="kesadaranMerah">
                    <label class="form-check-label" for="kesadaranMerah">
                        GCS < 7 </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kesadaranKuning" id="kesadaranKuning">
                    <label class="form-check-label" for="kesadaranKuning">
                        GCS < 8 - 14 </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kesadaranKuning" id="kesadaranKuning1">
                    <label class="form-check-label" for="kesadaranKuning1">
                        GCS 15
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kesadaranHijau" id="kesadaranHijau">
                    <label class="form-check-label" for="kesadaranHijau">
                        GCS 15
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <label>Respon Time :</label>
            </div>
            <div class="col-md-3">
                <div class="form-check mr-5">
                    <input class="form-check-input" type="radio" name="responTime" id="responTime">
                    <label class="form-check-label" for="responTime">
                        Immediate
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mr-5">
                    <input class="form-check-input" type="radio" name="responTime" id="responTime1">
                    <label class="form-check-label" for="responTime1">
                        45 Menit
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="responTime" id="responTime2">
                    <label class="form-check-label" for="responTime2">
                        60 Menit
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <label>Penempatan Ruang :</label>
            </div>
            <div class="col-md-3">
                <div class="form-check mr-5">
                    <input class="form-check-input" type="radio" name="PenempatanRuang" id="PenempatanRuang">
                    <label class="form-check-label" for="PenempatanRuang">
                        R.Merah / R.Resusitasi
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mr-5">
                    <input class="form-check-input" type="radio" name="PenempatanRuang" id="PenempatanRuang1">
                    <label class="form-check-label" for="PenempatanRuang1">
                        R.Kuning / Non Resusitasi
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="PenempatanRuang" id="PenempatanRuang2">
                    <label class="form-check-label" for="PenempatanRuang2">
                        R.Hijau / Rawat Jalan
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusEmergency" id="statusEmergency">
                    <label class="form-check-label" for="statusEmergency">
                        True Emergency (Kalau Merah Atau Kuning)
                    </label>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusEmergency" id="statusEmergency1">
                    <label class="form-check-label" for="statusEmergency1">
                        False Emergency (Kalau Hijau)
                    </label>
                </div>
            </div>
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

        $('#kasusPasien').change(function(e) {
    e.preventDefault();
    let check = $('input:radio[name="kasusPasien"]').val();
    switch (check) {
        case "Ponek Neonatus":
            $('#cancelPilih').remove();
            $('#buttonCancel').append(
                '<button type="button" id="cancelPilih" class="btn btn-danger">Batal</button>'
            );
            break;
        case "Neonatus":
            $('#cancelPilih').remove();
            $('#buttonCancel').append(
                '<button type="button" id="cancelPilih" class="btn btn-danger">Batal</button>'
            );
            break;
        case "Geriatri Kasus":
            $('#cancelPilih').remove();
            $('#buttonCancel').append(
                '<button type="button" id="cancelPilih" class="btn btn-danger">Batal</button>'
            );
            break;
        case "Psikiatri":
            $('#cancelPilih').remove();
            $('#buttonCancel').append(
                '<button type="button" id="cancelPilih" class="btn btn-danger">Batal</button>'
            );
            break;
    }
});
$(document).on('click', '#cancelPilih', function(e) {
    e.preventDefault();
    let ponekNeonatus = document.getElementById("ponekNeonatus");
    let neonatus = document.getElementById("neonatus");
    let geriatriKasus = document.getElementById("geriatriKasus");
    let psikiatri = document.getElementById("psikiatri");
    ponekNeonatus.checked = false;
    neonatus.checked = false;
    geriatriKasus.checked = false;
    psikiatri.checked = false;
    $('#cancelPilih').remove();
});

    });


</script>
