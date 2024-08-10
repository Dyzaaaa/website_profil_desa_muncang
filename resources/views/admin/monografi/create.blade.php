@extends('admin.layouts.adminapp')


@section('content')
<div class="flex justify-end items-center min-h-screen">
    <div class="w-full max-w-md mr-4">
        <h1 class="text-right text-xl font-bold mb-6">Tambah Data Monografi</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('monografi.store') }}" method="POST">
            @csrf

            <div class="flex flex-wrap -mx-2">
                <!-- Kolom Pertama -->
                <div class="w-full md:w-1/2 px-2">
                    <div class="mb-4">
                        <label for="kepadatan_penduduk" class="block text-gray-700 font-bold mb-2">Kepadatan Penduduk</label>
                        <input type="text" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="kepadatan_penduduk" name="kepadatan_penduduk" value="{{ old('kepadatan_penduduk') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah_dusun" class="block text-gray-700 font-bold mb-2">Jumlah Dusun</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="jumlah_dusun" name="jumlah_dusun" value="{{ old('jumlah_dusun') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah_rw" class="block text-gray-700 font-bold mb-2">Jumlah RW</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="jumlah_rw" name="jumlah_rw" value="{{ old('jumlah_rw') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah_rt" class="block text-gray-700 font-bold mb-2">Jumlah RT</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="jumlah_rt" name="jumlah_rt" value="{{ old('jumlah_rt') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah_penduduk_laki_laki" class="block text-gray-700 font-bold mb-2">Jumlah Penduduk Laki-laki</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="jumlah_penduduk_laki_laki" name="jumlah_penduduk_laki_laki" value="{{ old('jumlah_penduduk_laki_laki') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah_penduduk_perempuan" class="block text-gray-700 font-bold mb-2">Jumlah Penduduk Perempuan</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="jumlah_penduduk_perempuan" name="jumlah_penduduk_perempuan" value="{{ old('jumlah_penduduk_perempuan') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah_penduduk_total" class="block text-gray-700 font-bold mb-2">Jumlah Penduduk Total</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="jumlah_penduduk_total" name="jumlah_penduduk_total" value="{{ old('jumlah_penduduk_total') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="belum_sekolah" class="block text-gray-700 font-bold mb-2">Belum Sekolah</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="belum_sekolah" name="belum_sekolah" value="{{ old('belum_sekolah') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="tidak_tamat_sd" class="block text-gray-700 font-bold mb-2">Tidak Tamat SD</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="tidak_tamat_sd" name="tidak_tamat_sd" value="{{ old('tidak_tamat_sd') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="tamat_sd" class="block text-gray-700 font-bold mb-2">Tamat SD</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="tamat_sd" name="tamat_sd" value="{{ old('tamat_sd') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="tamat_sltp" class="block text-gray-700 font-bold mb-2">Tamat SLTP</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="tamat_sltp" name="tamat_sltp" value="{{ old('tamat_sltp') }}" required>
                    </div>
                </div>

                <!-- Kolom Kedua -->
                <div class="w-full md:w-1/2 px-2">
                    <div class="mb-4">
                        <label for="tamat_slta" class="block text-gray-700 font-bold mb-2">Tamat SLTA</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="tamat_slta" name="tamat_slta" value="{{ old('tamat_slta') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="tamat_akademi" class="block text-gray-700 font-bold mb-2">Tamat Akademi</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="tamat_akademi" name="tamat_akademi" value="{{ old('tamat_akademi') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="tamat_perguruan_tinggi" class="block text-gray-700 font-bold mb-2">Tamat Perguruan Tinggi</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="tamat_perguruan_tinggi" name="tamat_perguruan_tinggi" value="{{ old('tamat_perguruan_tinggi') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="buta_huruf" class="block text-gray-700 font-bold mb-2">Buta Huruf</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="buta_huruf" name="buta_huruf" value="{{ old('buta_huruf') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="petani_pemilik_tanah" class="block text-gray-700 font-bold mb-2">Petani Pemilik Tanah</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="petani_pemilik_tanah" name="petani_pemilik_tanah" value="{{ old('petani_pemilik_tanah') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="petani_penggarap_tanah" class="block text-gray-700 font-bold mb-2">Petani Penggarap Tanah</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="petani_penggarap_tanah" name="petani_penggarap_tanah" value="{{ old('petani_penggarap_tanah') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="buruh_tani" class="block text-gray-700 font-bold mb-2">Buruh Tani</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="buruh_tani" name="buruh_tani" value="{{ old('buruh_tani') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="buruh_industri" class="block text-gray-700 font-bold mb-2">Buruh Industri</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="buruh_industri" name="buruh_industri" value="{{ old('buruh_industri') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="buruh_bangunan" class="block text-gray-700 font-bold mb-2">Buruh Bangunan</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="buruh_bangunan" name="buruh_bangunan" value="{{ old('buruh_bangunan') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="pedagang" class="block text-gray-700 font-bold mb-2">Pedagang</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="pedagang" name="pedagang" value="{{ old('pedagang') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="pengusaha_kecil" class="block text-gray-700 font-bold mb-2">Pengusaha Kecil</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="pengusaha_kecil" name="pengusaha_kecil" value="{{ old('pengusaha_kecil') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="peternak" class="block text-gray-700 font-bold mb-2">Peternak</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="peternak" name="peternak" value="{{ old('peternak') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="nelayan" class="block text-gray-700 font-bold mb-2">Nelayan</label>
                        <input type="number" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="nelayan" name="nelayan" value="{{ old('nelayan') }}" required>
                    </div>
                </div>
            </div>

            <!-- Button Submit -->
            <div class="text-center mt-6">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
</div>



@endsection
