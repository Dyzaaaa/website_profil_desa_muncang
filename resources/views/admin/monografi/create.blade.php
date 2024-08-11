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
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl ml-auto mr-10">
        <form action="{{ route('monografi.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
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
                        <label for="buruh_industri" class="block text-sm font-medium text-gray-700">Buruh Industri</label>
                        <input type="number" id="buruh_industri" name="buruh_industri" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="buruh_kebun" class="block text-sm font-medium text-gray-700">Buruh Kebun</label>
                        <input type="number" id="buruh_kebun" name="buruh_kebun" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pengrajin_industri_rumah_tangga" class="block text-sm font-medium text-gray-700">Pengrajin Industri Rumah Tangga</label>
                        <input type="number" id="pengrajin_industri_rumah_tangga" name="pengrajin_industri_rumah_tangga" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pedagang_keliling" class="block text-sm font-medium text-gray-700">Pedagang Keliling</label>
                        <input type="number" id="pedagang_keliling" name="pedagang_keliling" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pedagang_tetap" class="block text-sm font-medium text-gray-700">Pedagang Tetap</label>
                        <input type="number" id="pedagang_tetap" name="pedagang_tetap" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="wirausaha" class="block text-sm font-medium text-gray-700">Wirausaha</label>
                        <input type="number" id="wirausaha" name="wirausaha" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pns" class="block text-sm font-medium text-gray-700">PNS</label>
                        <input type="number" id="pns" name="pns" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pertukangan" class="block text-sm font-medium text-gray-700">Pertukangan</label>
                        <input type="number" id="pertukangan" name="pertukangan" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="tni_polri" class="block text-sm font-medium text-gray-700">TNI/Polri</label>
                        <input type="number" id="tni_polri" name="tni_polri" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="pengemudi" class="block text-sm font-medium text-gray-700">Pengemudi</label>
                        <input type="number" id="pengemudi" name="pengemudi" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="lainnya" class="block text-sm font-medium text-gray-700">Lainnya</label>
                        <input type="text" id="lainnya" name="lainnya" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
@endsection
