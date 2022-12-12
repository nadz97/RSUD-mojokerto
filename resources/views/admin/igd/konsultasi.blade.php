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
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hober">
                    <thead>
                        <tr class="text-center">
                            <th>Konsul Dokter DPJP <br> Tanda Tangan & Nama Terang Dokter DPJP</th>
                            <th>Jawaban Konsultan <br> Tanda Tangan & Nama Terang Konsultan</th>
                            <th><button type="button" id="tambahKonsul" class="btn btn-success">+</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="appendKonsul">
                        <tr>
                            <td>
                                <h3>Kepada Yth. Teman Sejawat :</h3>
                                <input type="text" name="namaKonsul[]" class="form-control"
                                    placeholder="Nama Dokter Konselen....">
                                <textarea name="isiKonsul[]" cols="30" rows="10" placeholder="Isi Konsultasi"
                                    class="form-control mt-3"></textarea>
                            </td>
                            <td>
                                <h3>Yth. Teman Sejawat :</h3>
                                <input type="text" name="dokterKonsul[]" class="form-control"
                                    placeholder="Nama Dokter....">
                                <textarea name="jawabKonsul[]" cols="30" rows="10" placeholder="Jawaban Konsultasi"
                                    class="form-control mt-3"></textarea>
                            </td>
                            <td><button type="button" id="hapusKonsul" class="btn btn-danger">-</button></td>
                        </tr>
                    </tbody>
                </table>
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

        $(document).on('click', '#tambahKonsul', function (e) {
    e.preventDefault();
    $('#appendKonsul').append(`<tr>
                        <td><h3>Kepada Yth. Teman Sejawat :</h3><input type="text" name="namaKonsul[]" class="form-control" placeholder="Nama Dokter Konselen...."><textarea name="isiKonsul[]" cols="30" rows="10" placeholder="Isi Konsultasi" class="form-control mt-3"></textarea></td>
                        <td><h3>Yth. Teman Sejawat :</h3><input type="text" name="dokterKonsul[]" class="form-control" placeholder="Nama Dokter...."><textarea name="jawabKonsul[]" cols="30" rows="10" placeholder="Jawaban Konsultasi" class="form-control mt-3"></textarea></td>
                        <td><button type="button" id="hapusKonsul" class="btn btn-danger">-</button></td>
                    </tr>`);
});
$(document).on('click', '#hapusKonsul', function (e) {
    e.preventDefault();
    $(this).closest("tr").remove();
    return false;
});

    });

</script>
