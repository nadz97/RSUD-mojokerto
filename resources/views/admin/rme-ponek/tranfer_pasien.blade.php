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
    <div class="col-md-3">
        <label class="label-input">Tanggal Masuk</label>
        <input type="date" name="tanggalMasuk" class="form-control">
    </div>
    <div class="col-md-3">
        <label class="label-input">Tanggal Pindah</label>
        <input type="date" name="tanggalPindah" class="form-control">
    </div>
    <div class="col-md-3">
        <label class="label-input">Asal Ruangan</label>
        <input type="text" name="asalRuangan" class="form-control" placeholder="Asal Ruangan...">
    </div>
    <div class="col-md-3">
        <label class="label-input">Ruang Rawat Selanjutnya</label>
        <input type="text" name="ruangRawatSelanjutnya" class="form-control" placeholder="Ruang Selanjutnya...">
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-6">
        <label class="label-input">Dokter Penanggung Jawab Pelayanan(DPJP)</label>
        <input type="text" name="dokterPenanggungJawab" class="form-control"
            placeholder="Dokter Penanggung Jawab...">
    </div>
    <div class="col-md-6">
        <label class="label-input">Dokter Konsultan</label>
        <input type="text" name="dokterKonsultan" class="form-control" placeholder="Dokter Konsultan...">
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-4">
        <label class="label-input">Diangnosis Utama</label>
        <textarea name="diagnosiUtama" class="form-control" placeholder="Diagnosis Utama..." rows="10"></textarea>
    </div>
    <div class="col-md-8">
        <label class="label-input">Perlu Menjadi Perhatian :</label>
        <div class="form-check d-flex">
            <div class="group">
                <input class="form-check-input perhatian" type="radio" name="perhatian" value="alergi"
                    id="radioAlergi">
                <label class="form-check-label" style="width:140px;" for="radioAlergi">
                    Alergi, Sebutkan
                </label>
            </div>
            <input type="text" name="perhatian" id="alergi" class="form-control"
                placeholder="Jenis Alergi...">
        </div>
        <div class="form-check mt-3 d-flex">
            <div class="group">
                <input class="form-check-input perhatian" name="perhatian" type="radio" value="infeksi"
                    id="radioInfeksi">
                <label class="form-check-label" style="width: 130px;" for="radioInfeksi">
                    Infeksi Menular
                </label>
            </div>
            <input type="text" name="perhatian" id="infeksi" class="form-control perhatian"
                placeholder="Jenis Infeksi...">
        </div>
        <div class="form-check mt-3">
            <input class="form-check-input perhatian" type="radio" name="perhatian" value="" id="radioMrsa">
            <label class="form-check-label" for="radioMrsa">
                MRSA
            </label>
        </div>
        <div class="form-check mt-3 d-flex">
            <div class="group">
                <input class="form-check-input perhatian" name="perhatian" type="radio" value="lain"
                    id="radioLainya">
                <label class="form-check-label" for="radioLainya">
                    Lainya
                </label>
            </div>
            <input type="text" name="perhatian" id="lainya" class="form-control ml-2"
                placeholder="lainya...">
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-4 appendDiagnosisSekundre">
        <div class="group d-flex justify-content-between">
            <label class="label-input">Diagnosis Sekunder</label>
            <button type="button" id="tambahDiagnosis" class="btn btn-success">+</button>
        </div>
        <div class="group d-flex justify-content-between mt-2">
            <input type="text" name="diagnosisSekunder[]" class="form-control"
                placeholder="Diagnosis Sekunder...">
            <button type="button" class="btn btn-danger ml-2" id="deleteDiagnosis">-</button>
        </div>
    </div>
    <div class="col-md-8">
        <label class="label-input">Alasan Pemindahan Pasien</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="alasanPindah" id="kondisiPasien">
            <label class="form-check-label" for="kondisiPasien">
                Kondisi Pasien : memburuk/stabil/tidak ada perubahan
            </label>
        </div>
        <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="alasanPindah" id="fasilitas">
            <label class="form-check-label" for="fasilitas">
                Fasilitas : kurang memadai/membutuhkan peralatan yang lebih baik
            </label>
        </div>
        <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="alasanPindah" id="tenaga">
            <label class="form-check-label" for="tenaga">
                Tenaga : membutuhkan tenaga yang lebih ahli/jumlah tenaga yang kurang
            </label>
        </div>
        <div class="form-check mt-2 d-flex">
            <input class="form-check-input alasanLain" type="radio" name="alasanPindah" id="lain">
            <label class="form-check-label" style="width: 100px" for="lain">
                Lain-lain
            </label>
            <input type="text" name="alasanPindah" id="alasanLain" class="form-control"
                placeholder="Lainya...">
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-3">
        <label style="width: 350px">Metode Pemindahan Pasien : </label>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="caraPindah" id="kursiRoda">
            <label class="form-check-label" for="kursiRoda">
                Kursi Roda
            </label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="caraPindah" id="brangkar">
            <label class="form-check-label" for="brangkar">
                Brangkar
            </label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="caraPindah" id="tempatTidur">
            <label style="width: 150px" class="form-check-label" for="tempatTidur">
                Tempat Tidur
            </label>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-3">
        <label style="width: 350px">Kategori Transfer Pasien : </label>
    </div>
    <div class="col-md-1">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kategoriTransfer" id="kategori1">
            <label class="form-check-label" for="kategori1">
                1
            </label>
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kategoriTransfer" id="kategori2">
            <label class="form-check-label" for="kategori2">
                2
            </label>
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kategoriTransfer" id="kategori3">
            <label style="width: 150px" class="form-check-label" for="kategori3">
                3
            </label>
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kategoriTransfer" id="kategori4">
            <label style="width: 150px" class="form-check-label" for="kategori4">
                4
            </label>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <label style="width: 350px">Resiko Selama Proses Transfer : </label>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resikoGangguan" id="gangguanNafas">
            <label class="form-check-label" for="gangguanNafas">
                Gangguan Pernafasan
            </label>
        </div>
    </div>
    <div class="col-md-1" style="margin-right:20px">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resikoGangguan" id="mutah">
            <label class="form-check-label" for="mutah">
                Muntah
            </label>
        </div>
    </div>
    <div class="col-md-1" style="margin-right:20px">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resikoGangguan" id="kejang">
            <label style="width: 150px" class="form-check-label mr-5" for="kejang">
                Kejang
            </label>
        </div>
    </div>
    <div class="col-md-1" style="margin-right:60px">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resikoGangguan" id="pendarahan">
            <label style="width: 150px" class="form-check-label" for="pendarahan">
                Pendarahan
            </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-check d-flex">
            <input class="form-check-input" type="radio" name="resikoGangguan" id="resikoLainya">
            <label style="width: 80px" class="form-check-label" for="resikoLainya">
                Lainya
            </label>
            <input type="text" name="resikoGangguan" id="resikoLain" class="form-control"
                placeholder="Resiko Lainya...">
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">Peralatan Yang Dibutuhkan Pasien Saat Pindah :</div>
</div>
<div class="row mt-2">
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kebutuhanPasien" id="suction">
            <label class="form-check-label" for="suction">
                Suction
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kebutuhanPasien" id="ngt">
            <label class="form-check-label" for="ngt">
                NGT
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kebutuhanPasien" id="kateterUrine">
            <label class="form-check-label" for="kateterUrine">
                Kateter Urine
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kebutuhanPasien" id="ventilator">
            <label class="form-check-label" for="ventilator">
                Ventilator
            </label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kebutuhanPasien" id="infusPump">
            <label class="form-check-label" for="infusPump">
                Infus Pump
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kebutuhanPasien" id="syringePump">
            <label class="form-check-label" for="syringePump">
                Syringe Pump
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kebutuhanPasien" id="bagging">
            <label class="form-check-label" for="bagging">
                Bagging
            </label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-8">
        <div class="form-check d-flex">
            <input class="form-check-input" type="radio" name="kebutuhanPasien" id="portableO2">
            <label class="form-check-label" style="width:300px" for="portableO2">
                Portable O2,Kebutuhan
            </label>
            <input type="text" name="kebutuhanPasien" id="kebutuhanO2" class="form-control"
                placeholder="Kebutuhan O2 Liter/Menit">
        </div>
    </div>
