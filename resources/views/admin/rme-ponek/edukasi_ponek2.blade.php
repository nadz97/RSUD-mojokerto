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

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="input-group mb-4">
                    <div class="col">
                        <table class="table table-bordered">
                            <thead style="background: #fae0e4">
                                <th> Siapa Yang Diedukasi  </th>
                                <th> Metode Edukasi </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="yang_diedukasi" value="">
                                            <label class="form-check-label">
                                                Pasien
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="yang_diedukasi" value="">
                                            <label class="form-check-label">
                                                Ayah/Ibu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="yang_diedukasi" value="">
                                            <label class="form-check-label">
                                                Suami/Istri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="yang_diedukasi" value="">
                                            <label class="form-check-label">
                                                Anak
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="materi_ponek" value="">
                                            <label class="form-check-label">
                                                Diskusi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="materi_ponek" value="">
                                            <label class="form-check-label">
                                                Peragaan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="materi_ponek" value="">
                                            <label class="form-check-label">
                                                Selebaran
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="materi_ponek" value="">
                                            <label class="form-check-label">
                                                Audo Visual
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Respon </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected> Pilih Disini </option>
                                            <option value="tidak respon"> Tidak respon sama sekali (tak ada antusiasme dan keinginan belajar) </option>
                                            <option value="tidak paham"> Tidak paham (ingin belajar tapi kesulitan mengerti) </option>
                                            <option value="paham"> Paham hal yang diajarkan, tapi tidak bisa menjelaskan sendiri </option>
                                            <option value="dapat menjelaskan"> Dapat menjelaskan apa yang diajarkan, tapi harus dibantu edukator </option>
                                            <option value="dapat menjelaskan tanpa bantuan"> Dapat menjelaskan apa yang telah diajarkan tanpa dibantu </option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <h5> CATATAN EDUKASI </h5>
                </div>
                <div class="input-group mb-2">
                    <div class="col">
                        <table  class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Tanggal </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <input type="date" class="form-control" name="catatan_edukasi">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Nama Edukator </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <input type="text" class="form-control" name="catatan_edukasi" placeholder="Isi Bila Perlu">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Siapa yang diedukasi </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <input type="text" class="form-control" name="catatan_edukasi" placeholder="Isi Bila Perlu">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Edukasi yang diberikan </h6>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Penjelasan Hak dan Kewajiban Pasien
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Kondisi Medis dan diagnosa
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Perawatan Lanjutan setelah Pasien pulang
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Pengguanaan alat Medis
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Mengajarkan Tehnik Cuci Tangan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Penjelasan Resiko Jatuh dan Jalur Evakuasi
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Penjelasan Penggunaan Obat
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Penjelasan Interaksi Obat dengan Makanan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="lain1" name="catatan_edukasi" id="input_5">
                                                    <label class="form-check-label">
                                                        Lainnya
                                                    </label>
                                                    <input type="text" class="form-control" id="id_lain">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Rencana Perawatan dan Pengobatan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="catatan1" name="catatan_edukasi" id="input_1">
                                                    <label class="form-check-label">
                                                        Penjelasan Inform consent....
                                                    </label>
                                                    <input type="text" class="form-control" id="id_inform">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Pemberian gelang Identitas
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Penjelasan manajemen Nyeri
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="catatan2" name="catatan_edukasi" id="input_2">
                                                    <label class="form-check-label">
                                                        Penjelasan Tindakan....
                                                    </label>
                                                    <input type="text" class="form-control" id="id_tindakan">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="catatan3" name="catatan_edukasi" id="input_3">
                                                    <label class="form-check-label">
                                                        Penjelasan Diet/Nutrisi....
                                                    </label>
                                                    <input type="text" class="form-control" id="id_nutrisi">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="catatan_edukasi">
                                                    <label class="form-check-label">
                                                        Penjelasan Efek Samping Obat
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="catatan4" name="catatan_edukasi" id="input_4">
                                                    <label class="form-check-label">
                                                        Penjelasan Tehnik Rehabilitasi Medik....
                                                    </label>
                                                    <input type="text" class="form-control" id="id_rehabilitasi">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Metode Edukasi </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <input type="text" class="form-control" name="catatan_edukasi" placeholder="Isi Bila Perlu">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background: #f6f4d2">
                                        <h6> Respon </h6>
                                    </td>
                                    <td style="background: #edf2f4">
                                        <input type="text" class="form-control" name="catatan_edukasi" placeholder="Isi Bila Perlu">
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


    $('#id_inform').hide();

    $("#input_1").on("click",function() {
        $("#id_inform").toggle(this.checked);
        $('#id_inform').val('');
    });


    $('#id_tindakan').hide();

    $("#input_2").on("click",function() {
        $("#id_tindakan").toggle(this.checked);
        $('#id_tindakan').val('');
    });


    $('#id_nutrisi').hide();

    $("#input_3").on("click",function() {
        $("#id_nutrisi").toggle(this.checked);
        $('#id_nutrisi').val('');
    });
        $('#id_nutrisi').hide();


    $('#id_rehabilitasi').hide();

    $("#input_4").on("click",function() {
        $("#id_rehabilitasi").toggle(this.checked);
        $('#id_rehabilitasi').val('');
    });


    $('#id_lain').hide();

    $("#input_5").on("click",function() {
        $("#id_lain").toggle(this.checked);
        $('#id_lain').val('');
    });

});

</script>
