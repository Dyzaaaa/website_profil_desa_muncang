@extends('admin.layouts.adminapp')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Monografi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.6.4/dist/flowbite.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-8">
        <h1 class="text-center mb-4">Tambah Data Monografi</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('monografi.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="kepadatan_penduduk">Kepadatan Penduduk</label>
            <input type="text" class="form-control" id="kepadatan_penduduk" name="kepadatan_penduduk" value="{{ old('kepadatan_penduduk') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_dusun">Jumlah Dusun</label>
            <input type="number" class="form-control" id="jumlah_dusun" name="jumlah_dusun" value="{{ old('jumlah_dusun') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_rw">Jumlah RW</label>
            <input type="number" class="form-control" id="jumlah_rw" name="jumlah_rw" value="{{ old('jumlah_rw') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_rt">Jumlah RT</label>
            <input type="number" class="form-control" id="jumlah_rt" name="jumlah_rt" value="{{ old('jumlah_rt') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_penduduk_laki_laki">Jumlah Penduduk Laki-laki</label>
            <input type="number" class="form-control" id="jumlah_penduduk_laki_laki" name="jumlah_penduduk_laki_laki" value="{{ old('jumlah_penduduk_laki_laki') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_penduduk_perempuan">Jumlah Penduduk Perempuan</label>
            <input type="number" class="form-control" id="jumlah_penduduk_perempuan" name="jumlah_penduduk_perempuan" value="{{ old('jumlah_penduduk_perempuan') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_penduduk_total">Jumlah Penduduk Total</label>
            <input type="number" class="form-control" id="jumlah_penduduk_total" name="jumlah_penduduk_total" value="{{ old('jumlah_penduduk_total') }}" required>
        </div>

        <div class="form-group">
            <label for="belum_sekolah">Belum Sekolah</label>
            <input type="number" class="form-control" id="belum_sekolah" name="belum_sekolah" value="{{ old('belum_sekolah') }}" required>
        </div>

        <div class="form-group">
            <label for="tidak_tamat_sd">Tidak Tamat SD</label>
            <input type="number" class="form-control" id="tidak_tamat_sd" name="tidak_tamat_sd" value="{{ old('tidak_tamat_sd') }}" required>
        </div>

        <div class="form-group">
            <label for="tamat_sd">Tamat SD</label>
            <input type="number" class="form-control" id="tamat_sd" name="tamat_sd" value="{{ old('tamat_sd') }}" required>
        </div>

        <div class="form-group">
            <label for="tamat_sltp">Tamat SLTP</label>
            <input type="number" class="form-control" id="tamat_sltp" name="tamat_sltp" value="{{ old('tamat_sltp') }}" required>
        </div>

        <div class="form-group">
            <label for="tamat_slta">Tamat SLTA</label>
            <input type="number" class="form-control" id="tamat_slta" name="tamat_slta" value="{{ old('tamat_slta') }}" required>
        </div>

        <div class="form-group">
            <label for="tamat_akademi">Tamat Akademi</label>
            <input type="number" class="form-control" id="tamat_akademi" name="tamat_akademi" value="{{ old('tamat_akademi') }}" required>
        </div>

        <div class="form-group">
            <label for="tamat_perguruan_tinggi">Tamat Perguruan Tinggi</label>
            <input type="number" class="form-control" id="tamat_perguruan_tinggi" name="tamat_perguruan_tinggi" value="{{ old('tamat_perguruan_tinggi') }}" required>
        </div>

        <div class="form-group">
            <label for="buta_huruf">Buta Huruf</label>
            <input type="number" class="form-control" id="buta_huruf" name="buta_huruf" value="{{ old('buta_huruf') }}" required>
        </div>

        <div class="form-group">
            <label for="petani_pemilik_tanah">Petani Pemilik Tanah</label>
            <input type="number" class="form-control" id="petani_pemilik_tanah" name="petani_pemilik_tanah" value="{{ old('petani_pemilik_tanah') }}" required>
        </div>

        <div class="form-group">
            <label for="petani_penggarap_tanah">Petani Penggarap Tanah</label>
            <input type="number" class="form-control" id="petani_penggarap_tanah" name="petani_penggarap_tanah" value="{{ old('petani_penggarap_tanah') }}" required>
        </div>

        <div class="form-group">
            <label for="buruh_tani">Buruh Tani</label>
            <input type="number" class="form-control" id="buruh_tani" name="buruh_tani" value="{{ old('buruh_tani') }}" required>
        </div>

        <div class="form-group">
            <label for="nelayan">Nelayan</label>
            <input type="number" class="form-control" id="nelayan" name="nelayan" value="{{ old('nelayan') }}" required>
        </div>

        <div class="form-group">
            <label for="pengusaha_sedang_besar">Pengusaha Sedang/Besar</label>
            <input type="number" class="form-control" id="pengusaha_sedang_besar" name="pengusaha_sedang_besar" value="{{ old('pengusaha_sedang_besar') }}" required>
        </div>

        <div class="form-group">
            <label for="buruh_bangunan">Buruh Bangunan</label>
            <input type="number" class="form-control" id="buruh_bangunan" name="buruh_bangunan" value="{{ old('buruh_bangunan') }}" required>
        </div>

        <div class="form-group">
            <label for="buruh_perkebunan">Buruh Perkebunan</label>
            <input type="number" class="form-control" id="buruh_perkebunan" name="buruh_perkebunan" value="{{ old('buruh_perkebunan') }}" required>
        </div>

        <div class="form-group">
            <label for="pedagang">Pedagang</label>
            <input type="number" class="form-control" id="pedagang" name="pedagang" value="{{ old('pedagang') }}" required>
        </div>

        <div class="form-group">
            <label for="pengangkutan">Pengangkutan</label>
            <input type="number" class="form-control" id="pengangkutan" name="pengangkutan" value="{{ old('pengangkutan') }}" required>
        </div>

        <div class="form-group">
            <label for="pns_tni_polisi">PNS/TNI/Polisi</label>
            <input type="number" class="form-control" id="pns_tni_polisi" name="pns_tni_polisi" value="{{ old('pns_tni_polisi') }}" required>
        </div>

        <div class="form-group">
            <label for="pensiunan">Pensiunan</label>
            <input type="number" class="form-control" id="pensiunan" name="pensiunan" value="{{ old('pensiunan') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_kepala_keluarga">Jumlah Kepala Keluarga</label>
            <input type="number" class="form-control" id="jumlah_kepala_keluarga" name="jumlah_kepala_keluarga" value="{{ old('jumlah_kepala_keluarga') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_kepala_keluarga_laki_laki">Jumlah Kepala Keluarga Laki-laki</label>
            <input type="number" class="form-control" id="jumlah_kepala_keluarga_laki_laki" name="jumlah_kepala_keluarga_laki_laki" value="{{ old('jumlah_kepala_keluarga_laki_laki') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_kepala_keluarga_perempuan">Jumlah Kepala Keluarga Perempuan</label>
            <input type="number" class="form-control" id="jumlah_kepala_keluarga_perempuan" name="jumlah_kepala_keluarga_perempuan" value="{{ old('jumlah_kepala_keluarga_perempuan') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_islam">Jumlah Islam</label>
            <input type="number" class="form-control" id="jumlah_islam" name="jumlah_islam" value="{{ old('jumlah_islam') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_khatolik">Jumlah Khatolik</label>
            <input type="number" class="form-control" id="jumlah_khatolik" name="jumlah_khatolik" value="{{ old('jumlah_khatolik') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_protestan">Jumlah Protestan</label>
            <input type="number" class="form-control" id="jumlah_protestan" name="jumlah_protestan" value="{{ old('jumlah_protestan') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_hindu">Jumlah Hindu</label>
            <input type="number" class="form-control" id="jumlah_hindu" name="jumlah_hindu" value="{{ old('jumlah_hindu') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_budha">Jumlah Budha</label>
            <input type="number" class="form-control" id="jumlah_budha" name="jumlah_budha" value="{{ old('jumlah_budha') }}" required>
        </div>

        <div class="form-group">
            <label for="dokter">Dokter</label>
            <input type="number" class="form-control" id="dokter" name="dokter" value="{{ old('dokter') }}" required>
        </div>

        <div class="form-group">
            <label for="perawat">Perawat</label>
            <input type="number" class="form-control" id="perawat" name="perawat" value="{{ old('perawat') }}" required>
        </div>

        <div class="form-group">
            <label for="bidan">Bidan</label>
            <input type="number" class="form-control" id="bidan" name="bidan" value="{{ old('bidan') }}" required>
        </div>

        <div class="form-group">
            <label for="dokter_khitan">Dokter Khitan</label>
            <input type="number" class="form-control" id="dokter_khitan" name="dokter_khitan" value="{{ old('dokter_khitan') }}" required>
        </div>

        <div class="form-group">
            <label for="dukun_bayi">Dukun Bayi</label>
            <input type="number" class="form-control" id="dukun_bayi" name="dukun_bayi" value="{{ old('dukun_bayi') }}" required>
        </div>

        <div class="form-group">
            <label for="apotek_depot_obat">Apotek/Depot Obat</label>
            <input type="number" class="form-control" id="apotek_depot_obat" name="apotek_depot_obat" value="{{ old('apotek_depot_obat') }}" required>
        </div>

        <div class="form-group">
            <label for="tanah_sawah">Tanah Sawah (m<sup>2</sup>)</label>
            <input type="number" step="0.01" class="form-control" id="tanah_sawah" name="tanah_sawah" value="{{ old('tanah_sawah') }}" required>
        </div>

        <div class="form-group">
            <label for="tanah_kering">Tanah Kering (m<sup>2</sup>)</label>
            <input type="number" step="0.01" class="form-control" id="tanah_kering" name="tanah_kering" value="{{ old('tanah_kering') }}" required>
        </div>

        <div class="form-group">
            <label for="tambak_kolam">Tambak/Kolam (m<sup>2</sup>)</label>
            <input type="number" step="0.01" class="form-control" id="tambak_kolam" name="tambak_kolam" value="{{ old('tambak_kolam') }}" required>
        </div>

        <div class="form-group">
            <label for="rawa_rawa">Rawa-Rawa (m<sup>2</sup>)</label>
            <input type="number" step="0.01" class="form-control" id="rawa_rawa" name="rawa_rawa" value="{{ old('rawa_rawa') }}" required>
        </div>

        <div class="form-group">
            <label for="masjid">Masjid</label>
            <input type="number" class="form-control" id="masjid" name="masjid" value="{{ old('masjid') }}" required>
        </div>

        <div class="form-group">
            <label for="musholla">Musholla</label>
            <input type="number" class="form-control" id="musholla" name="musholla" value="{{ old('musholla') }}" required>
        </div>

        <div class="form-group">
            <label for="gereja">Gereja</label>
            <input type="number" class="form-control" id="gereja" name="gereja" value="{{ old('gereja') }}" required>
        </div>

        <div class="form-group">
            <label for="pura">Pura</label>
            <input type="number" class="form-control" id="pura" name="pura" value="{{ old('pura') }}" required>
        </div>

        <div class="form-group">
            <label for="wihara">Wihara</label>
            <input type="number" class="form-control" id="wihara" name="wihara" value="{{ old('wihara') }}" required>
        </div>

        <div class="form-group">
            <label for="klenteng">Klenteng</label>
            <input type="number" class="form-control" id="klenteng" name="klenteng" value="{{ old('klenteng') }}" required>
        </div>

        <div class="form-group">
            <label for="sarana_pendidikan">Sarana Pendidikan</label>
            <input type="number" class="form-control" id="sarana_pendidikan" name="sarana_pendidikan" value="{{ old('sarana_pendidikan') }}" required>
        </div>

        <div class="form-group">
            <label for="sarana_kesehatan">Sarana Kesehatan</label>
            <input type="number" class="form-control" id="sarana_kesehatan" name="sarana_kesehatan" value="{{ old('sarana_kesehatan') }}" required>
        </div>

        <div class="form-group">
            <label for="sarana_sosial">Sarana Sosial</label>
            <input type="number" class="form-control" id="sarana_sosial" name="sarana_sosial" value="{{ old('sarana_sosial') }}" required>
        </div>

        <div class="form-group">
            <label for="lapangan_olahraga">Lapangan Olahraga</label>
            <input type="number" class="form-control" id="lapangan_olahraga" name="lapangan_olahraga" value="{{ old('lapangan_olahraga') }}" required>
        </div>

        <div class="form-group">
            <label for="taman_rekreasi">Taman Rekreasi</label>
            <input type="number" class="form-control" id="taman_rekreasi" name="taman_rekreasi" value="{{ old('taman_rekreasi') }}" required>
        </div>

        <div class="form-group">
            <label for="jalur_hijau">Jalur Hijau</label>
            <input type="number" class="form-control" id="jalur_hijau" name="jalur_hijau" value="{{ old('jalur_hijau') }}" required>
        </div>

        <div class="form-group">
            <label for="pemakaman">Pemakaman</label>
            <input type="number" class="form-control" id="pemakaman" name="pemakaman" value="{{ old('pemakaman') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