</div>
<h3 class="text-center mt-5">Keadaan Pasien Saat Pindah</h3>
<div class="row mt-4">
    <div class="col-md-6 d-flex">
        <label class="label-input">Keadaan Umum</label>
        <input type="text" name="awalUmum" class="form-control" placeholder="Keadaan Awal Pasien...">
    </div>
    <div class="col-md-6 d-flex">
        <label class="label-input">Kesadaran</label>
        <input type="text" name="awalUmum" class="form-control" placeholder="Kesadaran Awal Pasien...">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-1">
        <label>GCS:</label>
    </div>
    <div class="col-md-3 d-flex">
        <label class="label-input">E</label>
        <input type="text" name="awalGcse" class="form-control" placeholder="Keterangan E...">
    </div>
    <div class="col-md-3 d-flex">
        <label class="label-input">V</label>
        <input type="text" name="awalGcsvv" class="form-control" placeholder="Keterangan V...">
    </div>
    <div class="col-md-3 d-flex">
        <label class="label-input">M</label>
        <input type="text" name="awalGcsm" class="form-control" placeholder="Keterangan M...">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6 d-flex">
        <label class="label-input">TD:</label>
        <input type="text" name="awalTd" class="form-control" placeholder="Keterangan TD......mmHg">
    </div>
    <div class="col-md-6 d-flex">
        <label class="label-input">Suhu:</label>
        <input type="text" name="awalSuhu" class="form-control" placeholder="Keterangan Suhu.....C">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6 d-flex">
        <label class="label-input">Nadi:</label>
        <input type="text" name="awalNadi" class="form-control" placeholder="Keterangan Nadi....x/Mnt">
    </div>
    <div class="col-md-6 d-flex">
        <label class="label-input">Pernafasan:</label>
        <input type="text" name="awalPernafasan" class="form-control"
            placeholder="Keterangan Pernafasan.....x/Mnt">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4 d-flex">
        <label class="label-input">spO2:</label>
        <input type="text" name="awalSpo2" class="form-control" placeholder="Keterangan spO2.....%">
    </div>
    <div class="col-md-4 d-flex">
        <label class="label-input">Skor Nyeri:</label>
        <input type="text" name="awalSkorNyeri" class="form-control" placeholder="Skor Nyeri...">
    </div>
    <div class="col-md-4 d-flex">
        <label class="label-input">Skor Jatuh:</label>
        <input type="text" name="awalSkorJatuh" class="form-control" placeholder="Skor Jatuh...">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6 d-flex">
        <label class="label-input">BB:</label>
        <input type="text" name="bb" class="form-control" placeholder="Keterangan Berat Badan......kg">
    </div>
    <div class="col-md-6 d-flex">
        <label class="label-input">TB:</label>
        <input type="text" name="tb" class="form-control" placeholder="Keterangan Tinggi Badan.....cm">
    </div>
