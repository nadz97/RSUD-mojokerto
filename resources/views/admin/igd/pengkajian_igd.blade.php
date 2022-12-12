{{-- Extends layout --}}
@extends('layout.default')

@push('css')
	<link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

{{-- Content --}}
@section('content')

<style>
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

</style>

<div class="d-flex justify-content-center">
    <span class="step" id="step-1">1</span>
    <span class="line"></span>
    <span class="step" id="step-2">2</span>
    <span class="line"></span>
    <span class="step" id="step-3">3</span>
    <span class="line"></span>
    <span class="step" id="step-4">4</span>
    <span class="line"></span>
    <span class="step" id="step-5">5</span>
    <span class="line"></span>
    <span class="step" id="step-6">6</span>
    <span class="clear"></span>

</div>
    <div class="container-fluid">
        <h3 class="text-center alert" style="background: #3c096c; color: #fdfffc;" > PENGKAJIAN INSTALASI GAWAT DARURAT </h3>
        {{-- tab-1 --}}
        <div class="tab" id="tab-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group">
                            <div class="col">
                                <h5> JENIS PELAYANAN </h5>
                                <div class="input-group">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" aria-label="Default select example" id="id_satu" >
                                                <option selected> Pilih Disini </option>
                                                <option value="Bedah"> Bedah </option>
                                                <option value="Non-Bedah"> No-Bedah </option>
                                                <option value="Kebidanan"> Kebidanan </option>
                                                <option value="Anak"> Anak </option>
                                                <option value="Neonatus"> Neonatus </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="col-md-4">
                                <h5> ALASAN DATANG </h5>
                                <div class="input-group">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="alasandatang" value="penyakit">
                                                <label class="form-check-label" >
                                                    Penyakit
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="alasandatang" value="trauma">
                                                <label class="form-check-label">
                                                    Trauma / Ruda Paksa
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h5> CARA MASUK </h5>
                                <div class="input-group">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cara_masuk">
                                            <label class="form-check-label">
                                                Rujukan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cara_masuk">
                                            <label class="form-check-label">
                                                Sendiri
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check" id="input1">
                                            <input class="form-check-input" type="radio" name="cara_masuk" value="puskesmas">
                                            <label class="form-check-label">
                                                Puskesmas / ppk Tk 1
                                            </label>
                                            <input type="text" class="form-control" id="input_puskesmas">
                                        </div>
                                        <div class="form-check" id="input2">
                                            <input class="form-check-input" type="radio" name="cara_masuk" value="rumahsakit">
                                            <label class="form-check-label">
                                                RS
                                            </label>
                                            <input type="text" class="form-control" id="input_rs">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check" id="input3">
                                            <input class="form-check-input" type="radio" name="cara_masuk" value="lain">
                                            <label class="form-check-label">
                                                Lain-lain
                                            </label>
                                            <input type="text" class="form-control" id="input_lain">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="input-group">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <h5> KEADAAN PRA HOSPITAL : </h5>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="col-md-6">
                                        <h6> GCS </h6>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="gcs" name="gcs">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6> Tensi Darah </h6>
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="tensi_darah">
                                            </div>
                                            <div class="col">
                                               <p> mmHg </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="col-md-6">
                                        <h6> Nadi </h6>
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="nadi">
                                            </div>
                                            <div class="col">
                                                <p> x/mnt </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6> Pernafasan </h6>
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="pernafasan">
                                            </div>
                                            <div class="col">
                                                <p> x/mnt </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="col-md-6">
                                        <h6> Suhu Axiler </h6>
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="suhu_axiler">
                                            </div>
                                            <div class="col">
                                                <p> &deg;C </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6> SpO2 </h6>
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="spo2">
                                            </div>
                                            <div class="col">
                                                <p> % </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="col-md-6">
                                        <h6> BB </h6>
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <input  type="text" class="form-control" id="bb" name="bb">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6> TB </h6>
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="tb" name="tb">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="col-md-6">
                                        <h6> Status Gizi </h6>
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <select class="form-control " aria-label="Default select example" >
                                                    <option selected> Pilih Disini </option>
                                                    <option value="Lebih"> Lebih </option>
                                                    <option value="Baik"> Baik </option>
                                                    <option value="Kurang"> Kurang </option>
                                                    <option value="Buruk"> Buruk </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <div class="col">
                                <div class="input-group mb-2">
                                    <h5> TINDAKAN PRA HOSPITAL : </h5>
                                </div>
                                <div class="input-group">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="CPR" id="cpr">
                                            <label class="form-check-label">
                                                CPR
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Oksigen" id="oksigen">
                                            <label class="form-check-label" >
                                                O2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Infus" id="Infus">
                                            <label class="form-check-label">
                                                Infus
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="NGT" id="ngt">
                                            <label class="form-check-label">
                                                NGT
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Nasopharingeal_Tube" id="Nasopharingeal_tube">
                                            <label class="form-check-label">
                                                Nasopharingeal Tube
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ETT" id="ett">
                                            <label class="form-check-label">
                                                ETT
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Suction" id="suction">
                                            <label class="form-check-label">
                                                Suction
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Trakeostomi" id="trakeostomi">
                                            <label class="form-check-label">
                                                Trakeostomi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="BVM" id="bvm">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                BVM (Bag Valve Mask)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Bidai" id="bidai">
                                            <label class="form-check-label">
                                                Bidai
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Beban_Tekan" id="beban_tekan">
                                            <label class="form-check-label">
                                                Beban Tekan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Hecting" id="hecting">
                                            <label class="form-check-label">
                                                Hecting
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="col-md-6">
                                                <h6> Catheter Urine, Jumlah </h6>
                                                <input type="text" class="form-control" id="urine" name="urine" placeholder="Diisi jika perlu">
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Warna Urine </h6>
                                                <input type="text" class="form-control" id="warna" name="warna" placeholder="Diisi jika perlu">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col-md-6">
                                                <h6> Obat </h6>
                                                <input type="text" class="form-control" id="obat" name="obat" placeholder="Diisi jika perlu">
                                            </div>
                                            <div class="col-md-6">
                                                <h6> lain </h6>
                                                <input type="text" class="form-control" id="jumlah_lain" name="jumlah_lain" placeholder="Diisi jika perlu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="col-md-6">
                                        <h6> Diagnosa Rujukan </h6>
                                        <input type="text" class="form-control" id="diagnosa_rujukan" name="diagnosa_rujukan">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="input-group">
                            <div class="col">
                                <div class="input-group mb-2">
                                    <h5> ANEMNESA PERAWAT </h5>
                                    <div class="col">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"> Jam </span>
                                            </div>
                                            <input type="time" class="form-control" name="jam">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="col-md-6">
                                        <div class="input-group mb-2">
                                            <h6> Keluhan Utama </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="keluhan_utama" name="keluhan_utama"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-4">
                                            <h6> Bahasa Yang Digunakan </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="indonesia" name="Bahasa" value="indonesia">
                                                        <label class="form-check-label">
                                                            Indonesia
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Bahasa" id="asing" value="asing">
                                                        <label class="form-check-label">
                                                            Asing
                                                        </label>
                                                        <input type="text" class="form-control" id="input_asing">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Bahasa" id="daerah" value="daerah">
                                                        <label class="form-check-label">
                                                          Daerah
                                                        </label>
                                                        <input type="text" class="form-control" id="daerah1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h6> Anamnesa </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="anamnesa" name="anamnesa"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-4">
                                            <h6> Riwayat Alergi </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Riwayat_alergi" id="tidak_alergi">
                                                        <label class="form-check-label">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                    <div class="form-check" id="ya_alergi">
                                                        <input class="form-check-input" type="radio" name="Riwayat_alergi" id="riwayat_ya" value="riwayat">
                                                        <label class="form-check-label">
                                                            Ya (Jelaskan)
                                                        </label>
                                                        <input type="text" class="form-control" id="alergi">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h6> Riwayat Penyakit Dahulu </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="rpd" name="rpd"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-4">
                                            <h6> Pasien membawa obat dari rumah </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="pmodr" id="tidak_membawa">
                                                        <label class="form-check-label">
                                                          Tidak
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="pmodr" id="ya_membawa">
                                                        <label class="form-check-label">
                                                          Ya
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h6> Status Psikologi </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <select class="form-control" aria-label=".form-select-sm example">
                                                        <option selected> Pilih Disini </option>
                                                        <option value="Kooperatif"> Kooperatif </option>
                                                        <option value="Cemas"> Cemas </option>
                                                        <option value="Depresi"> Depresi </option>
                                                        <option value="Ingin mengakhiri hidup"> Ingin Mengakhiri Hidup </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h6> Agama </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <select class="form-control" aria-label=".form-select-sm example">
                                                        <option selected> Pilih Disini </option>
                                                        <option value="Islam"> Islam </option>
                                                        <option value="Kristen"> Kristen </option>
                                                        <option value="Katolik"> Katolik </option>
                                                        <option value="Hindu"> Hindu </option>
                                                        <option value="Budha"> Budha </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h6> Pendidikan </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <input  type="text" class="form-control" id="pendidikan" name="pendidikan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h6> Pekerjaan </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <input  type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="input-group">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <h5> PENGKAJIAN KEPERAWATAN PRIMER </h5>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h5> A.Airway </h5>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="airway" id="paten">
                                                    <label class="form-check-label">
                                                      Paten
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="airway" id="tidak_paten">
                                                    <label class="form-check-label">
                                                      Tidak Paten
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="airway" id="snoring">
                                                    <label class="form-check-label">
                                                      Snoring
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="airway" id="stridor">
                                                    <label class="form-check-label">
                                                      Stridor
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="airway" id="gargling">
                                                    <label class="form-check-label">
                                                      Gargling
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="airway" value="benda_asing">
                                                    <label class="form-check-label">
                                                      Benda Asing,ket :
                                                    </label>
                                                    <input type="text" class="form-control" id="benda">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="airway" value="lainya">
                                                    <label class="form-check-label">
                                                      Lain-lain :
                                                    </label>
                                                    <input type="text" class="form-control" id="lain">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col-md-6">
                                                <h6> Diagnosa Keperawatan </h6>
                                                <div class="input-group">
                                                    <select class="form-control" aria-label="Default select example">
                                                        <option selected> Pilih disini </option>
                                                        <option value="Bersihan jalan nafas tidak efektif"> Bersihan jalan nafas tidak efektif </option>
                                                        <option value="Resiko gagal nafas"> Resiko gagal nafas </option>
                                                        <option value="Distress pernafasan"> Distress pernafasan </option>
                                                        <option value="Sumbatan jalan nafas"> Sumbatan jalan nafas </option>
                                                      </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h5> B.Breathing </h5>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-6">
                                                <h6> Pola Nafas </h6>
                                                <div class="input-group mb-3">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pola_nafas" id="teratur">
                                                            <label class="form-check-label">
                                                              Teratur
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pola_nafas" id="tidak_teratur">
                                                            <label class="form-check-label">
                                                              Tidak Teratur
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Pola Nafas </h6>
                                                <select class="form-control" aria-label="Default select example">
                                                    <option selected> Pilih disini </option>
                                                    <option value="Apneu"> Apneu </option>
                                                    <option value="Dyspneu"> Dyspneu </option>
                                                    <option value="Bradipneu"> Bradipneu </option>
                                                    <option value="Takhipneu"> Takhipneu </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="col-md-6">
                                                <h6> Jenis Nafas </h6>
                                                <div class="input-group">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jenis_nafas" id="p_data">
                                                            <label class="form-check-label">
                                                              Pernafasan Dada
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jenis_nafas" id="p_perut">
                                                            <label class="form-check-label">
                                                              Pernafasan Perut
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Frekuensi Nafas </h6>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="frekuensi_nafas">
                                                    <div class="input-group-append">
                                                      <span class="input-group-text"> x/mnt </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col">
                                                <h6> Pengguanaan Otot Bantu Nafas </h6>
                                                <div class="input-group">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="bantu_nafas" id="ri">
                                                            <label class="form-check-label">
                                                              Retraksi Intercostae
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="bantu_nafas" id="cuping">
                                                            <label class="form-check-label">
                                                              Cuping Hidung
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Suara Nafas </h6>
                                                <div class="input-group mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="suara_nafas">
                                                            <label class="form-check-label">
                                                              Vesikuler
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="suara_nafas" >
                                                            <label class="form-check-label">
                                                                Bronchovesikuler
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check" id="suara">
                                                            <input class="form-check-input" type="radio" name="suara_nafas" value="whezing">
                                                            <label class="form-check-label">
                                                              Whezing
                                                            </label>
                                                            <input type="text" class="form-control" id="input_whezing">
                                                        </div>
                                                        <div class="form-check" id="s_nafas">
                                                            <input class="form-check-input" type="radio" name="suara_nafas" value="ronchi">
                                                            <label class="form-check-label">
                                                              Ronchi
                                                            </label>
                                                            <input type="text" class="form-control" id="input_ronchi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <h6> Diagnosa Keperawatan </h6>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="diagnosa keperawatan" id="pola_nafas">
                                                        <label class="form-check-label">
                                                          Pola nafas tidak efektif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="diagnosa keperawatan" id="gangguan_gas">
                                                        <label class="form-check-label">
                                                          Gangguan pertukaran gas
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <h5> C.circulation </h5>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="col-md-4">
                                                <h6> Akral </h6>
                                                <div class="input-group">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="akral" id="hangat">
                                                            <label class="form-check-label">
                                                                Hangat
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="akral" id="dingin">
                                                            <label class="form-check-label">
                                                                Dingin
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="input-group">
                                                    <h6> Adanya Riwayat Kehilangan Cairan Dalam Jumlah Besar </h6>
                                                    <div class="col-md-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input cairan" type="radio" name="cairan" value="diare">
                                                            <label class="form-check-label" >
                                                                Diare,ket
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="col">
                                                                    <input type="text" class="form-control" id="input_diare">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input cairan" type="radio" name="cairan" value="muntah">
                                                            <label class="form-check-label" >
                                                                Muntah,ket
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="col">
                                                                    <input type="text" class="form-control" id="input_muntah">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input cairan" type="radio" name="cairan" value="bakar">
                                                            <label class="form-check-label" >
                                                                Luka Bakar
                                                            </label>
                                                            <div class="input-group mb-2" id="input_bakar">
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col">
                                                                    <p> % </p>
                                                                </div>
                                                                <div class="col">
                                                                    <p> Grade </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col-md-4">
                                                <h6> Pucat </h6>
                                                <div class="input-group">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pucat" id="ya_pucat">
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pucat" id="tidak_pucat">
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6> Pendarahan </h6>
                                                <div class="input-group">
                                                    <div class="col-md-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pendarahan">
                                                            <label class="form-check-label">
                                                              Tidak
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input cairan" type="radio" name="pendarahan" value="darah">
                                                            <label class="form-check-label" >
                                                                Ya
                                                            </label>
                                                            <div class="input-group mb-2" id="input_darah">
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control" >
                                                                </div>
                                                                <div class="col">
                                                                    <p> CC </p>
                                                                </div>
                                                                <div class="col">
                                                                    <p> Lokasi </p>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col-md-4">
                                                <h6> Turgor </h6>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="turgor">
                                                        <label class="form-check-label" >
                                                            < 2 Detik
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="turgor">
                                                        <label class="form-check-label" >
                                                            > 2 Detik
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6> Pengisian Kapiler </h6>
                                                <div class="input-group">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pengisian kapiler" id="kurang">
                                                            <label class="form-check-label">
                                                            < 2 Detik
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pengisian kapiler" id="lebih">
                                                            <label class="form-check-label">
                                                            > 2 Detik
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col-md-4">
                                                <h6> Cianosis </h6>
                                                <div class="input-group">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="cianosis" id="ya_cianosis">
                                                            <label class="form-check-label">
                                                              Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="cianosis" id="tidak_cianosis">
                                                            <label class="form-check-label">
                                                              Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6> Nadi </h6>
                                                <div class="col nadi">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Nadi">
                                                        <label class="form-check-label" >
                                                            Tidak Teraba
                                                        </label>
                                                    </div>
                                                    <div class="form-check" id="nadi_teraba">
                                                        <input class="form-check-input" type="radio" name="Nadi" value="teraba">
                                                        <label class="form-check-label">
                                                          Teraba
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="col-md-4">
                                                <h6> Kelembaban Kulit </h6>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kelembaban">
                                                        <label class="form-check-label">
                                                          Lembab
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kelembaban">
                                                        <label class="form-check-label">
                                                          Kering
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6> Diagnosa Keperawatan </h6>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Diagnosab">
                                                        <label class="form-check-label">
                                                            Gangguan Prefurasi Jaringan Prefier
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Diagnosab">
                                                        <label class="form-check-label">
                                                            Gangguan Keseimbangan Cairan Elektrolit
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Diagnosab">
                                                        <label class="form-check-label">
                                                            Resiko Syok Hipovolemik
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <button id="btn-tab-1-next" type="button" class="btn btn-lg btn-primary"> NEXT </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tab-2 --}}
        <div class="tab" id="tab-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="card-body">
                            <div class="row">
                                <div class="input-group mb-4">
                                    <div class="col">
                                        <div class="input-group mb-4">
                                            <h5> D.Disability </h5>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="col">
                                                <h6> Tingkat Kesadaran </h6>
                                                <select class="form-control" aria-label="Default select example">
                                                    <option selected> Pilih disini </option>
                                                    <option value="Compos metis"> Compos metis </option>
                                                    <option value="Apatis"> Apatis </option>
                                                    <option value="Somnolen"> Somnolen </option>
                                                    <option value="Sopor"> Sopor </option>
                                                    <option value="Coma"> Coma </option>
                                                  </select>
                                            </div>
                                            <div class="col">
                                                <h6> Frankel </h6>
                                                <input type="text" class="form-control" placeholder="Isi disini" name="frankel">
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="col">
                                                <h6> Nilai GCS </h6>
                                                <div class="input-group">
                                                    <div class="col">
                                                        <h6> Dewasa </h6>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="col">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"> E </span>
                                                            <input type="text" class="form-control" placeholder="Isi bila perlu" name="GCS">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"> M </span>
                                                            <input type="text" class="form-control" placeholder="Isi bila perlu" name="GCS">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"> V </span>
                                                            <input type="text" class="form-control" placeholder="Isi bila perlu" name="GCS">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="col">
                                                        <h6> Anak </h6>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gcs_anak">
                                                            <label class="form-check-label">
                                                              A
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gcs_anak" >
                                                            <label class="form-check-label">
                                                              V
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                       <div class="form-check">
                                                           <input class="form-check-input" type="radio" name="gcs_anak">
                                                           <label class="form-check-label">
                                                             P
                                                           </label>
                                                       </div>
                                                   </div>
                                                   <div class="col-md-2">
                                                       <div class="form-check">
                                                           <input class="form-check-input" type="radio" name="gcs_anak">
                                                           <label class="form-check-label">
                                                             U
                                                           </label>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col">
                                                <h6> Skala Kekuatan Otot </h6>
                                            <div class="input-group">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" name="skala_kekuatan_otot" placeholder="Lengan Kanan">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" name="skala_kekuatan_otot" placeholder="Lengan Kiri">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" name="skala_kekuatan_otot" placeholder="Tungkai Kanan">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" name="skala_kekuatan_otot" placeholder="Tungkai Kiri">
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col">
                                                <h6> Pupil </h6>
                                                <div class="input-group mb-3">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" name="Pupil">
                                                            <label class="form-check-label">
                                                                Miosis
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" name="Pupil">
                                                            <label class="form-check-label">
                                                                Isokor
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" name="Pupil">
                                                            <label class="form-check-label">
                                                                Midriasis
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" name="Pupil">
                                                            <label class="form-check-label">
                                                                Anisokor
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6> Pin Point Diameter: </h6>
                                                    </div>
                                                    <div class="col">
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pin_point">
                                                            <label class="form-check-label">
                                                                1 mm
                                                            </label>
                                                          </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pin_point">
                                                            <label class="form-check-label">
                                                                2 mm
                                                            </label>
                                                          </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pin_point">
                                                            <label class="form-check-label">
                                                                3 mm
                                                            </label>
                                                          </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pin_point">
                                                            <label class="form-check-label">
                                                                4 mm
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <h6> Diagnosa Keperawatan </h6>
                                                <select class="form-control" aria-label="Default select example">
                                                    <option selected> Pilih disini </option>
                                                    <option value="Gangguan perfusi jaringan cerebral"> Gangguan perfusi jaringan cerebral </option>
                                                    <option value="Komunikasi Verbal"> Komunikasi Verbal </option>
                                                    <option value="Intoleransi Aktifitas"> Intoleransi Aktifitas </option>
                                                    <option value="Penurunan Kesadaran"> Penurunan Kesadaran </option>
                                                    <option value="Kejang Ulang"> Kejang Ulang </option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <h6> Respon Cahaya </h6>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="respon_cahaya">
                                                        <label class="form-check-label">
                                                          +
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="respon_cahaya">
                                                        <label class="form-check-label">
                                                          -
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <h5> Pengkajian Keperawatan Sekunder </h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <h5> E.Exposure </h5>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col">
                                                <h5> Pengkajian Nyeri </h5>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="col-md-5">
                                                <h6> Apakah Ada Nyeri </h6>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nyeri" value="nyeriNyeri">
                                                    <label class="form-check-label">
                                                      Ya, Skor Nyeri
                                                    </label>
                                                </div>
                                                <input type="text" class="form-control" id="ya_nyeri">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nyeri">
                                                    <label class="form-check-label">
                                                      Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="col">
                                                <img src="{{ URL::to('/images/pengukur.png') }}" width="380" height="55">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col-md-5">
                                                <h6> Penjajaran Nyeri </h6>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="penjajaran_nyeri" value="penjajaran">
                                                    <label class="form-check-label">
                                                      Ya, Sebutkan
                                                    </label>
                                                </div>
                                                <textarea class="form-control" id="text_penjajaran"></textarea>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="penjajaran_nyeri">
                                                    <label class="form-check-label">
                                                      Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col-md-5">
                                                <h6> Tipe </h6>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="Tipe">
                                                    <label class="form-check-label">
                                                        Akut
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="Tipe">
                                                    <label class="form-check-label">
                                                        Kronik
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <h6> Deskripsi/Karakter </h6>
                                                    <input type="text" class="form-control" name="deskripsi">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group">
                                            @include('admin/igd/human')
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <h6> Frekuensi </h6>
                                                    <select class="form-control" aria-label="Default select example">
                                                        <option selected> Isi disini </option>
                                                        <option value="jarang"> Jarang </option>
                                                        <option value="hilang timbul"> Hilang Timbul </option>
                                                        <option value="terus menerus"> Terus Menerus </option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <h6> Lama Nyeri </h6>
                                                    <input type="text" class="form-control" name="lama_nyeri">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <h6> Onset </h6>
                                                    <input type="text" class="form-control" name="onset">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <h6> Faktor Yang Memperkuat/memperingan </h6>
                                                    <input type="text" class="form-control" name="deskripsi">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="input-group mb-3">
                            <h6> *Catatan : Bila pasien tidak sadar maka gunakan formulir penilaian nyeri dengan skala BPS(Behavior Pain Scale) </h6>
                        </div>
                        <div class="input-group mb-2">
                            <h5> Behavior Pain Scale </h5>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-4">
                                <h6> Ekspresi Wajah </h6>
                            </div>
                            <div class="col">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected> Pilih disini </option>
                                    <option value="normal"> Normal </option>
                                    <option value="mengencang sebagian"> Mengencang Sebagian(alis mengerut) </option>
                                    <option value="mengencang total"> Mengencang Total(kelopak mata mengatup rapat) </option>
                                    <option value="menangis"> Menangis </option>
                                  </select>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-4">
                                <h6> Ekstremitas Atas </h6>
                            </div>
                            <div class="col">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected> Pilih disini </option>
                                    <option value="tidak ada pergerakan"> Tidak ada pergerakan </option>
                                    <option value="tertekuk sebagian"> Tertekuk sebagian </option>
                                    <option value="tertekuk total"> Tertekuk Total Dengan Fleksi Jari </option>
                                    <option value="retraksi permanen"> Retraksi permanen </option>
                                  </select>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-4">
                                <h6> Compliance Terhadap Ventilator </h6>
                            </div>
                            <div class="col">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected> Pilih disini </option>
                                    <option value="toleransi"> Toleransi Terhadap Ventilator </option>
                                    <option value="sesekali terbatuk"> Sesekali Terbatuk Namun masih Toleranse Terhadap Ventilator </option>
                                    <option value="melawan ventilator"> Melawan Ventilator </option>
                                    <option value="tidak dapat mengendalikan pola nafas"> Tidak Dapat Mengendalikan Pola Napas </option>
                                  </select>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <div class="col-md-4">
                                <h6> Gejala Penyerta </h6>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="gejala_penyerta">
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="col">
                                <h6> Luka </h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="luka">
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="luka" value="lokasi luka">
                                    <label class="form-check-label">
                                        Ya,lokasi
                                    </label>
                                    <textarea class="form-control" id="area_nyeri"></textarea>
                                  </div>
                            </div>
                            <div class="col">
                                <h6> Dekubitus </h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="dekubitus">
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="dekubitus" value="lokasi dekubitus">
                                    <label class="form-check-label">
                                        Ya,lokasi
                                    </label>
                                    <textarea class="form-control" id="area_dekubitus"></textarea>
                                  </div>
                            </div>
                            <div class="col">
                                <h6> Diagnosa Keperawatan </h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="diagnosa_bps">
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="diagnosa_bps">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <button id="btn-tab-2-prev" type="button" class="btn btn-primary"> Previous </button>
                        </div>
                        <div class="col">
                            <button id="btn-tab-2-next" type="button" class="btn btn-primary"> Next </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tab-3 --}}
        <div class="tab" id="tab-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body faktorResikoAnak">
                            <h4 class="text-center">PENILAIAN RESIKO JATUH PASIEN ANAK DIBAWAH 18 TH SKALA HUMPTY DUMPTY</h4>
                            <h5 class=" mt-3">Pengkajian Faktor Resiko :</h5>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Umur :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="faktorResikoAnakUmur" id="faktorResikoAnakUmur" class="form-control">
                                        <option value="0" style="display: none">Pilih Umur</option>
                                        <option value="4">Kurang Dari 3 tahun</option>
                                        <option value="3">3 Tahun - 7 Tahun</option>
                                        <option value="2">7 Tahun - 13 Tahun</option>
                                        <option value="1"> > 13 Tahun</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Jenis Kelamin :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="faktorResikoAnakJenisKelamin" id="faktorResikoAnakJenisKelamin"
                                        class="form-control">
                                        <option value="0" style="display: none">Pilih Jenis Kelamin</option>
                                        <option value="2">Laki Laki</option>
                                        <option value="1">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Diagnosa :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="faktorResikoAnakDiagnosa" id="faktorResikoAnakDiagnosa" class="form-control">
                                        <option value="0" style="display: none">Pilih Diagnosa</option>
                                        <option value="4">Neurologi</option>
                                        <option value="3">Respiratori, dehidrasi, anemia, anorexia, syncope
                                        </option>
                                        <option value="2">Prilaku, Gangguan psikologi</option>
                                        <option value="1">Diagnosa Lain - lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Gangguan Kognitif :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="faktorResikoAnakDayaPikir" id="faktorResikoAnakDayaPikir" class="form-control">
                                        <option value="0" style="display: none">Pilih Gangguan Kognitif</option>
                                        <option value="3">Keterbatasan daya pikir</option>
                                        <option value="2">Pelupa</option>
                                        <option value="1">Dapat menggunakan daya pikir tanpa hambatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Faktor Lingkungan :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="faktorResikoAnakFaktorLingkungan" id="faktorResikoAnakFaktorLingkungan"
                                        class="form-control">
                                        <option value="0" style="display: none">Pilih Faktor Lingkungan</option>
                                        <option value="4">Riwayat jatuh atau bayi / balita yang ditempatkan ditempat tidur
                                        </option>
                                        <option value="3">Pasien yang menggunakan alat bantu / bayi atau balita pada
                                            ayunan
                                        </option>
                                        <option value="2">Pasien di tempat tidur standar</option>
                                        <option value="1">Area pasien rawat jalan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Respon Terhadap pembedahan, sedasi & anestesi :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="faktorResikoAnakResponPembedahan" id="faktorResikoAnakResponPembedahan"
                                        class="form-control">
                                        <option value="0" style="display: none">Pilih Respon</option>
                                        <option value="3">Dalam 24 jam
                                        </option>
                                        <option value="2">Dalam 48 jam
                                        </option>
                                        <option value="1">Lebih dari 48 jam / tidak ada respon</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Penggunaan obat - obatan :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="faktorResikoAnakPenggunaanObat" id="faktorResikoAnakPenggunaanObat"
                                        class="form-control">
                                        <option value="0" style="display: none">Pilih Penggunaan Obat</option>
                                        <option value="3">Penggunaan bersamaan sedative, barbiturate, anti depresan,
                                            diuretik, narkotik</option>
                                        <option value="2">Salah satu dari obat diatas</option>
                                        <option value="1">Obat - obatan lainnya / tanpa obat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Skor Total Anak :</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="risikoMuda" id="risikoMuda1" disabled>
                                        <label class="form-check-label" for="risikoMuda1">
                                            Resiko Rendah <br> / RR(7-11)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="risikoMuda" id="risikoMuda2" disabled>
                                        <label class="form-check-label" for="risikoMuda2">
                                            Resiko Tinggi <br> / RT(>12)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body risikoTua">
                            <h4 class="text-center">PENILAIAN RISIKO JATUH PASIEN DEWASA > 18 Th
                                Fall Morse Scale</h4>
                            <h5 class=" mt-3">Risiko :</h5>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Riwayat jatuh yang baru atau dalam 3 bulan terakhir :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="risikoJatuh" id="risikoJatuh" class="form-control">
                                        <option value="0" style="display: none">Pilih Umur</option>
                                        <option value="25">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Diagnosis Medis Sekunder > 1 :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="risikoDiagnosisMedis" id="risikoDiagnosisMedis" class="form-control">
                                        <option value="0" style="display: none">Pilih Jenis Kelamin</option>
                                        <option value="15">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Menggunakan alat bantu jalan :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="risikoAlatBantuJalan" id="risikoAlatBantuJalan" class="form-control">
                                        <option value="0" style="display: none">Pilih Diagnosa</option>
                                        <option value="0">Bed Rest/Dibantu Perawat</option>
                                        <option value="15">Penopang / Tongkat / Walker
                                        </option>
                                        <option value="30">Furnitur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Menggunakan Infus :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="risikoGunaInfus" id="risikoGunaInfus" class="form-control">
                                        <option value="0" style="display: none">Pilih Gangguan Kognitif</option>
                                        <option value="20">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Cara Berjalan/Berpindah :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="risikoBerjalan" id="risikoBerjalan" class="form-control">
                                        <option value="0" style="display: none">Pilih Faktor Lingkungan</option>
                                        <option value="0">Normal/Bed Rest/Imobilisasi
                                        </option>
                                        <option value="10">Lemah</option>
                                        <option value="20">Terganggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Status Mental :</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="risikoStatusMental" id="risikoStatusMental" class="form-control">
                                        <option value="0" style="display: none">Pilih Penggunaan Obat</option>
                                        <option value="0">Orientasi Sesuai Kemampuan Diri</option>
                                        <option value="15">Lupa Keterbatasan Diri</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Skor Total Dewasa :</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="risikoTua" id="risikoTua1" disabled>
                                        <label class="form-check-label" for="risikoTua1">
                                            Tidak Resiko <br> / TR(0-24)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="risikoTua" id="risikoTua2" disabled>
                                        <label class="form-check-label" for="risikoTua2">
                                            Resiko Rendah <br> / RR(25-44)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="risikoTua" id="risikoTua3" disabled>
                                        <label class="form-check-label" for="risikoTua3">
                                            Resiko Tinggi <br> / RT(>45)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3">F. Farenheit</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Suhu Axilia</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="suhuAxilia" class="form-control form-control-sm"
                                            placeholder="Suhu Axilia...">
                                        <h4>&deg;C</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Suhu Rectal</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="suhuRectal" class="form-control form-control-sm"
                                            placeholder="Suhu Rectal...">
                                        <h4>&deg;C</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Diagnosa Keperawatan</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diagnosaFarenheit"
                                            id="diagnosaFarenheit1">
                                        <label class="form-check-label" for="diagnosaFarenheit1">
                                            Hipertermi
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diagnosaFarenheit"
                                            id="diagnosaFarenheit2">
                                        <label class="form-check-label" for="diagnosaFarenheit2">
                                            Hipotermi
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>SpO2 :</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="farenheitSpo2" class="form-control form-control-sm"
                                            placeholder="SpO2...">
                                        <h4>%</h4>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4 mb-2">Pemeriksaan Penunjang :</h5>
                            <div class="row mt-3">
                                <div class="col-md-3 ">
                                    <label class="text-center">EKG :</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input ekgInput" type="radio" name="ekg" id="ekgTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="ekgTidak">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check d-flex ekgAppend">
                                        <input class="form-check-input ekgInput" type="radio" name="ekg" id="ekgYa" value="ya">
                                        <label class="form-check-label" for="ekgYa">
                                            Ya
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3 ">
                                    <label class="text-center">GDA :</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input gdaInput" type="radio" name="gda" id="gdaTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="gdaTidak">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check d-flex gdaAppend">
                                        <input class="form-check-input gdaInput" type="radio" name="gda" id="gdaYa" value="ya">
                                        <label class="form-check-label" for="gdaYa">
                                            Ya
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3 ">
                                    <label class="text-center">Radiologi :</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input radiologiInput" type="radio" name="radiologi"
                                            id="radiologiTidak" value="tidak">
                                        <label class="form-check-label" for="radiologiTidak">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check d-flex radiologiAppend">
                                        <input class="form-check-input radiologiInput" type="radio" name="radiologi"
                                            id="radiologiYa" value="ya">
                                        <label class="form-check-label" for="radiologiYa">
                                            Ya
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3 ">
                                    <label class="text-center">Laborat :</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input laboratInput" type="radio" name="laborat" id="laboratTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="laboratTidak">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check d-flex laboratAppend">
                                        <input class="form-check-input laboratInput" type="radio" name="laborat" id="laboratYa"
                                            value="ya">
                                        <label class="form-check-label" for="laboratYa">
                                            Ya
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <button id="btn-tab-3-prev" type="button" class="btn btn-primary"> Previous </button>
                        </div>
                        <div class="col">
                            <button id="btn-tab-3-next" type="button" class="btn btn-primary"> Next </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tab-4 --}}
        <div class="tab" id="tab-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="anemnesaDokter">Anemnesa Dokter :</label>
                                    <textarea name="anemnesaDokter" id="anemnesaDokter" cols="3" rows="3" class="form-control"
                                        placeholder="Anemnesa Dokter..."></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="jamAnemnesa">Jam</label>
                                    <input type="time" name="jamAnemnesa" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <img src="{{asset('human.png')}}" alt="human" width="100%" height="100%">
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-border table-striped table-hover">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Organ</th>
                                                <th>Normal</th>
                                                <th>Temuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Kepala</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input checkKepala" type="radio" name="organKepala"
                                                            id="kepalaNormal" value="ya">
                                                        <label class="form-check-label" for="kepalaNormal">
                                                            Ya
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center kepalaTemuan">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkKepala" type="radio" name="organKepala"
                                                            id="kepalaTemuan" value="tidak">
                                                        <label class="form-check-label" for="kepalaTemuan">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Leher</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input checkLeher" type="radio" name="organLeher"
                                                            id="leherNormal" value="ya">
                                                        <label class="form-check-label" for="leherNormal">
                                                            Ya
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center leherTemuan">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkLeher" type="radio" name="organLeher"
                                                            id="leherTemuan" value="tidak">
                                                        <label class="form-check-label" for="leherTemuan">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thorax</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input checkThorax" type="radio" name="organThorax"
                                                            id="thoraxNormal" value="ya">
                                                        <label class="form-check-label" for="thoraxNormal">
                                                            Ya
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center thoraxTemuan">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkThorax" type="radio" name="organThorax"
                                                            id="thoraxTemuan" value="tidak">
                                                        <label class="form-check-label" for="thoraxTemuan">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Abdomen</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input checkAbdomen" type="radio"
                                                            name="organAbdomen" id="abdomenNormal" value="ya">
                                                        <label class="form-check-label" for="abdomenNormal">
                                                            Ya
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center abdomenTemuan">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkAbdomen" type="radio"
                                                            name="organAbdomen" id="abdomenTemuan" value="tidak">
                                                        <label class="form-check-label" for="abdomenTemuan">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Genetalia</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input checkGenetalia" type="radio"
                                                            name="organGenetalia" id="genetaliaNormal" value="ya">
                                                        <label class="form-check-label" for="genetaliaNormal">
                                                            Ya
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center genetaliaTemuan">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkGenetalia" type="radio"
                                                            name="organGenetalia" id="genetaliaTemuan" value="tidak">
                                                        <label class="form-check-label" for="genetaliaTemuan">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Anus</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input checkAnus" type="radio" name="organAnus"
                                                            id="anusNormal" value="ya">
                                                        <label class="form-check-label" for="anusNormal">
                                                            Ya
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center anusTemuan">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkAnus" type="radio" name="organAnus"
                                                            id="anusTemuan" value="tidak">
                                                        <label class="form-check-label" for="anusTemuan">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ekstremitas Atas<br>Dan Bawah</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input checkEkstremitas" type="radio"
                                                            name="organEkstremitas" id="ekstremitasNormal" value="ya">
                                                        <label class="form-check-label" for="ekstremitasNormal">
                                                            Ya
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center ekstremitasTemuan">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkEkstremitas" type="radio"
                                                            name="organEkstremitas" id="ekstremitasTemuan" value="tidak">
                                                        <label class="form-check-label" for="ekstremitasTemuan">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Pemeriksaan Penunjang</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input pemeriksaanPenunjang" type="radio"
                                                name="pemeriksaPenunjang" id="ekg" value="EKG">
                                            <label class="form-check-label" for="ekg">
                                                EKG
                                            </label>
                                        </div>
                                        <div class="form-check d-flex" id="radiologiRadio">
                                            <input class="form-check-input pemeriksaanPenunjang" type="radio"
                                                name="pemeriksaPenunjang" id="radiologi" value="Radiologi">
                                            <label class="form-check-label" for="radiologi" id="radiologiLabel">
                                                Radiologi
                                            </label>
                                        </div>
                                        <div class="form-check d-flex inputLaborat">
                                            <input class="form-check-input pemeriksaanPenunjang" type="radio"
                                                name="pemeriksaPenunjang" id="laboratorium" value="Laboratorium">
                                            <label class="form-check-label" for="laboratorium">
                                                Laboratorium
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="diaknosisKerja">Diaknosis Kerja</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="diaknosisKerja" id="diaknosisKerja" cols="5" rows="5" class="form-control"
                                        placeholder="Diagnosis Kerja..."></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="diagnosisBanding">Diagnosis Banding</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="diagnosisBanding" id="diagnosisBanding" cols="5" rows="5" class="form-control"
                                        placeholder="Diagnosis Banding..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col">
                        <button id="btn-tab-4-prev" type="button" class="btn btn-primary"> Previous </button>
                    </div>
                    <div class="col">
                        <button id="btn-tab-4-next" type="button" class="btn btn-primary"> Next </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- tab-5 --}}
        <div class="tab" id="tab-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body appendTindakan">
                            <div class="row d-flex">
                                <div class="col-md-12">
                                    <div class="form-group d-flex justify-content-between">
                                        <h3 class="text-center">Tindakan Keperawatan</h3>
                                        <button type="button" id="tambahTindakan" class="btn btn-success ml-1">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Tanggal Dan Jam</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="date" name="tanggalTindakan[]" class="form-control">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Tindakan Keperawatan</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="namaTindakan[]" class="form-control"
                                        placeholder="Tindakan Keperawatan...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Nama & Paraf Perawat</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="namaPerawatTindakan[]" class="form-control"
                                        placeholder="Nama Perawat...">
                                </div>
                                <div class="col-md-12 mb-2 d-flex justify-content-center align-items-center">
                                    <button type="button" id="hapusTindakan" class="btn btn-danger">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body appendTambahCairan">
                            <div class="row d-flex">
                                <div class="col-md-12">
                                    <div class="form-group d-flex justify-content-between">
                                        <h3 class="text-center">Pemberian Obat & Cairan</h3>
                                        <button type="button" id="tambahPemberian" class="btn btn-success ml-1">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Tanggal Dan Jam</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="datetime-local" name="cairanTanggal[]" class="form-control">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Nama Obat / Jenis Cairan</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="namaCairan[]" class="form-control" placeholder="Jenis Cairan...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Dosis</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="dosisCairan[]" class="form-control" placeholder="Tinggi Dosis...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Cara</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="caraCairan[]" class="form-control" placeholder="Cara Pemberian...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Paraf</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="parafCairan[]" class="form-control" placeholder="Paraf...">
                                </div>
                                <div class="col-md-3">
                                    <label>Waktu Pemberian Cairan</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <select name="waktuPemberianCairan[]" id="perawatCairan" class="form-control">
                                        <option style="display: none">Pilih Waktu</option>
                                        <option value="Pagi">Pagi</option>
                                        <option value="Siang">Siang</option>
                                        <option value="Malam">Malam</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Nama Perawat & TTD</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="namaPemberiPerawat[]" class="form-control"
                                        placeholder="Nama Perawat...">
                                </div>
                                <div class="col-md-12 mb-2 d-flex justify-content-center align-items-center">
                                    <button type="button" id="hapusTambahCairan" class="btn btn-danger">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body appendObservasiLanjutan">
                            <div class="row d-flex">
                                <div class="col-md-12">
                                    <div class="form-group d-flex justify-content-between">
                                        <h3 class="text-center">Observasi Lanjutan</h3>
                                        <button type="button" id="tambahObservasi" class="btn btn-success ml-1">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label>Tanggal Dan Jam</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="datetime-local" name="tanggalObservasi[]" class="form-control">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>GCS</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="gcs[]" class="form-control" placeholder="Observasi GCS...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>T</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="t[]" class="form-control" placeholder="Observasi T...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>N</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="n[]" class="form-control" placeholder="Observasi N...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>RR</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="rr[]" class="form-control" placeholder="Observasi RR...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>S</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="s[]" class="form-control" placeholder="Observasi S...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Sat</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="sat[]" class="form-control" placeholder="Observasi Sat...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Keluhan</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="keluhan[]" class="form-control" placeholder="Observasi Keluhan...">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>TTD</label>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" name="ttd[]" class="form-control" placeholder="TTD Perawat...">
                                </div>
                                <div class="col-md-12 mb-2 d-flex justify-content-center align-items-center">
                                    <button type="button" id="hapusObservasiLanjutan" class="btn btn-danger">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center">Alat Yang Terpasang Pada Pasien</h3>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="IV Line" id="ivLine">
                                        <label class="form-check-label" for="ivLine">
                                            IV Line
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-9"><input type="text" name="alatIvline" id="ketIvline" class="form-control"
                                        placeholder="keterangan Alat IV Line"></div>
                                <div class="col-md-3 mt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Kateter" id="kateter">
                                        <label class="form-check-label" for="kateter">
                                            Kateter
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-9 mt-4"><input type="text" name="alatIvline" id="ketKateter" class="form-control"
                                        placeholder="keterangan Alat Kateter"></div>
                                <div class="col-md-3 mt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="CVC" id="cvc">
                                        <label class="form-check-label" for="cvc">
                                            CVC
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-9 mt-4"><input type="text" name="alatIvline" id="ketCvc" class="form-control"
                                        placeholder="keterangan Alat CVC"></div>
                                <div class="col-md-3 mt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="NGT" id="ngt">
                                        <label class="form-check-label" for="ngt">
                                            NGT
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-9 mt-4"><input type="text" name="alatIvline" id="ketNgt" class="form-control"
                                        placeholder="keterangan Alat NGT"></div>
                                <div class="col-md-3 mt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ETT" id="ett">
                                        <label class="form-check-label" for="ett">
                                            ETT
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-9 mt-4"><input type="text" name="alatIvline" id="ketEtt" class="form-control"
                                        placeholder="keterangan Alat ETT"></div>
                                <div class="col-md-3 mt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Lain" id="lain">
                                        <label class="form-check-label" for="lain">
                                            Lain-lain
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-9 mt-4"><input type="text" name="alatIvline" id="ketLain" class="form-control"
                                        placeholder="keterangan Alat Lain-lain"></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Hasil Akhir</label>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <label>Keluar IGD Tanggal :</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" name="tanggalHasilAkhir" class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label>Jam :</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="time" name="waktuHasilAkhir" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label>Dengan Tindak Lanjut Pelayanan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <div class="form-check d-flex">
                                                    <input class="form-check-input" type="radio" name="ruangRawat" id="ruangRawat">
                                                    <label class="form-check-label" for="ruangRawat">
                                                        Dirawat Diruangan
                                                    </label>
                                                    <input type="text" name="ruangRawat" class="form-control">
                                                </div>
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Kelas</label>
                                                <input type="text" name="kelasDirawat" class="form-control">
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Keluar</label>
                                                <input type="text" name="planningDirawat" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-flex">
                                                    <input class="form-check-input" type="radio" name="ruangOperasi"
                                                        id="ruangOperasi">
                                                    <label class="form-check-label" for="ruangOperasi">
                                                        Kamar Operasi
                                                    </label>
                                                    <input type="text" name="ruangOperasi" class="form-control">
                                                </div>
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Tanggal</label>
                                                <input type="date" name="tanggalOperasi" class="form-control">
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Jam</label>
                                                <input type="time" name="jamOperasi" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-flex">
                                                    <input class="form-check-input" type="radio" name="rujuk" id="rujuk">
                                                    <label class="form-check-label" for="rujuk">
                                                        Rujuk Ke
                                                    </label>
                                                    <input type="text" name="rujuk" class="form-control">
                                                </div>
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Alasan Rujuk :</label>
                                                <div class="form-check m-2">
                                                    <input class="form-check-input" type="radio" name="alasanRujuk"
                                                        id="rujukIndikasi">
                                                    <label class="form-check-label" for="rujukIndikasi">
                                                        Indikasi
                                                    </label>
                                                </div>
                                                <div class="form-check m-2">
                                                    <input class="form-check-input" type="radio" name="alasanRujuk"
                                                        id="rujukTempatPenuh">
                                                    <label class="form-check-label" for="rujukTempatPenuh">
                                                        Tempat Penuh
                                                    </label>
                                                </div>
                                                <div class="form-check m-2">
                                                    <input class="form-check-input" type="radio" name="alasanRujuk"
                                                        id="rujukPermintaan">
                                                    <label class="form-check-label" for="rujukPermintaan">
                                                        Permintaan Pasien
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pulang" id="pulang">
                                                    <label class="form-check-label" for="pulang">
                                                        Pulang
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check m-3">
                                                    <input class="form-check-input" type="radio" name="pulangIndikasi"
                                                        id="pulangIndikasi">
                                                    <label class="form-check-label" for="pulangIndikasi">
                                                        Indikasi Medis
                                                    </label>
                                                </div>
                                                <div class="form-check m-3">
                                                    <input class="form-check-input" type="radio" name="pulangPermintaan"
                                                        id="pulangPermintaan">
                                                    <label class="form-check-label" for="pulangPermintaan">
                                                        Atas Permintaan Sendiri
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex m-3">
                                                    <input class="form-check-input" type="radio" name="pulangControl"
                                                        id="pulangControl">
                                                    <label class="form-check-label" for="pulangControl">
                                                        Kontrol Berobat Jalan Pada Poli
                                                    </label>
                                                    <input type="text" name="pulangControl" class="form-control">
                                                </div>
                                                <div class="form-check d-flex m-3">
                                                    <input class="form-check-input" type="radio" name="pulangMenolak"
                                                        id="pulangMenolak">
                                                    <label class="form-check-label" for="pulangMenolak">
                                                        Menolak Rawat Inap/Tindakan Dengan Alasan
                                                    </label>
                                                    <input type="text" name="pulangMenolak" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-flex">
                                                    <input class="form-check-input" type="radio" name="ruangOperasi" id="meninggal">
                                                    <label class="form-check-label" for="meninggal">
                                                        Meninggal
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Tanggal</label>
                                                <input type="date" name="tanggalMeninggal" class="form-control">
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Jam</label>
                                                <input type="time" name="jamMeninggal" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-flex">
                                                    <input class="form-check-input" type="radio" name="ruangOperasi" id="doa">
                                                    <label class="form-check-label" for="doa">
                                                        Doa
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Tanggal</label>
                                                <input type="date" name="tanggalDoa" class="form-control">
                                            </td>
                                            <td class="d-flex">
                                                <label class="m-2">Jam</label>
                                                <input type="time" name="jamDoa" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="form-check d-flex">
                                                    <input class="form-check-input" type="radio" name="ruangOperasi" id="hasilLain">
                                                    <label class="form-check-label" for="hasilLain">
                                                        Lain-lain
                                                    </label>
                                                    <textarea name="ruangOperasi" id="inputLainLain" class="form-control ml-3"
                                                        style="width:730px" cols="10" rows="5"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <button id="btn-tab-5-prev" type="button" class="btn btn-primary"> Previous </button>
                        </div>
                        <div class="col">
                            <button id="btn-tab-5-next" type="button" class="btn btn-primary"> Next </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tab-6 --}}
        <div class="tab" id="tab-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h3>Diisi Bila Terjadi Resusitasi Jantung</h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">Diagnosis / indikasi dilakukan resusitasi jantung paru</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Dimulai pada Pukul :</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="time" name="mulaiResusitasi" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Diakhiri Pada Pukul</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="time" name="akhirResusitasi" class="form-control">
                                </div>
                                <div class="col-md-6 d-flex">
                                    <label class="mr-1">Lama Resusitasi Jantung Paru</label>
                                    <input type="text" name="lamaResusitasi" class="form-control" placeholder="Lama Resusitasi...">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5">
                                    <label>Resusitasi Jantung Paru Dilakukan Oleh :</label>
                                </div>
                                <div class="col-md-7 d-flex">
                                    <input type="text" name="namaDokterResusitasi" class="form-control mr-2"
                                        placeholder="Nama Dokter...">
                                    <input type="text" name="namaPerawatResusitasi" class="form-control"
                                        placeholder="Nama Perawat...">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label>Dilakukan Intubasi Pada Jam</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="time" name="waktuIntubasi" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 text-right">
                                    <label>Ukuran ETT</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="ukuranEtt" class="form-control" placeholder="ukuran ETT...">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 text-right">
                                    <label class="text-right">Batas</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="batasIntubasi" class="form-control" placeholder="Batas...">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Pelaksanaan Intubasi</label>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pelaksana" id="intubasiDokter">
                                        <label class="form-check-label mr-4" for="intubasiDokter">
                                            Dokter
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pelaksana" id="intubasiPerawat">
                                        <label class="form-check-label" for="intubasiPerawat">
                                            Perawat
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Jenis Intubasi</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="jenisIntubasi" class="form-control" placeholder="Jenis Intubasi...">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Pemasangan Akses Intra Vena</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="aksesIntraVena" class="form-control"
                                        placeholder="Pemasangan Akses Intra Vena...">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Cairan IV Yang Dipakai</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="cairanDipakai" class="form-control" placeholder="Jenis Cairan...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="appendMonitoring">
                                <div class="row d-flex">
                                    <div class="col-md-12">
                                        <div class="form-group d-flex justify-content-between">
                                            <h3 class="text-center">Penatalaksanaan Resusitasi Jantung Paru (monitoring
                                                obat-obatan, defibrilasi dll)</h3>
                                            <button type="button" id="tambahMonitoring" class="btn btn-success ml-1">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label>Tanggal Dan Jam</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="datetime-local" name="tanggalResusitasi[]" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Nadi</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="observasiNadi[]" class="form-control"
                                            placeholder="Observasi Nadi...">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>RR</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="observasiRR[]" class="form-control" placeholder="Observasi RR...">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Tekanan Darah</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="observasiTekananDarah[]" class="form-control"
                                            placeholder="Observasi Tekanan Darah...">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Gambaran EKG</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="observasiEkg[]" class="form-control"
                                            placeholder="Observasi Gambaran EKG...">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>SPO2</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="observasiSpo2[]" class="form-control"
                                            placeholder="Observasi SPO2...">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Nama Obat</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="terapiObat[]" class="form-control"
                                            placeholder="Terapi Nama Obat...">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Dosis</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="terapiDosis[]" class="form-control" placeholder="Terapi Dosis...">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Rute</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="terapiRute[]" class="form-control" placeholder="Terapi Rute...">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Keterangan</label>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="resusitasiKeterangan[]" class="form-control"
                                            placeholder="Keterangan...">
                                    </div>
                                    <div class="col-md-12 mb-2 d-flex justify-content-center align-items-center">
                                        <button type="button" id="hapusResusitasi" class="btn btn-danger">Batal</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 d-flex">
                                <div class="col-md-12">
                                    <div class="form-group d-flex justify-content-between">
                                        <h3 class="text-center">Defibrilasi</h3>
                                        <button type="button" id="tambahDefibrilasi" class="btn btn-success ml-1">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Waktu</th>
                                            <th>Ritme EKG</th>
                                            <th>Joules</th>
                                            <th>Ritme EKG</th>
                                        </tr>
                                    </thead>
                                    <tbody id="defibrilasiAppend">
                                        <tr>
                                            <td>
                                                <input type="text" name="waktuDefibrilasi[]" class="form-control"
                                                    placeholder="Waktu Defibrilasi...">
                                            </td>
                                            <td>
                                                <input type="text" name="ritmeWaktu[]" class="form-control"
                                                    placeholder="Ritme EKG...">
                                            </td>
                                            <td>
                                                <input type="text" name="joulDefibrilasi[]" class="form-control"
                                                    placeholder="Joules Defibrilasi...">
                                            </td>
                                            <td>
                                                <input type="text" name="joulDefibrilasi[]" class="form-control"
                                                    placeholder="Ritme EKG...">
                                            </td>
                                            <td>
                                                <button type="button" id="hapusDefibrilasi" class="btn btn-danger">-</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    Hasil Akhir Resusitasi Jantung Paru :
                                </div>
                                <div class="col-md-12 mt-2">
                                    <textarea name="hasilAkhir" class="form-control" cols="10" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <label>Keterangan :</label>
                                </div>
                                <div class="col-md-12 mt-2 d-flex">
                                    <label class="mr-3">Outcome resusitasi jantung paru :</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hasilAkhirKeterangan" id="keteranganICU">
                                        <label class="form-check-label mr-3" for="keteranganICU">
                                            ICU
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hasilAkhirKeterangan" id="ketRuangUmum">
                                        <label class="form-check-label mr-3" for="ketRuangUmum">
                                            Ruang Umum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hasilAkhirKeterangan" id="ketMeninggal">
                                        <label class="form-check-label mr-3" for="ketMeninggal">
                                            Meninggal
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col">
                                <button id="btn-tab-6-prev" type="button" class="btn btn-primary"> Previous </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/deznav-init.js') }}"></script>
