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
    <h3 class="text-center alert" style="background: #3c096c; color: #fdfffc;" > IDENTIFIKASI BAYI </h3>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="input-group">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <h6> Nama Ibu </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nama_ibu" id="nama_ibu">
                                    </div>
                                </td>
                                <td>
                                    <h6> Kelamin Bayi </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="kelamin_bayi" id="kelamin_bayi">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6> Nama Ayah </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah">
                                    </div>
                                </td>
                                <td>
                                    <h6> Warna Gelang </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="warna_gelang" id="warna_gelang">
                                    </div>
                                </td>
                            </tr>
                                <td>
                                    <h6> No.Register Ibu </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nomor_register" id="nomor_register">
                                    </div>
                                </td>
                                <td>
                                    <h6> Berat Badan </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="berat_badan" id="berat_badan">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6> Nama Bayi </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nama_bayi" id="nama_bayi">
                                    </div>
                                </td>
                                <td>
                                    <h6> Panjang Badan </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="panjang_badan" id="panjang_badan">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6> Tanggal Lahir </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                                    </div>
                                </td>
                                <td>
                                    <h6> No. Register Bayi </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="register_bayi" id="register_bayi">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6> Jam Lahir </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="time" class="form-control" name="jam_lahir" id="jam_lahir">
                                    </div>
                                </td>
                                <td>
                                    <h6> Apgar Score </h6>
                                </td>
                                <td style="background: #edf2f4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="apgar_score" id="apgar_score">
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