</div>
<h3 class="text-center mt-5">Keadaan Pasien Saat Tiba Diruangan</h3>
<div class="row mt-4">
    <div class="col-md-6 d-flex">
        <label class="label-input">Keadaan Umum</label>
        <input type="text" name="akhirUmum" class="form-control" placeholder="Keadaan Awal Pasien...">
    </div>
    <div class="col-md-6 d-flex">
        <label class="label-input">Kesadaran</label>
        <input type="text" name="akhirUmum" class="form-control" placeholder="Kesadaran Awal Pasien...">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-1">
        <label>GCS:</label>
    </div>
    <div class="col-md-3 d-flex">
        <label class="label-input">E</label>
        <input type="text" name="akhirGcse" class="form-control" placeholder="Keterangan E...">
    </div>
    <div class="col-md-3 d-flex">
        <label class="label-input">V</label>
        <input type="text" name="akhirGcsvv" class="form-control" placeholder="Keterangan V...">
    </div>
    <div class="col-md-3 d-flex">
        <label class="label-input">M</label>
        <input type="text" name="akhirGcsm" class="form-control" placeholder="Keterangan M...">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6 d-flex">
        <label class="label-input">TD:</label>
        <input type="text" name="akhirTd" class="form-control" placeholder="Keterangan TD......mmHg">
    </div>
    <div class="col-md-6 d-flex">
        <label class="label-input">Suhu:</label>
        <input type="text" name="akhirSuhu" class="form-control" placeholder="Keterangan Suhu.....C">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6 d-flex">
        <label class="label-input">Nadi:</label>
        <input type="text" name="akhirNadi" class="form-control" placeholder="Keterangan Nadi....x/Mnt">
    </div>
    <div class="col-md-6 d-flex">
        <label class="label-input">Pernafasan:</label>
        <input type="text" name="akhirPernafasan" class="form-control"
            placeholder="Keterangan Pernafasan.....x/Mnt">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4 d-flex">
        <label class="label-input">spO2:</label>
        <input type="text" name="akhirSpo2" class="form-control" placeholder="Keterangan spO2.....%">
    </div>
    <div class="col-md-4 d-flex">
        <label class="label-input">Skor Nyeri:</label>
        <input type="text" name="akhirSkorNyeri" class="form-control" placeholder="Skor Nyeri...">
    </div>
    <div class="col-md-4 d-flex">
        <label class="label-input">Skor Jatuh:</label>
        <input type="text" name="akhirSkorJatuh" class="form-control" placeholder="Skor Jatuh...">
    </div>