<!-- Apex Chart -->
<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>


<!-- Dashboard 1 -->
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
@endpush

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $(function() {

        // default condition
                $(".tab").css("display", "none")
                $("#tab-1").css("display", "block");
                $("#step-1").css("opacity", "1");

                function run(hideTab, showTab) {
                    if(hideTab < showTab){ // if not press previous
                        let current = 0;
                        x = $('#tab-'+hideTab);
                    }

                    // Progress bar
                    for (i = 1; i <= showTab; i++){
                        $("#step-"+i).css("opacity", "1");

                    }

                    // Switch tab
                    $("#tab-"+hideTab).css("display", "none");
                    $("#tab-"+showTab).css("display", "block");
                    $(this).scrollTop(0);

                }

                // tab 1
                $('#btn-tab-1-next').click(function() {
                    run(1, 2);
                });

                // tab 2
                $('#btn-tab-2-prev').click(function() {
                    run(2, 1);
                });
                $('#btn-tab-2-next').click(function() {
                    run(2, 3);
                });

                // tab 3
                $('#btn-tab-3-prev').click(function() {
                    run(3, 2);
                });
                $('#btn-tab-3-next').click(function() {
                    run(3, 4);
                });

                $('#btn-tab-4-prev').click(function() {
                    run(4, 3);
                });
                $('#btn-tab-4-next').click(function() {
                    run(4, 5);
                });

                $('#btn-tab-5-prev').click(function() {
                    run(5, 4);
                });
                $('#btn-tab-5-next').click(function() {
                    run(5, 6);
                });

                $('#btn-tab-6-prev').click(function() {
                    run(6, 5);
                });


        $('input[name="Bahasa"]').click(function(e) {
            if(e.target.value === 'asing') {
                $('#input_asing').show();
            } else {
                $('#input_asing').hide();
                $('#input_asing').val('');
            } if(e.target.value === 'daerah') {
                $('#daerah1').show();
            } else {
                $('#daerah1').hide();
                $('#daerah1').val('');
            }
        });
            $('#input_asing').hide();
            $('#daerah1').hide();


        $('input[name="cairan"]').click(function(e) {
            if(e.target.value === 'diare') {
                $('#input_diare').show();
            } else {
                $('#input_diare').hide();
                $('#input_diare').val('');
            } if(e.target.value === 'muntah') {
                $('#input_muntah').show();
            } else {
                $('#input_muntah').hide();
                $('#input_muntah').val('');
            } if(e.target.value === 'bakar') {
                $('#input_bakar').show();
            } else {
                $('#input_bakar').hide();
                $('#input_bakar').val('');
            }
        });
            $('#input_diare').hide();
            $('#input_muntah').hide();
            $('#input_bakar').hide();


        $('#bhs').change(function (e) {
            e.preventDefault();
            let value = $("input:radio[name=Bahasa]:checked").val();
            if (value === "daerah") {

                $('#b_daerah').append('<input type="text" class="form-control" name="Bahasa" id="input_daerah">');
            }else{
                $('#input_daerah').remove();
            }
        });

        $('input[name="Riwayat_alergi"]').click(function(e) {
            if(e.target.value === 'riwayat') {
                $('#alergi').show();
            } else {
                $('#alergi').hide();
                $('#alergi').val('');
            }
        });
            $('#alergi').hide();


        $('input[name="airway"]').click(function(e) {
            if(e.target.value === 'benda_asing') {
                $('#benda').show();
            } else {
                $('#benda').hide();
                $('#benda').val('');
            } if(e.target.value === 'lainya') {
                $('#lain').show();
            } else {
                $('#lain').hide();
                $('#lain').val('');
            }
        });
            $('#benda').hide();
            $('#lain').hide();


        $('input[name="suara_nafas"]').click(function(e) {
            if(e.target.value === 'whezing') {
                $('#input_whezing').show();
            } else {
                $('#input_whezing').hide();
                $('#input_whezing').val('');
            } if(e.target.value === 'ronchi') {
                $('#input_ronchi').show();
            } else {
                $('#input_ronchi').hide();
                $('#input_ronchi').val('');
            }
        });
            $('#input_whezing').hide();
            $('#input_ronchi').hide();


        $('input[name="cara_masuk"]').click(function(e) {
            if(e.target.value === 'puskesmas') {
                $('#input_puskesmas').show();
            } else {
                $('#input_puskesmas').hide();
                $('#input_puskesmas').val('');
            } if(e.target.value === 'rumahsakit') {
                $('#input_rs').show();
            } else {
                $('#input_rs').hide();
                $('#input_rs').val('');
            } if(e.target.value === 'lain') {
                $('#input_lain').show();
            } else {
                $('#input_lain').hide();
                $('#input_lain').val('');
            }
        });
            $('#input_puskesmas').hide();
            $('#input_rs').hide();
            $('#input_lain').hide();


        $('.nadi').change(function (e) {
            e.preventDefault();
            let value = $("input:radio[name=Nadi]:checked").val();
            if (value === "teraba") {

                $('#nadi_teraba').append('<div class="input-group" id="input_teraba"><input type="text" class="form-control" name="Nadi"><div class="input-group-append"><span class="input-group-text"> x/mnt </span></div></div>');

            }else{

                $('#input_teraba').remove();

            }
        });

        $('input[name="pendarahan"]').click(function(e) {
            if(e.target.value === 'darah') {
                $('#input_darah').show();
            } else {
                $('#input_darah').hide();
                $('#input_darah').val('');
            }
        });
            $('#input_darah').hide();


        $('#btn_simpan').click(function (e) {
            e.preventDefault();

            let id_satu = $('#id_satu').val();
            let alasan_datang = $('#alasan-datang').val();
            console.log(alasan_datang);
        });


        $('input[name="nyeri"]').click(function(e) {
            if(e.target.value === 'nyeriNyeri') {
                $('#ya_nyeri').show();
            } else {
                $('#ya_nyeri').hide();
                $('#ya_nyeri').val('');
            }
        });
            $('#ya_nyeri').hide();


        $('input[name="penjajaran_nyeri"]').click(function(e) {
            if(e.target.value === 'penjajaran') {
                $('#text_penjajaran').show();
            } else {
                $('#text_penjajaran').hide();
                $('#text_penjajaran').val('');
            }
        });
            $('#text_penjajaran').hide();


        $('input[name="luka"]').click(function(e) {
            if(e.target.value === 'lokasi luka') {
                $('#area_nyeri').show();
            } else {
                $('#area_nyeri').hide();
                $('#area_nyeri').val('');
            }
        });
            $('#area_nyeri').hide();


        $('input[name="dekubitus"]').click(function(e) {
            if(e.target.value === 'lokasi dekubitus') {
                $('#area_dekubitus').show();
            } else {
                $('#area_dekubitus').hide();
                $('#area_dekubitus').val('');
            }
        });
            $('#area_dekubitus').hide();


        let awal = false;

        $('#dada').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#dada').css( {fill : "#C37171"} );
            } else {
                $('#dada').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#paha1').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#paha1').css( {fill : "#C37171"} );
            } else {
                $('#paha1').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#paha2').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#paha2').css( {fill : "#C37171"} );
            } else {
                $('#paha2').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#perut1').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#perut1').css( {fill : "#C37171"} );
            } else {
                $('#perut1').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#betis1').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#betis1').css( {fill : "#C37171"} );
            } else {
                $('#betis1').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#lengan_kiri1').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#lengan_kiri1').css( {fill : "#C37171"} );
            } else {
                $('#lengan_kiri1').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#lengan_kiri2').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#lengan_kiri2').css( {fill : "#C37171"} );
            } else {
                $('#lengan_kiri2').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#lengan_kanan1').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#lengan_kanan1').css( {fill : "#C37171"} );
            } else {
                $('#lengan_kanan1').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#lengan_kanan2').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#lengan_kanan2').css( {fill : "#C37171"} );
            } else {
                $('#lengan_kanan2').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#pundak').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#pundak').css( {fill : "#C37171"} );
            } else {
                $('#pundak').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#perut2').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#perut2').css( {fill : "#C37171"} );
            } else {
                $('#perut2').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#perut3').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#perut3').css( {fill : "#C37171"} );
            } else {
                $('#perut3').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#perut4').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#perut4').css( {fill : "#C37171"} );
            } else {
                $('#perut4').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#punggung1').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#punggung1').css( {fill : "#C37171"} );
            } else {
                $('#punggung1').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#punggung2').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#punggung2').css( {fill : "#C37171"} );
            } else {
                $('#punggung2').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#punggung_kanan').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#punggung_kanan').css( {fill : "#C37171"} );
            } else {
                $('#punggung_kanan').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#punggung_kiri').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#punggung_kiri').css( {fill : "#C37171"} );
            } else {
                $('#punggung_kiri').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#pundak_kanan').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#pundak_kanan').css( {fill : "#C37171"} );
            } else {
                $('#pundak_kanan').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#pundak_kiri').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#pundak_kiri').css( {fill : "#C37171"} );
            } else {
                $('#pundak_kiri').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#lengan_kanan3').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#lengan_kanan3').css( {fill : "#C37171"} );
            } else {
                $('#lengan_kanan3').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#lengan_kanan4').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#lengan_kanan4').css( {fill : "#C37171"} );
            } else {
                $('#lengan_kanan4').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#lengan_kiri3').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#lengan_kiri3').css( {fill : "#C37171"} );
            } else {
                $('#lengan_kiri3').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#lengan_kiri4').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#lengan_kiri4').css( {fill : "#C37171"} );
            } else {
                $('#lengan_kiri4').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#pantat_kanan').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#pantat_kanan').css( {fill : "#C37171"} );
            } else {
                $('#pantat_kanan').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#pantat_kiri').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#pantat_kiri').css( {fill : "#C37171"} );
            } else {
                $('#pantat_kiri').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#paha3').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#paha3').css( {fill : "#C37171"} );
            } else {
                $('#paha3').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#paha4').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#paha4').css( {fill : "#C37171"} );
            } else {
                $('#paha4').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#betis3').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#betis3').css( {fill : "#C37171"} );
            } else {
                $('#betis3').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('#betis4').click(function (e) {
            e.preventDefault();
            if (awal == true) {
                $('#betis4').css( {fill : "#C37171"} );
            } else {
                $('#betis4').css( {fill : "#03045e"} );
            }
            awal = !awal;

        });


        $('.faktorResikoAnak').change(function (e) {
    e.preventDefault();
    let rr = document.getElementById('risikoMuda1');
    let rt = document.getElementById('risikoMuda2');
    let valueUmur = parseInt($('#faktorResikoAnakUmur').val());
    let valueJK = parseInt($('#faktorResikoAnakJenisKelamin').val());
    let valueDayaPikir = parseInt($('#faktorResikoAnakDayaPikir').val());
    let valueDiagnosa = parseInt($('#faktorResikoAnakDiagnosa').val());
    let valueFaktorLingkungan = parseInt($('#faktorResikoAnakFaktorLingkungan').val());
    let valueResponBedah = parseInt($('#faktorResikoAnakResponPembedahan').val());
    let valuePenggunaanObat = parseInt($('#faktorResikoAnakPenggunaanObat').val());
    let skore = valueUmur + valueJK + valueDiagnosa + valueDayaPikir + valueFaktorLingkungan +
        valueResponBedah + valuePenggunaanObat;
    console.log(skore);
    if (skore >= 0 && skore <= 11) {
        rr.checked = true;
        $(rr).removeAttr("disabled");
    } else if (skore >= 12) {
        rt.checked = true;
        $(rt).removeAttr("disabled");
    }
});
$('.risikoTua').change(function (e) {
    e.preventDefault();
    let tr = document.getElementById('risikoTua1');
    let rr = document.getElementById('risikoTua2');
    let rt = document.getElementById('risikoTua3');

    let ru = parseInt($('#risikoJatuh').val());
    let rdm = parseInt($('#risikoDiagnosisMedis').val());
    let rabj = parseInt($('#risikoAlatBantuJalan').val());
    let rgi = parseInt($('#risikoGunaInfus').val());
    let rb = parseInt($('#risikoBerjalan').val());
    let rsm = parseInt($('#risikoStatusMental').val());
    let total = ru + rdm + rabj + rgi + rb + rsm;
    if (total >= 0 && total <= 24) {
        tr.checked = true;
        $(tr).removeAttr("disabled");
    } else if (total >= 25 && total <= 44) {
        rr.checked = true;
        $(rr).removeAttr("disabled");
    } else if (total >= 45) {
        rt.checked = true;
        $(rt).removeAttr("disabled");
    }
});
$('.ekgInput').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="ekg"]:checked').val();
    if (value === "ya") {
        $('.ekgAppend').append(
            '<input type="text" name="ekg" id="ekgInputText" class="form-control ml-2" placeholder="Penunjang EKG...">'
        );
    } else {
        $('#ekgInputText').remove();
    }
});
$('.gdaInput').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="gda"]:checked').val();
    if (value === "ya") {
        $('.gdaAppend').append(
            '<input type="text" name="gda" id="gdaInputText" class="form-control ml-2" placeholder="Penunjang GDA...">'
        );
    } else {
        $('#gdaInputText').remove();
    }
});
$('.radiologiInput').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="radiologi"]:checked').val();
    if (value === "ya") {
        $('.radiologiAppend').append(
            '<input type="text" name="radiologi" id="radiologiInputText" class="form-control ml-2" placeholder="Penunjang Radiologi...">'
        );
    } else {
        $('#radiologiInputText').remove();
    }
});
$('.laboratInput').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="laborat"]:checked').val();
    if (value === "ya") {
        $('.laboratAppend').append(
            '<input type="text" name="laborat" id="laboratInputText" class="form-control ml-2" placeholder="Penunjang Laborat...">'
        );
    } else {
        $('#laboratInputText').remove();
    }
});
$('.checkKepala').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="organKepala"]:checked').val();
    if (value === "tidak") {
        $('.kepalaTemuan').append(
            '<input type="text" name="organKepala" id="kepalaTemuanInput" class="form-control ml-3" placeholder="Benda Temuan">'
        );
        $('#kepalaTemuanInput').focus();
    } else {
        $('#kepalaTemuanInput').remove();
    }
});
$('.checkLeher').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="organLeher"]:checked').val();
    if (value === "tidak") {
        $('.leherTemuan').append(
            '<input type="text" name="organLeher" id="leherTemuanInput" class="form-control ml-3" placeholder="Benda Temuan">'
        );
        $('#leherTemuanInput').focus();
    } else {
        $('#leherTemuanInput').remove();
    }
});
$('.checkThorax').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="organThorax"]:checked').val();
    if (value === "tidak") {
        $('.thoraxTemuan').append(
            '<input type="text" name="organThorax" id="thoraxTemuanInput" class="form-control ml-3" placeholder="Benda Temuan">'
        );
        $('#thoraxTemuanInput').focus();
    } else {
        $('#thoraxTemuanInput').remove();
    }
});
$('.checkAbdomen').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="organAbdomen"]:checked').val();
    if (value === "tidak") {
        $('.abdomenTemuan').append(
            '<input type="text" name="organAbdomen" id="abdomenTemuanInput" class="form-control ml-3" placeholder="Benda Temuan">'
        );
        $('#abdomenTemuanInput').focus();
    } else {
        $('#abdomenTemuanInput').remove();
    }
});
$('.checkGenetalia').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="organGenetalia"]:checked').val();
    if (value === "tidak") {
        $('.genetaliaTemuan').append(
            '<input type="text" name="organGenetalia" id="genetaliaTemuanInput" class="form-control ml-3" placeholder="Benda Temuan">'
        );
        $('#genetaliaTemuanInput').focus();
    } else {
        $('#genetaliaTemuanInput').remove();
    }
});
$('.checkAnus').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="organAnus"]:checked').val();
    if (value === "tidak") {
        $('.anusTemuan').append(
            '<input type="text" name="organAnus" id="anusTemuanInput" class="form-control ml-3" placeholder="Benda Temuan">'
        );
        $('#anusTemuanInput').focus();
    } else {
        $('#anusTemuanInput').remove();
    }
});
$('.checkEkstremitas').change(function (e) {
    e.preventDefault();
    let value = $('input:radio[name="organEkstremitas"]:checked').val();
    if (value === "tidak") {
        $('.ekstremitasTemuan').append(
            '<input type="text" name="organEkstremitas" id="ekstremitasTemuanInput" class="form-control ml-3" placeholder="Benda Temuan">'
        );
        $('#ekstremitasTemuanInput').focus();
    } else {
        $('#ekstremitasTemuanInput').remove();
    }
});
$('.pemeriksaanPenunjang').change(function (e) {
    e.preventDefault();
    let value = $(this).val();
    if (value === "Radiologi") {
        $('#radiologiLabel').text("Radiologi :");
        $('#radiologiRadio').append(`<div class="form-group d-flex ml-3 radiologiPilihan">
            <div class="form-check">
                <input class="form-check-input penunjangRadiologi" type="radio" name="pemeriksaPenunjangRadiologi" id="radiologiThorax" value="Thorax">
                <label class="form-check-label" for="radiologiThorax">
                    Thorax
                </label>
            </div>
            <div class="form-check ml-4">
                <input class="form-check-input penunjangRadiologi" type="radio" name="pemeriksaPenunjangRadiologi" id="radiologiCtScan" value="CT Scan">
                <label class="form-check-label" for="radiologiCtScan">
                    CT Scan
                </label>
            </div>
            <div class="form-check ml-4 d-flex inputLain">
                <input class="form-check-input penunjangRadiologi" type="radio"  name="pemeriksaPenunjangRadiologi" id="radiologiLain" value="lain">
                <label class="form-check-label" for="radiologiLain">
                    lainya
                </label>
            </div>
        </div>`);
        $('#textareaLaborat').remove();
    } else if (value === "Laboratorium") {
        $('.inputLaborat').append(
            `<textarea name="pemeriksaPenunjang" id="textareaLaborat" class="form-control ml-3" cols="5" rows="5"></textarea>`
        );
        $('#textareaLaborat').focus();
        $('.radiologiPilihan').remove();
        $('#radiologiLabel').text("Radiologi");
    } else {
        $('#radiologiLabel').text("Radiologi");
        $('.radiologiPilihan').remove();
        $('#textareaLaborat').remove();
    }
        });
        $(document).on('change', '.penunjangRadiologi', function (e) {
            e.preventDefault();
            let value = $(".penunjangRadiologi:checked").val();
            if (value === "lain") {
                $('.inputLain').append(
                    `<input type="text" name="pemeriksaPenunjang" id="radiologiLainInput" class="form-control ml-2">`
                );
                $('#radiologiLainInput').focus();
            } else {
                $('#radiologiLainInput').remove();
            }
        });
        $(document).on('click', '#tambahTindakan', function (e) {
            e.preventDefault();
            $('.appendTindakan').append(`<div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">Tanggal Dan Jam</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="date" name="tanggalTindakan[]" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <labe>Tindakan Keperawatan</labe>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="namaTindakan[]" class="form-control"
                        placeholder="Tindakan Keperawatan...">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Nama & Paraf Perawat</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="namaPerawatTindakan[]" class="form-control"
                        placeholder="Nama Perawat...">
                </div>
                <div class="col-md-12 mb-2 d-flex justify-content-center align-items-center">
                    <button type="button" id="hapusTindakan" class="btn btn-danger">Batal</button>
                </div>
            </div>`);
        });
        $(document).on('click', '#hapusTindakan', function (e) {
            e.preventDefault();
            $(this).closest(".row").remove();
            return false;
        });
        $(document).on('click', '#tambahPemberian', function (e) {
            e.preventDefault();
            $('.appendTambahCairan').append(`<div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">Tanggal Dan Jam</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="datetime-local" name="cairanTanggal[]" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Nama Obat / Jenis Cairan</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="namaCairan[]" class="form-control"
                        placeholder="Jenis Cairan...">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Dosis</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="dosisCairan[]" class="form-control"
                        placeholder="Tinggi Dosis...">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Cara</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="caraCairan[]" class="form-control"
                        placeholder="Cara Pemberian...">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Paraf</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="parafCairan[]" class="form-control"
                        placeholder="Paraf...">
                </div>
                <div class="col-md-3">
                    <label>Waktu Pemberian Cairan</label>
                </div>
                <div class="col-md-9 mb-3">
                    <select name="waktuPemberianCairan[]" id="perawatCairan" class="form-control">
                        <option style="display: none">Pilih Waktu</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Siang">Siang</option>
                        <option value="Malam">Malam</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Nama Perawat & TTD</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="namaPemberiPerawat[]" class="form-control" placeholder="Nama Perawat...">
                </div>
                <div class="col-md-12 mb-2 d-flex justify-content-center align-items-center">
                    <button type="button" id="hapusTambahCairan" class="btn btn-danger">Batal</button>
                </div>
            </div>`);
        });
        $(document).on('click', '#hapusTambahCairan', function (e) {
            e.preventDefault();
            $(this).closest(".row").remove();
            return false;
        });
        $(document).on('click', '#tambahObservasi', function (e) {
            e.preventDefault();
            $('.appendObservasiLanjutan').append(`<div class="row">
                <div class="col-md-3 mb-3">
                    <label>Tanggal Dan Jam</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="datetime-local" name="tanggalObservasi[]" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <label>GCS</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="gcs[]" class="form-control" placeholder="Observasi GCS...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>T</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="t[]" class="form-control" placeholder="Observasi T...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>N</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="n[]" class="form-control" placeholder="Observasi N...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>RR</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="rr[]" class="form-control" placeholder="Observasi RR...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>S</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="s[]" class="form-control" placeholder="Observasi S...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Sat</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="sat[]" class="form-control" placeholder="Observasi Sat...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Keluhan</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="keluhan[]" class="form-control" placeholder="Observasi Keluhan...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>TTD</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="ttd[]" class="form-control" placeholder="TTD Perawat...">
                </div>
                <div class="col-md-12 mb-2 d-flex justify-content-center align-items-center">
                    <button type="button" id="hapusObservasiLanjutan"
                        class="btn btn-danger">Batal</button>
                </div>
            </div>`);
        });
        $(document).on('click', '#hapusObservasiLanjutan', function (e) {
            e.preventDefault();
            $(this).closest('.row').remove();
            return false;
        });
        $('#ivLine').change(function (e) {
            e.preventDefault();
            let ivlineId = document.getElementById("ivLine");
            ivlineId.checked ? $('#ketIvline').focus() : $('#ketIvline').val('');
        });
        $('#kateter').change(function (e) {
            e.preventDefault();
            let kateterId = document.getElementById("kateter");
            kateterId.checked ? $('#ketKateter').focus() : $('#ketKateter').val('');
        });
        $('#cvc').change(function (e) {
            e.preventDefault();
            let cvcId = document.getElementById("cvc");
            cvcId.checked ? $('#ketCvc').focus() : $('#ketCvc').val('');
        });
        $('#ngt').change(function (e) {
            e.preventDefault();
            let ngtId = document.getElementById("ngt");
            ngtId.checked ? $('#ketNgt').focus() : $('#ketNgt').val('');
        });
        $('#ett').change(function (e) {
            e.preventDefault();
            let ettId = document.getElementById("ett");
            ettId.checked ? $('#ketEtt').focus() : $('#ketEtt').val('');
        });
        $('#lain').change(function (e) {
            e.preventDefault();
            let lainId = document.getElementById("lain");
            lainId.checked ? $('#ketLain').focus() : $('#ketLain').val('');
        });
        $(document).on('click', '#tambahMonitoring', function (e) {
            e.preventDefault();
            $('.appendMonitoring').append(`<div class="row">
                <div class="col-md-3 mb-3">
                    <label>Tanggal Dan Jam</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="datetime-local" name="tanggalResusitasi[]" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Nadi</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="observasiNadi[]" class="form-control"
                        placeholder="Observasi Nadi...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>RR</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="observasiRR[]" class="form-control"
                        placeholder="Observasi RR...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Tekanan Darah</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="observasiTekananDarah[]" class="form-control"
                        placeholder="Observasi Tekanan Darah...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Gambaran EKG</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="observasiEkg[]" class="form-control"
                        placeholder="Observasi Gambaran EKG...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>SPO2</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="observasiSpo2[]" class="form-control"
                        placeholder="Observasi SPO2...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Nama Obat</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="terapiObat[]" class="form-control"
                        placeholder="Terapi Nama Obat...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Dosis</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="terapiDosis[]" class="form-control"
                        placeholder="Terapi Dosis...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Rute</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="terapiRute[]" class="form-control"
                        placeholder="Terapi Rute...">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Keterangan</label>
                </div>
                <div class="col-md-9 mb-3">
                    <input type="text" name="resusitasiKeterangan[]" class="form-control"
                        placeholder="Keterangan...">
                </div>
                <div class="col-md-12 mb-2 d-flex justify-content-center align-items-center">
                    <button type="button" id="hapusResusitasi"
                        class="btn btn-danger">Batal</button>
                </div>
            </div>`);
        });
        $(document).on('click', '#hapusResusitasi', function (e) {
            e.preventDefault();
            $(this).closest('.row').remove();
            return false;
        });
        $(document).on('click', '#tambahDefibrilasi', function (e) {
            e.preventDefault();
            $('#defibrilasiAppend').append(`<tr>
                            <td>
                                <input type="text" name="waktuDefibrilasi[]" class="form-control"
                                    placeholder="Waktu Defibrilasi...">
                            </td>
                            <td>
                                <input type="text" name="ritmeWaktu[]" class="form-control"
                                    placeholder="Ritme EKG...">
                            </td>
                            <td>
                                <input type="text" name="joulDefibrilasi[]" class="form-control"
                                    placeholder="Joules Defibrilasi...">
                            </td>
                            <td>
                                <input type="text" name="joulDefibrilasi[]" class="form-control"
                                    placeholder="Ritme EKG...">
                            </td>
                            <td>
                                <button type="button" id="hapusDefibrilasi" class="btn btn-danger">-</button>
                            </td>
                        </tr>`);
        });
        $(document).on('click', '#hapusDefibrilasi', function (e) {
            e.preventDefault();
            $(this).closest("tr").remove();
            return false;
        });

    });

</script>

