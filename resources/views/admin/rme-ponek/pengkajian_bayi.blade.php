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
    <h3 class="text-center alert" style="background: #3c096c; color: #fdfffc;"> PENGKAJIAN AWAL BAYI DI PONEK </h3>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="input-group mb-3">
                    <h5> Pengkajian Perawat </h5>
                </div>
                <div class="input-group mb-3">
                    <div class="col">
                        <h6> Sumber Data </h6>
                        <div class="input-group">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sumber_data" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Pasien
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sumber_data" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Keluarga
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sumber_data" value="sumber data">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Lainnya
                                    </label>
                                    <input type="text" class="form-control" id="id_1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="col">
                        <h6> Rujukan </h6>
                        <div class="input-group">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rujukan_ponek" value="rs">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        RS
                                    </label>
                                    <input type="text" class="form-control" id="id_2">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rujukan_ponek" value="puskesmas">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Puskesmas
                                    </label>
                                    <input type="text" class="form-control" id="id_3">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rujukan_ponek" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Datang Sendiri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rujukan_ponek" value="diantar">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Diantar Oleh
                                    </label>
                                    <input type="text" class="form-control" id="id_6">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rujukan_ponek" value="dr">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        dr.
                                    </label>
                                    <input type="text" class="form-control" id="id_4">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rujukan_ponek" value="lainnya">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Lainnya
                                    </label>
                                    <input type="text" class="form-control" id="id_5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="col">
                        <h6> Transportasi waktu Datang </h6>
                        <div class="input-group">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="transportasi" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Ambulance
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="transportasi" value="lain2">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Lainnya
                                    </label>
                                    <input type="text" class="form-control" id="id_7">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="col">
                        <h6> Obat di Bawa dari Rumah </h6>
                        <div class="input-group">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="obat_rumah" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Tidak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="obat_rumah" value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Ya
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="col">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6> Nama Keluarga yang Bisa dihubungi </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="nama_keluarga" id="" placeholder="Isi disini">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6> Alamat </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="alamat" id="" placeholder="Isi disini">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6> Nomor Telephone </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="no_tlpn" id="" placeholder="Isi disini">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6> Agama </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="agama_ponek" id="" placeholder="Isi disini">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6> Keadaan Bayi waktu masuk </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="keadaan_bayi" id="" placeholder="Isi disini">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="col">
                        <h6> Riwayat Ibu </h6>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6> Riwayat Kehamilan </h6>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"> G </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Isi disini" name="riwayat_kehamilan">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"> A </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Isi disini" name="riwayat_kehamilan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"> P </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Isi disini" name="riwayat_kehamilan">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"> T </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Isi disini" name="riwayat_kehamilan">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6> Usia Gestasi </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="usia_gestasi" id="" placeholder="Isi disini">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6> Riwayat Penyakit Ibu </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="riwayat_ibu" id="" placeholder="Isi disini">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6> Sebelum Hamil </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="sebelum_hamil" id="" placeholder="Isi disini">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6> Sesudah Hamil </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <div class="col">
                                            <input type="text" class="form-control" name="sesudah_hamil" id="" placeholder="Isi disini">
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

    $('input[name="sumber_data"]').click(function(e) {
            if(e.target.value === 'sumber data') {
                $('#id_1').show();
            } else {
                $('#id_1').hide();
                $('#id_1').val('');
            }
        });
            $('#id_1').hide();


    $('input[name="rujukan_ponek"]').click(function(e) {
            if(e.target.value === 'rs') {
                $('#id_2').show();
            } else {
                $('#id_2').hide();
                $('#id_2').val('');
            }
        });
            $('#id_2').hide();


    $('input[name="rujukan_ponek"]').click(function(e) {
            if(e.target.value === 'puskesmas') {
                $('#id_3').show();
            } else {
                $('#id_3').hide();
                $('#id_3').val('');
            }
        });
            $('#id_3').hide();


    $('input[name="rujukan_ponek"]').click(function(e) {
            if(e.target.value === 'dr') {
                $('#id_4').show();
            } else {
                $('#id_4').hide();
                $('#id_4').val('');
            }
        });
            $('#id_4').hide();


    $('input[name="rujukan_ponek"]').click(function(e) {
            if(e.target.value === 'lainnya') {
                $('#id_5').show();
            } else {
                $('#id_5').hide();
                $('#id_5').val('');
            }
        });
            $('#id_5').hide();


    $('input[name="rujukan_ponek"]').click(function(e) {
            if(e.target.value === 'diantar') {
                $('#id_6').show();
            } else {
                $('#id_6').hide();
                $('#id_6').val('');
            }
        });
            $('#id_6').hide();


    $('input[name="transportasi"]').click(function(e) {
            if(e.target.value === 'lain2') {
                $('#id_7').show();
            } else {
                $('#id_7').hide();
                $('#id_7').val('');
            }
        });
            $('#id_7').hide();

});

</script>