</div>
<h3 class="mt-4">Informasi Medis Tambahan</h3>
<div class="row">
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" name="infoTambahan" class="form-check-input" id="disabilitas">
            <label class="form-check-label" for="disabilitas">Disabilitas</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" name="infoTambahan" class="form-check-input" id="amputasi">
            <label class="form-check-label" for="amputasi">Amputasi</label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <input type="radio" name="infoTambahan" class="form-check-input" id="paralisis">
            <label class="form-check-label" for="paralisis">Paralisis</label>
        </div>
    </div>
</div>
<h3 class="mt-5">Pemeriksaan penunjang / diognosatik yang sudah dilakukan (EKG,Lab,dll)</h3>
<div class="row mt-2">
    <div class="col-md-4 d-flex">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="periksaPenunjang[]" id="ekg">
            <label for="ekg" class="form-check-label">EKG</label>
        </div>
        <input type="text" name="periksaPenunjang[]" class="form-control" placeholder="Pemeriksaan EKG...">
    </div>
    <div class="col-md-4 d-flex">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="periksaPenunjang[]" id="thorax">
            <label for="thorax" class="form-check-label" style="width: 80px">Ro Thorax</label>
        </div>
        <input type="text" name="periksaPenunjang[]" class="form-control" placeholder="Pemeriksaan EKG...">
    </div>
    <div class="col-md-4 d-flex">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="periksaPenunjang[]" id="laboratorium">
            <label for="laboratorium" class="form-check-label">Laboratorium</label>
        </div>
        <input type="text" name="periksaPenunjang[]" class="form-control" placeholder="Pemeriksaan EKG...">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-4 d-flex">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="periksaPenunjang[]" id="usg">
            <label for="usg" class="form-check-label">USG</label>
        </div>
        <input type="text" name="periksaPenunjang[]" class="form-control" placeholder="Pemeriksaan EKG...">
    </div>
    <div class="col-md-4 d-flex">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="periksaPenunjang[]" id="mri">
            <label for="mri" class="form-check-label">MRI</label>
        </div>
        <input type="text" name="periksaPenunjang[]" class="form-control" placeholder="Pemeriksaan EKG...">
    </div>
    <div class="col-md-4 d-flex">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="periksaPenunjang[]" id="ctScan">
            <label for="ctScan" class="form-check-label" style="width: 75px">CT-Scan</label>
        </div>
        <input type="text" name="periksaPenunjang[]" class="form-control" placeholder="Pemeriksaan EKG...">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-4 d-flex">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="periksaPenunjang[]" id="eeg">
            <label for="eeg" class="form-check-label">EEG</label>
        </div>
        <input type="text" name="periksaPenunjang[]" class="form-control" placeholder="Pemeriksaan EKG...">
    </div>
    <div class="col-md-8 d-flex">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="periksaPenunjang[]" id="pemeriksaLainya">
            <label for="pemeriksaLainya" class="form-check-label" style="width: 80px">Lain Lain</label>
        </div>
        <input type="text" name="periksaPenunjang[]" class="form-control" placeholder="Pemeriksaan EKG...">
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Jenis</th>
                    <th>Lokasi</th>
                    <th>Ukuran</th>
                    <th>Keterangan</th>
                    <th>Jenis</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="alatIvLine" id="ivline">
                            <label for="ivline" class="form-check-label" style="width: 60px">IV Line</label>
                        </div>
                    </td>
                    <td><input type="text" name="lokasiIVline" class="form-control"></td>
                    <td><input type="text" name="ukuranIVline" class="form-control"></td>
                    <td><input type="text" name="keteranganIVline" class="form-control"></td>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="alatKateter" id="kateter">
                            <label for="kateter" class="form-check-label">Kateter</label>
                        </div>
                    </td>
                    <td><input type="text" name="ukuranKateter" class="form-control"></td>
                    <td><input type="text" name="keteranganKateter" class="form-control"></td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="alatCvc" id="cvc">
                            <label for="cvc" class="form-check-label">CVC</label>
                        </div>
                    </td>
                    <td><input type="text" name="lokasiCvc" class="form-control"></td>
                    <td><input type="text" name="ukuranCvc" class="form-control"></td>
                    <td><input type="text" name="keteranganCvc" class="form-control"></td>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="alatNgt" id="ngt">
                            <label for="ngt" class="form-check-label">NGT</label>
                        </div>
                    </td>
                    <td><input type="text" name="ukuranNgt" class="form-control"></td>
                    <td><input type="text" name="keteranganNgt" class="form-control"></td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="alatLain" id="alatLain">
                            <label for="alatLain" class="form-check-label">Lain-lain</label>
                        </div>
                    </td>
                    <td><input type="text" name="lokasiLain" class="form-control"></td>
                    <td><input type="text" name="ukuranLain" class="form-control"></td>
                    <td><input type="text" name="keteranganLain" class="form-control"></td>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="alatEtt" id="ett">
                            <label for="ett" class="form-check-label">ETT</label>
                        </div>
                    </td>
                    <td><input type="text" name="ukuranEtt" class="form-control"></td>
                    <td><input type="text" name="keteranganEtt" class="form-control"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>Nama Obat</th>
                    <th>Dosis</th>
                    <th>Frekuensi</th>
                    <th>Rute</th>
                    <th>Sisa Obat</th>
                    <th><button type="button" id="tambahTerapi" class="btn btn-success">+</button></th>
                </tr>
            </thead>
            <tbody id="appendTambahTerapi">
                <tr>
                    <td><input type="text" name="namaObat[]" class="form-control"></td>
                    <td><input type="text" name="dosis[]" class="form-control"></td>
                    <td><input type="text" name="frekuensi[]" class="form-control"></td>
                    <td><input type="text" name="rute[]" class="form-control"></td>
                    <td><input type="text" name="sisaObat[]" class="form-control"></td>
                    <td><button type="button" class="btn btn-danger" id="hapusTerapi">-</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6 d-flex">
        <label class="label-input" style="width: 120px">Nebulezer</label>
        <input type="text" name="nebulezer" class="form-control">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6 d-flex">
        <label class="label-input" style="width: 120px">Oksigen</label>
        <input type="text" name="oksigen" class="form-control">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6 d-flex">
        <label class="label-input" style="width: 120px">Sliding</label>
        <input type="text" name="sliding" class="form-control">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6 d-flex">
        <label class="label-input" style="width: 120px">Diit</label>
        <input type="text" name="diit" class="form-control">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <label class="label-input">Intervensi/Tindakan Yang SUdah Dilakukan</label>
        <textarea name="intervensi" cols="30" rows="10" class="form-control"></textarea>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <h5>Terapi Saat Pindah</h5>
        <div class="form-check d-flex">
            <input type="checkbox" name="batasPemberian" class="form-check-input" id="batasPemberian">
            <label for="batasPemberian" class="form-check-label" style="width:330px;">Pembatasan Cairan :
                Minum</label>
            <input type="text" name="batasPemberian" class="form-control" placeholder="cc/hari">
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <h5>Pasien / Keluarga mengetahui dan menyetujui mengenai alasan pemindahan</h5>
        <div class="form-check d-flex">
            <input type="checkbox" name="persetujuanKeluarga" class="form-check-input" id="yaTau">
            <label for="yaSetuju" class="form-check-label" style="width:330px;">Ya</label>
        </div>
        <div class="form-check d-flex">
            <input type="checkbox" name="persetujuanKeluarga" class="form-check-input" id="tidakSetuju">
            <label for="tidakTau" class="form-check-label" style="width:330px;">Tidak</label>
        </div>
    </div>
