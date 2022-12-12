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
    <h3 class="text-center alert" style="background: #3c096c; color: #fdfffc;"> PENGKAJIAN KEBUTUHAN EDUKASI </h3>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Agama </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama">
                            <label class="form-check-label">
                                Islam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama">
                            <label class="form-check-label">
                                Kristen
                            </label>
                          </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama">
                            <label class="form-check-label">
                                Hindu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama">
                            <label class="form-check-label">
                                Budha
                            </label>
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama" value="lain">
                            <label class="form-check-label">
                                Lainnya
                            </label>
                            <input type="text" class="form-control" id="agama_lain">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Nilai- nilai Kepercayaan </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nilai_kepercayaan">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nilai_kepercayaan" value="nilaiNilai">
                            <label class="form-check-label">
                                Ya,sebutkan
                            </label>
                            <input type="text" class="form-control" id="Kepercayaan">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Keyakinan Pasien & Keluarga </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keyakinan_pasien">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keyakinan_pasien" value="keyakinan">
                            <label class="form-check-label">
                                Ya,sebutkan
                            </label>
                            <input type="text" class="form-control" id="k_pasien">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Tingkat Pendidikan </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikan">
                            <label class="form-check-label">
                                SD
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikan">
                            <label class="form-check-label">
                                SMP
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikan">
                            <label class="form-check-label">
                                SMA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikan">
                            <label class="form-check-label">
                                D3
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikan">
                            <label class="form-check-label">
                                S1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikan" value="pendidikan lain">
                            <label class="form-check-label">
                                Lainnya
                            </label>
                            <input type="text" class="form-control" id="sekolah_lain">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Suku & Budaya </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suku">
                            <label class="form-check-label">
                                Jawa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suku">
                            <label class="form-check-label">
                                Betawi
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suku">
                            <label class="form-check-label">
                                Sunda
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suku">
                            <label class="form-check-label">
                                Padang
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suku" value="suku lain">
                            <label class="form-check-label">
                                Lainnya
                            </label>
                            <input type="text" class="form-control" id="input_suku">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Bahasa Sehari-hari </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bahasa">
                            <label class="form-check-label">
                                Indonesia
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bahasa">
                            <label class="form-check-label">
                                Inggris
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bahasa" value="bahasa lain">
                            <label class="form-check-label">
                                Lainnya
                            </label>
                            <input type="text" class="form-control" id="input_bahasa">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Kemampuan Belajar </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kemampuan_belajar">
                            <label class="form-check-label">
                                Mampu
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kemampuan_belajar">
                            <label class="form-check-label">
                                Tidak Mampu
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Kemampuan Baca & Tulis </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kemampuan_baca">
                            <label class="form-check-label">
                                Baik
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kemampuan_baca">
                            <label class="form-check-label">
                                Kurang
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Bahasa Isyarat </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bahasa_isyarat">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bahasa_isyarat">
                            <label class="form-check-label">
                                Ya
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Perlu Penerjemah </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penerjemah">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penerjemah" value="perlu penerjemah">
                            <label class="form-check-label">
                                Ya,bahasa
                            </label>
                            <input type="text" class="form-control" id="input_penerjemah">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Hambatan Emosional & Motivasi </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hambatan_emosional">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hambatan_emosional" value="hambatan">
                            <label class="form-check-label">
                                Ya,sebutkan
                            </label>
                            <input type="text" class="form-control" id="input_hambatan">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Keterbatasan Fisik & Kognitif </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan">
                            <label class="form-check-label">
                                Tuna Rungu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan">
                            <label class="form-check-label">
                                Tuna Wicara
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan">
                            <label class="form-check-label">
                                Tuna Netra
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan">
                            <label class="form-check-label">
                                Disabilitas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan">
                            <label class="form-check-label">
                                Sulit Belajar
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan">
                            <label class="form-check-label">
                                Retradasi Mental
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan">
                            <label class="form-check-label">
                                Gangguan Bicara
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keterbatasan" value="keterbatasan lain">
                            <label class="form-check-label">
                                Lainnya
                            </label>
                            <input type="text" class="form-control" id="input_keterbatasan">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Ketersediaan Menerima Edukasi </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="menerima_edukasi">
                            <label class="form-check-label">
                                Bersedia
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="menerima_edukasi">
                            <label class="form-check-label">
                                Tidak Bersedia
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Pilihan Tipe Pembelajaran </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipe_pembelajaran">
                            <label class="form-check-label">
                                Verbal
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipe_pembelajaran">
                            <label class="form-check-label">
                                Tulisan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="col-md-4">
                        <h6> Perencanaan Kebutuhan Edukasi </h6>
                    </div>
                    <div class="col-md-1">
                        <h6> : </h6>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="kebutuhan_edukasi">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="input-group mb-4">
                    <div class="col-md-10">
                    </div>
                    <div class="col-md-2">
                        <h6> Jam </h6>
                        <input type="time" class="form-control" name="jam_edukasi">
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>
                                <h6> Nama Edukator </h6>
                            </td>
                            <td style="background: #edf2f4">
                                <input type="text" class="form-control" name="edukator" placeholder="Silahkan isi disini">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6> Bidang </h6>
                            </td>
                            <td style="background: #edf2f4">
                                <select class="form-control" name="bidang_edukasi" id="bidang" aria-label="Default select example">
                                    <option value="" selected disabled> Silahkan pilih disini </option>
                                    <option value="Pendaftaran"> Pendaftaran </option>
                                    <option value="Perawat"> Perawat/Bidan </option>
                                    <option value="Khusus bidan"> Khusus Bidan </option>
                                    <option value="Dokter"> Dokter </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6> Materi Edukasi </h6>
                            </td>
                            <td style="background: #edf2f4">
                                <select class="form-control" name="materi" id="materi_edukasi" aria-label="Default select example">
                                    <option value="" selected> Silahkan pilih disini </option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead  style="background: #fae0e4">
                        <th> Sasaran Edukasi </th>
                        <th> Metode Edukasi </th>
                        <th> Sarana Edukasi </th>
                        <th> Verifikasi Post Edukasi </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sasaran_edukasi" value="">
                                    <label class="form-check-label">
                                        Pasien
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sasaran_edukasi" value="">
                                    <label class="form-check-label">
                                        Ayah/Ibu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sasaran_edukasi" value="">
                                    <label class="form-check-label">
                                        Suami/Istri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sasaran_edukasi" value="">
                                    <label class="form-check-label">
                                        Anak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sasaran_edukasi" value="">
                                    <label class="form-check-label">
                                        Lainnya
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="metode_edukasi">
                                    <label class="form-check-label">
                                        Individu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="metode_edukasi">
                                    <label class="form-check-label">
                                      Diskusi Kelompok
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="metode_edukasi">
                                    <label class="form-check-label">
                                        Ceramah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="metode_edukasi">
                                    <label class="form-check-label">
                                        Demonstrasi
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sarana">
                                    <label class="form-check-label">
                                        Leafleat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sarana">
                                    <label class="form-check-label">
                                        Audiovisual
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sarana" value="sarana lainnya">
                                    <label class="form-check-label">
                                        Lainnya
                                    </label>
                                    <input type="text" class="form-control" id="input_edukasi">
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="verifikasi_edukasi">
                                    <label class="form-check-label">
                                        Tidak Mengerti
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="verifikasi_edukasi">
                                    <label class="form-check-label">
                                        Sudah Mengerti
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="verifikasi_edukasi">
                                    <label class="form-check-label">
                                        Mampu Menjelaskan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="verifikasi_edukasi">
                                    <label class="form-check-label">
                                        Mampu Mendemonstrasikan
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="input-group">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <h6> Tanggal Re-edukasi </h6>
                        <input type="date" class="form-control" name="tanggal_re-edukasi">
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

        $('#bidang').change(function (e) {
            e.preventDefault();

            let input = this.value;
            let isi = "";

            switch (input) {
                case "Pendaftaran":
                    isi += `
                        <option value="general consent"> General Consent </option>
                        <option value="jadwal praktek"> Jadwal Praktek </option>
                        <option value="biaya"> Biaya </option>
                        <option value="poli dan nama dokter"> Poli dan Nama Dokter </option>
                        <option value="alur"> Alur </option>
                    `;
                    $('#materi_edukasi').html("");
                    $('#materi_edukasi').append(isi);
                    break;

                case "Perawat":
                    isi += `
                        <option value="tanda tanda"> Tanda Tanda </option>
                        <option value="pengkajian awal"> Pengkajian Awal </option>
                        <option value="pengkajian"> Pengkajian </option>
                        <option value="penggunaan alat yang aman"> Penggunaan Alat yang Aman </option>
                    `;
                    $('#materi_edukasi').html("");
                    $('#materi_edukasi').append(isi);
                    break;

                case "Khusus bidan":
                    isi += `
                        <option value="persiapan"> Persiapan </option>
                        <option value="kb"> KB </option>
                    `;
                    $('#materi_edukasi').html("");
                    $('#materi_edukasi').append(isi);
                    break;

                case "Dokter":
                    isi += `
                        <option value="diagnosa medis"> Diagnosa Medis </option>
                        <option value="diit"> Diit </option>
                        <option value="obat"> Obat </option>
                        <option value="discharge planning"> Discharge Planning </option>
                        <option value="alternatif"> Alternatif </option>
                    `;
                    $('#materi_edukasi').html("");
                    $('#materi_edukasi').append(isi);
                    break;

                default:
                    break;
            }

        });


        $('input[name="agama"]').click(function(e) {
            if(e.target.value === 'lain') {
                $('#agama_lain').show();
            } else {
                $('#agama_lain').hide();
                $('#agama_lain').val('');
            }
        });
            $('#agama_lain').hide();


        $('input[name="nilai_kepercayaan"]').click(function(e) {
            if(e.target.value === 'nilaiNilai') {
                $('#Kepercayaan').show();
            } else {
                $('#Kepercayaan').hide();
                $('#Kepercayaan').val('');
            }
        });
            $('#Kepercayaan').hide();


        $('input[name="keyakinan_pasien"]').click(function(e) {
            if(e.target.value === 'keyakinan') {
                $('#k_pasien').show();
            } else {
                $('#k_pasien').hide();
                $('#k_pasien').val('');
            }
        });
            $('#k_pasien').hide();


         $('input[name="pendidikan"]').click(function(e) {
            if(e.target.value === 'pendidikan lain') {
                $('#sekolah_lain').show();
            } else {
                $('#sekolah_lain').hide();
                $('#sekolah_lain').val('');
            }
        });
            $('#sekolah_lain').hide();


        $('input[name="suku"]').click(function(e) {
            if(e.target.value === 'suku lain') {
                $('#input_suku').show();
            } else {
                $('#input_suku').hide();
                $('#input_suku').val('');
            }
        });
            $('#input_suku').hide();


        $('input[name="bahasa"]').click(function(e) {
            if(e.target.value === 'bahasa lain') {
                $('#input_bahasa').show();
            } else {
                $('#input_bahasa').hide();
                $('#input_bahasa').val('');
            }
        });
            $('#input_bahasa').hide();


        $('input[name="penerjemah"]').click(function(e) {
            if(e.target.value === 'perlu penerjemah') {
                $('#input_penerjemah').show();
            } else {
                $('#input_penerjemah').hide();
                $('#input_penerjemah').val('');
            }
        });
            $('#input_penerjemah').hide();


        $('input[name="hambatan_emosional"]').click(function(e) {
            if(e.target.value === 'hambatan') {
                $('#input_hambatan').show();
            } else {
                $('#input_hambatan').hide();
                $('#input_hambatan').val('');
            }
        });
            $('#input_hambatan').hide();


        $('input[name="keterbatasan"]').click(function(e) {
            if(e.target.value === 'keterbatasan lain') {
                $('#input_keterbatasan').show();
            } else {
                $('#input_keterbatasan').hide();
                $('#input_keterbatasan').val('');
            }
        });
            $('#input_keterbatasan').hide();


        $('input[name="sarana"]').click(function(e) {
            if(e.target.value === 'sarana lainnya') {
                $('#input_edukasi').show();
            } else {
                $('#input_edukasi').hide();
                $('#input_edukasi').val('');
            }
        });
            $('#input_edukasi').hide();


    });

</script>

