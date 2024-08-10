@extends('admin.layouts.adminapp')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Monografi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <form action="/submit" method="POST">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <label for="kepadatan_penduduk" class="block text-sm font-medium text-gray-700">Kepadatan Penduduk</label>
                        <input type="number" id="kepadatan_penduduk" name="kepadatan_penduduk" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_dusun" class="block text-sm font-medium text-gray-700">Jumlah Dusun</label>
                        <input type="number" id="jumlah_dusun" name="jumlah_dusun" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_rw" class="block text-sm font-medium text-gray-700">Jumlah RW</label>
                        <input type="number" id="jumlah_rw" name="jumlah_rw" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_rt" class="block text-sm font-medium text-gray-700">Jumlah RT</label>
                        <input type="number" id="jumlah_rt" name="jumlah_rt" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_penduduk_laki_laki" class="block text-sm font-medium text-gray-700">Jumlah Penduduk Laki-laki</label>
                        <input type="number" id="jumlah_penduduk_laki_laki" name="jumlah_penduduk_laki_laki" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_penduduk_perempuan" class="block text-sm font-medium text-gray-700">Jumlah Penduduk Perempuan</label>
                        <input type="number" id="jumlah_penduduk_perempuan" name="jumlah_penduduk_perempuan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_penduduk_total" class="block text-sm font-medium text-gray-700">Jumlah Penduduk Total</label>
                        <input type="number" id="jumlah_penduduk_total" name="jumlah_penduduk_total" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="belum_sekolah" class="block text-sm font-medium text-gray-700">Belum Sekolah</label>
                        <input type="number" id="belum_sekolah" name="belum_sekolah" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tidak_tamat_sd" class="block text-sm font-medium text-gray-700">Tidak Tamat SD</label>
                        <input type="number" id="tidak_tamat_sd" name="tidak_tamat_sd" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tamat_sd" class="block text-sm font-medium text-gray-700">Tamat SD</label>
                        <input type="number" id="tamat_sd" name="tamat_sd" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tamat_sltp" class="block text-sm font-medium text-gray-700">Tamat SLTP</label>
                        <input type="number" id="tamat_sltp" name="tamat_sltp" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tamat_slta" class="block text-sm font-medium text-gray-700">Tamat SLTA</label>
                        <input type="number" id="tamat_slta" name="tamat_slta" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tamat_akademi" class="block text-sm font-medium text-gray-700">Tamat Akademi</label>
                        <input type="number" id="tamat_akademi" name="tamat_akademi" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tamat_perguruan_tinggi" class="block text-sm font-medium text-gray-700">Tamat Perguruan Tinggi</label>
                        <input type="number" id="tamat_perguruan_tinggi" name="tamat_perguruan_tinggi" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="buta_huruf" class="block text-sm font-medium text-gray-700">Buta Huruf</label>
                        <input type="number" id="buta_huruf" name="buta_huruf" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <div class="mb-4">
                        <label for="petani_pemilik_tanah" class="block text-sm font-medium text-gray-700">Petani Pemilik Tanah</label>
                        <input type="number" id="petani_pemilik_tanah" name="petani_pemilik_tanah" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="petani_penggarap_tanah" class="block text-sm font-medium text-gray-700">Petani Penggarap Tanah</label>
                        <input type="number" id="petani_penggarap_tanah" name="petani_penggarap_tanah" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="buruh_tani" class="block text-sm font-medium text-gray-700">Buruh Tani</label>
                        <input type="number" id="buruh_tani" name="buruh_tani" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="nelayan" class="block text-sm font-medium text-gray-700">Nelayan</label>
                        <input type="number" id="nelayan" name="nelayan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pengusaha_sedang_besar" class="block text-sm font-medium text-gray-700">Pengusaha Sedang/Besar</label>
                        <input type="number" id="pengusaha_sedang_besar" name="pengusaha_sedang_besar" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="buruh_bangunan" class="block text-sm font-medium text-gray-700">Buruh Bangunan</label>
                        <input type="number" id="buruh_bangunan" name="buruh_bangunan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="buruh_perkebunan" class="block text-sm font-medium text-gray-700">Buruh Perkebunan</label>
                        <input type="number" id="buruh_perkebunan" name="buruh_perkebunan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pedagang" class="block text-sm font-medium text-gray-700">Pedagang</label>
                        <input type="number" id="pedagang" name="pedagang" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pengangkutan" class="block text-sm font-medium text-gray-700">Pengangkutan</label>
                        <input type="number" id="pengangkutan" name="pengangkutan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pns_tni_polisi" class="block text-sm font-medium text-gray-700">PNS/TNI/Polisi</label>
                        <input type="number" id="pns_tni_polisi" name="pns_tni_polisi" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pensiunan" class="block text-sm font-medium text-gray-700">Pensiunan</label>
                        <input type="number" id="pensiunan" name="pensiunan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_kepala_keluarga" class="block text-sm font-medium text-gray-700">Jumlah Kepala Keluarga</label>
                        <input type="number" id="jumlah_kepala_keluarga" name="jumlah_kepala_keluarga" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_kepala_keluarga_laki_laki" class="block text-sm font-medium text-gray-700">Jumlah Kepala Keluarga Laki-laki</label>
                        <input type="number" id="jumlah_kepala_keluarga_laki_laki" name="jumlah_kepala_keluarga_laki_laki" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_kepala_keluarga_perempuan" class="block text-sm font-medium text-gray-700">Jumlah Kepala Keluarga Perempuan</label>
                        <input type="number" id="jumlah_kepala_keluarga_perempuan" name="jumlah_kepala_keluarga_perempuan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_islam" class="block text-sm font-medium text-gray-700">Jumlah Islam</label>
                        <input type="number" id="jumlah_islam" name="jumlah_islam" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_khatolik" class="block text-sm font-medium text-gray-700">Jumlah Katholik</label>
                        <input type="number" id="jumlah_khatolik" name="jumlah_khatolik" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_protestan" class="block text-sm font-medium text-gray-700">Jumlah Protestan</label>
                        <input type="number" id="jumlah_protestan" name="jumlah_protestan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_hindu" class="block text-sm font-medium text-gray-700">Jumlah Hindu</label>
                        <input type="number" id="jumlah_hindu" name="jumlah_hindu" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_budha" class="block text-sm font-medium text-gray-700">Jumlah Budha</label>
                        <input type="number" id="jumlah_budha" name="jumlah_budha" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="dokter" class="block text-sm font-medium text-gray-700">Dokter</label>
                        <input type="number" id="dokter" name="dokter" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="perawat" class="block text-sm font-medium text-gray-700">Perawat</label>
                        <input type="number" id="perawat" name="perawat" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="bidan" class="block text-sm font-medium text-gray-700">Bidan</label>
                        <input type="number" id="bidan" name="bidan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="dokter_khitan" class="block text-sm font-medium text-gray-700">Dokter Khitan</label>
                        <input type="number" id="dokter_khitan" name="dokter_khitan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="dukun_bayi" class="block text-sm font-medium text-gray-700">Dukun Bayi</label>
                        <input type="number" id="dukun_bayi" name="dukun_bayi" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="apotek_depot_obat" class="block text-sm font-medium text-gray-700">Apotek/Depot Obat</label>
                        <input type="number" id="apotek_depot_obat" name="apotek_depot_obat" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tanah_sawah" class="block text-sm font-medium text-gray-700">Tanah Sawah</label>
                        <input type="number" id="tanah_sawah" name="tanah_sawah" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tanah_kering" class="block text-sm font-medium text-gray-700">Tanah Kering</label>
                        <input type="number" id="tanah_kering" name="tanah_kering" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tambak_kolam" class="block text-sm font-medium text-gray-700">Tambak/Kolam</label>
                        <input type="number" id="tambak_kolam" name="tambak_kolam" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="rawa_rawa" class="block text-sm font-medium text-gray-700">Rawa-Rawa</label>
                        <input type="number" id="rawa_rawa" name="rawa_rawa" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="masjid" class="block text-sm font-medium text-gray-700">Masjid</label>
                        <input type="number" id="masjid" name="masjid" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="musholla" class="block text-sm font-medium text-gray-700">Musholla</label>
                        <input type="number" id="musholla" name="musholla" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="gereja" class="block text-sm font-medium text-gray-700">Gereja</label>
                        <input type="number" id="gereja" name="gereja" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pura" class="block text-sm font-medium text-gray-700">Pura</label>
                        <input type="number" id="pura" name="pura" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="wihara" class="block text-sm font-medium text-gray-700">Wihara</label>
                        <input type="number" id="wihara" name="wihara" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="klenteng" class="block text-sm font-medium text-gray-700">Klenteng</label>
                        <input type="number" id="klenteng" name="klenteng" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="sarana_pendidikan" class="block text-sm font-medium text-gray-700">Sarana Pendidikan</label>
                        <input type="number" id="sarana_pendidikan" name="sarana_pendidikan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="sarana_kesehatan" class="block text-sm font-medium text-gray-700">Sarana Kesehatan</label>
                        <input type="number" id="sarana_kesehatan" name="sarana_kesehatan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="sarana_sosial" class="block text-sm font-medium text-gray-700">Sarana Sosial</label>
                        <input type="number" id="sarana_sosial" name="sarana_sosial" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="lapangan_olahraga" class="block text-sm font-medium text-gray-700">Lapangan Olahraga</label>
                        <input type="number" id="lapangan_olahraga" name="lapangan_olahraga" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="taman_rekreasi" class="block text-sm font-medium text-gray-700">Taman Rekreasi</label>
                        <input type="number" id="taman_rekreasi" name="taman_rekreasi" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="jalur_hijau" class="block text-sm font-medium text-gray-700">Jalur Hijau</label>
                        <input type="number" id="jalur_hijau" name="jalur_hijau" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pemakaman" class="block text-sm font-medium text-gray-700">Pemakaman</label>
                        <input type="number" id="pemakaman" name="pemakaman" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
    




@endsection