</div>
<div class="row mt-5">
    <h5>Bila pemeberi persetujuan adalah keluarga pasien, lengkapi isian berikut :</h5>
    <div class="col-md-6 d-flex">
        <label for="namaKeluarga" class="label-input">Nama</label>
        <input type="text" name="namaKeluarga" class="form-control" placeholder="Nama Yang Menyetujui...">
    </div>
    <div class="col-md-6 d-flex">
        <label for="hubKeluarga" class="label-input">Hubungan</label>
        <input type="text" name="hubunganKeluarga" class="form-control" placeholder="Hubungan Dengan Pasien...">
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

        $('.perhatian').change(function (e) {
    e.preventDefault();
    let value = $(this).val();
    switch (value) {
        case "alergi":
            $('#alergi').focus();
            break;
        case "infeksi":
            $('#infeksi').focus();
            break;
        case "lain":
            $('#lainya').focus();
            break;
    }
});
$('#tambahDiagnosis').click(function (e) {
    e.preventDefault();
    $('.appendDiagnosisSekundre').append(`<div class="group d-flex justify-content-between mt-2">
        <input type="text" name="diagnosisSekunder[]" class="form-control"
            placeholder="Diagnosis Sekunder...">
        <button type="button" class="btn btn-danger ml-2" id="deleteDiagnosis">-</button>
    </div>`);
});
$(document).on('click', '#deleteDiagnosis', function (e) {
    e.preventDefault();
    $(this).closest('.group').remove();
    return false;
});
$('.alasanLain').change(function (e) {
    e.preventDefault();
    $('#alasanLain').focus();
});
$('#resikoLainya').change(function (e) {
    e.preventDefault();
    $('#resikoLain').focus();
});
$('#portableO2').change(function (e) {
    e.preventDefault();
    $('#kebutuhanO2').focus();
});
$('#tambahTerapi').click(function (e) {
    e.preventDefault();
    $('#appendTambahTerapi').append(`<tr>
                <td><input type="text" name="namaObat[]" class="form-control"></td>
                <td><input type="text" name="dosis[]" class="form-control"></td>
                <td><input type="text" name="frekuensi[]" class="form-control"></td>
                <td><input type="text" name="rute[]" class="form-control"></td>
                <td><input type="text" name="sisaObat[]" class="form-control"></td>
                <td><button type="button" class="btn btn-danger" id="hapusTerapi">-</button></td>
            </tr>`);
});
$(document).on('click', '#hapusTerapi', function (e) {
    e.preventDefault();
    $(this).closest('tr').remove();
    return false;
});

    });

</script>
