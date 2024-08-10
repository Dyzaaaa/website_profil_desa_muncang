@extends('admin.layouts.adminapp')


@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-6xl p-4 bg-white shadow-lg">
        <h1 class="text-center text-2xl font-bold mb-6">Tambah Data Monografi</h1>
        <div class="grid grid-cols-2 gap-6">

            <!-- Kolom Kiri -->
            <div>
                <div class="mb-4">
                    <label for="kepadatan_penduduk" class="block font-medium text-sm">Kepadatan Penduduk</label>
                    <input type="text" id="kepadatan_penduduk" name="kepadatan_penduduk" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_dusun" class="block font-medium text-sm">Jumlah Dusun</label>
                    <input type="number" id="jumlah_dusun" name="jumlah_dusun" class="form-input mt-1 block w-full" required>
                </div>
                <!-- Tambahkan elemen form lainnya sesuai urutan yang diinginkan -->
                <div class="mb-4">
                    <label for="jumlah_rw" class="block font-medium text-sm">Jumlah RW</label>
                    <input type="number" id="jumlah_rw" name="jumlah_rw" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_rt" class="block font-medium text-sm">Jumlah RT</label>
                    <input type="number" id="jumlah_rt" name="jumlah_rt" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_penduduk_laki_laki" class="block font-medium text-sm">Jumlah Penduduk Laki-laki</label>
                    <input type="number" id="jumlah_penduduk_laki_laki" name="jumlah_penduduk_laki_laki" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_penduduk_perempuan" class="block font-medium text-sm">Jumlah Penduduk Perempuan</label>
                    <input type="number" id="jumlah_penduduk_perempuan" name="jumlah_penduduk_perempuan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_penduduk_total" class="block font-medium text-sm">Jumlah Penduduk Total</label>
                    <input type="number" id="jumlah_penduduk_total" name="jumlah_penduduk_total" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="belum_sekolah" class="block font-medium text-sm">Belum Sekolah</label>
                    <input type="number" id="belum_sekolah" name="belum_sekolah" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="tidak_tamat_sd" class="block font-medium text-sm">Tidak Tamat SD</label>
                    <input type="number" id="tidak_tamat_sd" name="tidak_tamat_sd" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="tamat_sd" class="block font-medium text-sm">Tamat SD</label>
                    <input type="number" id="tamat_sd" name="tamat_sd" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="tamat_sltp" class="block font-medium text-sm">Tamat SLTP</label>
                    <input type="number" id="tamat_sltp" name="tamat_sltp" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="tamat_slta" class="block font-medium text-sm">Tamat SLTA</label>
                    <input type="number" id="tamat_slta" name="tamat_slta" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="tamat_akademi" class="block font-medium text-sm">Tamat Akademi</label>
                    <input type="number" id="tamat_akademi" name="tamat_akademi" class="form-input mt-1 block w-full" required>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div>
                <div class="mb-4">
                    <label for="tamat_perguruan_tinggi" class="block font-medium text-sm">Tamat Perguruan Tinggi</label>
                    <input type="number" id="tamat_perguruan_tinggi" name="tamat_perguruan_tinggi" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="buta_huruf" class="block font-medium text-sm">Buta Huruf</label>
                    <input type="number" id="buta_huruf" name="buta_huruf" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="petani_pemilik_tanah" class="block font-medium text-sm">Petani Pemilik Tanah</label>
                    <input type="number" id="petani_pemilik_tanah" name="petani_pemilik_tanah" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="petani_penggarap_tanah" class="block font-medium text-sm">Petani Penggarap Tanah</label>
                    <input type="number" id="petani_penggarap_tanah" name="petani_penggarap_tanah" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="buruh_tani" class="block font-medium text-sm">Buruh Tani</label>
                    <input type="number" id="buruh_tani" name="buruh_tani" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="nelayan" class="block font-medium text-sm">Nelayan</label>
                    <input type="number" id="nelayan" name="nelayan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="pengusaha_sedang_besar" class="block font-medium text-sm">Pengusaha Sedang/Besar</label>
                    <input type="number" id="pengusaha_sedang_besar" name="pengusaha_sedang_besar" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="buruh_bangunan" class="block font-medium text-sm">Buruh Bangunan</label>
                    <input type="number" id="buruh_bangunan" name="buruh_bangunan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="buruh_perkebunan" class="block font-medium text-sm">Buruh Perkebunan</label>
                    <input type="number" id="buruh_perkebunan" name="buruh_perkebunan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="pedagang" class="block font-medium text-sm">Pedagang</label>
                    <input type="number" id="pedagang" name="pedagang" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="pengangkutan" class="block font-medium text-sm">Pengangkutan</label>
                    <input type="number" id="pengangkutan" name="pengangkutan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="pns_tni_polisi" class="block font-medium text-sm">PNS/TNI/Polisi</label>
                    <input type="number" id="pns_tni_polisi" name="pns_tni_polisi" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="pensiunan" class="block font-medium text-sm
                    <!-- Kolom Kanan Lanjutan -->
                    <label for="pensiunan" class="block font-medium text-sm">Pensiunan</label>
                    <input type="number" id="pensiunan" name="pensiunan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_kepala_keluarga" class="block font-medium text-sm">Jumlah Kepala Keluarga</label>
                    <input type="number" id="jumlah_kepala_keluarga" name="jumlah_kepala_keluarga" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_kepala_keluarga_laki_laki" class="block font-medium text-sm">Jumlah Kepala Keluarga Laki-laki</label>
                    <input type="number" id="jumlah_kepala_keluarga_laki_laki" name="jumlah_kepala_keluarga_laki_laki" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_kepala_keluarga_perempuan" class="block font-medium text-sm">Jumlah Kepala Keluarga Perempuan</label>
                    <input type="number" id="jumlah_kepala_keluarga_perempuan" name="jumlah_kepala_keluarga_perempuan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_islam" class="block font-medium text-sm">Jumlah Islam</label>
                    <input type="number" id="jumlah_islam" name="jumlah_islam" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_khatolik" class="block font-medium text-sm">Jumlah Katholik</label>
                    <input type="number" id="jumlah_khatolik" name="jumlah_khatolik" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_protestan" class="block font-medium text-sm">Jumlah Protestan</label>
                    <input type="number" id="jumlah_protestan" name="jumlah_protestan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_hindu" class="block font-medium text-sm">Jumlah Hindu</label>
                    <input type="number" id="jumlah_hindu" name="jumlah_hindu" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jumlah_budha" class="block font-medium text-sm">Jumlah Budha</label>
                    <input type="number" id="jumlah_budha" name="jumlah_budha" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="dokter" class="block font-medium text-sm">Dokter</label>
                    <input type="number" id="dokter" name="dokter" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="perawat" class="block font-medium text-sm">Perawat</label>
                    <input type="number" id="perawat" name="perawat" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="bidan" class="block font-medium text-sm">Bidan</label>
                    <input type="number" id="bidan" name="bidan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="dokter_khitan" class="block font-medium text-sm">Dokter Khitan</label>
                    <input type="number" id="dokter_khitan" name="dokter_khitan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="dukun_bayi" class="block font-medium text-sm">Dukun Bayi</label>
                    <input type="number" id="dukun_bayi" name="dukun_bayi" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="apotek_depot_obat" class="block font-medium text-sm">Apotek/Depot Obat</label>
                    <input type="number" id="apotek_depot_obat" name="apotek_depot_obat" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="tanah_sawah" class="block font-medium text-sm">Tanah Sawah</label>
                    <input type="number" id="tanah_sawah" name="tanah_sawah" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="tanah_kering" class="block font-medium text-sm">Tanah Kering</label>
                    <input type="number" id="tanah_kering" name="tanah_kering" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="tambak_kolam" class="block font-medium text-sm">Tambak/Kolam</label>
                    <input type="number" id="tambak_kolam" name="tambak_kolam" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="rawa_rawa" class="block font-medium text-sm">Rawa-Rawa</label>
                    <input type="number" id="rawa_rawa" name="rawa_rawa" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="masjid" class="block font-medium text-sm">Masjid</label>
                    <input type="number" id="masjid" name="masjid" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="musholla" class="block font-medium text-sm">Musholla</label>
                    <input type="number" id="musholla" name="musholla" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="gereja" class="block font-medium text-sm">Gereja</label>
                    <input type="number" id="gereja" name="gereja" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="pura" class="block font-medium text-sm">Pura</label>
                    <input type="number" id="pura" name="pura" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="wihara" class="block font-medium text-sm">Wihara</label>
                    <input type="number" id="wihara" name="wihara" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="klenteng" class="block font-medium text-sm">Klenteng</label>
                    <input type="number" id="klenteng" name="klenteng" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="sarana_pendidikan" class="block font-medium text-sm">Sarana Pendidikan</label>
                    <input type="number" id="sarana_pendidikan" name="sarana_pendidikan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="sarana_kesehatan" class="block font-medium text-sm">Sarana Kesehatan</label>
                    <input type="number" id="sarana_kesehatan" name="sarana_kesehatan" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="sarana_sosial" class="block font-medium text-sm">Sarana Sosial</label>
                    <input type="number" id="sarana_sosial" name="sarana_sosial" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="lapangan_olahraga" class="block font-medium text-sm">Lapangan Olahraga</label>
                    <input type="number" id="lapangan_olahraga" name="lapangan_olahraga" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="taman_rekreasi" class="block font-medium text-sm">Taman Rekreasi</label>
                    <input type="number" id="taman_rekreasi" name="taman_rekreasi" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="jalur_hijau" class="block font-medium text-sm">Jalur Hijau</label>
                    <input type="number" id="jalur_hijau" name="jalur_hijau" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="pemakaman" class="block font-medium text-sm">Pemakaman</label>
                    <input type="number" id="pemakaman" name="pemakaman" class="form-input mt-1 block w-full" required>
                </div>
            </div>
        </div>
        <div class="text-center mt-6">
            <button class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg">Submit</button>
        </div>
    </div>
</div>




@endsection
