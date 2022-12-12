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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@endpush

@section('content')

<div class="container-fluid">
    <h3 class="text-center alert" style="background: #3c096c; color: #fdfffc;"> EDUKASI PASIEN DAN KELUARGA PAGE 2 </h3>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="input-group mb-3">
                    <h5> Kemampuan dan Kemauan Edukasi </h5>
                </div>
                <div class="input-group mb-3">
                    <div class="col-md-5">
                        <h6> Nama Panggilan </h6>
                        <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Silahkan isi disini">
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="col">
                                 <h6> Kesulitan Komunikasi </h6>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sulit_komunikasi" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Tidak Ada
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sulit_komunikasi" value="sulit_1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                         Ada, Jelaskan
                                    </label>
                                    <input type="text" class="form-control" id="input_kom1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="col-md-5">
                        <h6> Agama </h6>
                        <input type="text" class="form-control" name="agama" id="agama" placeholder="Silahkan isi disini">
                    </div>
                    <div class="col-md-5">
                        <div class="input-group mb-6">
                            <div class="col">
                                <h6> Bahasa yang digunakan </h6>
                                <input type="text" class="form-control" name="bahasa" id="bahasa" placeholder="Silahkan isi disini">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="col-md-5">
                        <h6> Nilai - nilai yang dianut </h6>
                        <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Silahkan isi disini">
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="col">
                                <h6> Penterjemah </h6>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="penterjemah2" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Perlu
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="penterjemah2" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Tidak Perlu
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="penterjemah2" value="lain1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Lainnya
                                    </label>
                                    <input type="text" class="form-control" id="input_lain1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="col-md-5">
                        <h6> Pendidikan </h6>
                        <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Silahkan isi disini">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="input-group mb-3">
                    <div class="col">
                        <i style="font-weight: 500"> identifikasi dan berikan ( ✓ ) pada hambatan yang dapat mempengaruhi proses dan hasil edukasi </i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Tidak ada Hambatan Edukasi
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Gangguan Penglihatan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Gangguan Proses Pikir
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Motivasi Belajar
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Gangguan Pendengaran
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Hambatan Bahasa
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Batasan Jasmani dan Kognitif
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Gangguan Emosional
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Kemampuan Membaca
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="hambatan_edukasi2">
                            <label class="form-check-label">
                                Hambatan Lainnya
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="col">
                        <h6> Kesediaan Pasien/Keluarga untuk menerima Informasi yang di berikan </h6>
                    </div>
                </div>
                <div class="input-group mb-5">
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kesediaan_pasien" value="">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Perlu
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kesediaan_pasien" value="">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Tidak Perlu
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="input-group">
                    <h5> kebutuhan Edukasi </h5>
                </div>
                <div class="input-group">
                    <div class="col">
                        <i> * Identifikasi dan Berikan (✓) Pada Kebutuhan Edukasi yang di butuhkan Pasien dan Keluarga </i>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="col">
                        <i> * Pada Keadaan di mana Pasien memerlukan Edukasi suatu Bidang yang Khusus, Dokter Penanggung jawab Pasien akan mementukan kebutuhan dan program Edukasi yang sesuai </i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Bidang Disiplin</h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <select class="form-select" name="bidang_disiplin2" aria-label="Default select example">
                                            <option value="" selected disabled> Silahkan pilih disini </option>
                                            <option value="medis"> Medis </option>
                                            <option value="keperawatan"> Keperawatan </option>
                                            <option value="dokter gizi/ahli gizi"> Dokter Gizi/Ahli Gizi </option>
                                            <option value="farmasi"> Farmasi </option>
                                            <option value="rehabilitas medis"> Rehabilitas Medis </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Program Edukasi </h6>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Kondisi Medis dan Diagnosa
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Rencana Perawatan dan Pengobatan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Pengisian Informed Consent
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Perawatan Luka
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Perawatan Lanjutan Setelah Pasien Pulang
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Penggunaan Alat Medis
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Manajemen Nyeri
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Teknik Cuci Tangan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Diet/Nutrisi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Penggunaan Obat secara Aman dan Efektif
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Interaksi Obat dan Makanan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Teknik Rehabilitasi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="progam_edukasi2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Resiko Pasien Jatuh
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="lainnya edukasi" name="progam_edukasi2" id="lain_2">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Edukasi Lainnya
                                                    </label>
                                                    <input type="text" class="form-control" id="edukasi_lain2">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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

    $('input[name="sulit_komunikasi"]').click(function(e) {
        if(e.target.value === 'sulit_1') {
            $('#input_kom1').show();
        } else {
            $('#input_kom1').hide();
            $('#input_kom1').val('');
        }
    });
        $('#input_kom1').hide();


    $('input[name="penterjemah2"]').click(function(e) {
        if(e.target.value === 'lain1') {
            $('#input_lain1').show();
        } else {
            $('#input_lain1').hide();
            $('#input_lain1').val('');
        }
    });
        $('#input_lain1').hide();


    $('#edukasi_lain2').hide();

    $('#lain_2').on("click",function () {
        $("#edukasi_lain2").toggle(this.checked);
        $('#edukasi_lain2').val('');
    });

});

</script>
