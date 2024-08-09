<!-- resources/views/admin/monografi/form.blade.php -->
<div class="grid grid-cols-1 gap-4 md:grid-cols-2">

    <!-- Kepadatan Penduduk -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="kepadatan_penduduk" class="block text-sm font-medium text-gray-700">Kepadatan Penduduk</label>
        <input type="text" name="kepadatan_penduduk" id="kepadatan_penduduk" value="{{ old('kepadatan_penduduk', $monografi->kepadatan_penduduk ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Dusun -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_dusun" class="block text-sm font-medium text-gray-700">Jumlah Dusun</label>
        <input type="number" name="jumlah_dusun" id="jumlah_dusun" value="{{ old('jumlah_dusun', $monografi->jumlah_dusun ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah RW -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_rw" class="block text-sm font-medium text-gray-700">Jumlah RW</label>
        <input type="number" name="jumlah_rw" id="jumlah_rw" value="{{ old('jumlah_rw', $monografi->jumlah_rw ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah RT -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_rt" class="block text-sm font-medium text-gray-700">Jumlah RT</label>
        <input type="number" name="jumlah_rt" id="jumlah_rt" value="{{ old('jumlah_rt', $monografi->jumlah_rt ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Penduduk Laki-laki -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_penduduk_laki_laki" class="block text-sm font-medium text-gray-700">Jumlah Penduduk Laki-laki</label>
        <input type="number" name="jumlah_penduduk_laki_laki" id="jumlah_penduduk_laki_laki" value="{{ old('jumlah_penduduk_laki_laki', $monografi->jumlah_penduduk_laki_laki ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Penduduk Perempuan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_penduduk_perempuan" class="block text-sm font-medium text-gray-700">Jumlah Penduduk Perempuan</label>
        <input type="number" name="jumlah_penduduk_perempuan" id="jumlah_penduduk_perempuan" value="{{ old('jumlah_penduduk_perempuan', $monografi->jumlah_penduduk_perempuan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Penduduk Total -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_penduduk_total" class="block text-sm font-medium text-gray-700">Jumlah Penduduk Total</label>
        <input type="number" name="jumlah_penduduk_total" id="jumlah_penduduk_total" value="{{ old('jumlah_penduduk_total', $monografi->jumlah_penduduk_total ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Belum Sekolah -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="belum_sekolah" class="block text-sm font-medium text-gray-700">Belum Sekolah</label>
        <input type="number" name="belum_sekolah" id="belum_sekolah" value="{{ old('belum_sekolah', $monografi->belum_sekolah ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tidak Tamat SD -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tidak_tamat_sd" class="block text-sm font-medium text-gray-700">Tidak Tamat SD</label>
        <input type="number" name="tidak_tamat_sd" id="tidak_tamat_sd" value="{{ old('tidak_tamat_sd', $monografi->tidak_tamat_sd ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tamat SD -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tamat_sd" class="block text-sm font-medium text-gray-700">Tamat SD</label>
        <input type="number" name="tamat_sd" id="tamat_sd" value="{{ old('tamat_sd', $monografi->tamat_sd ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tamat SLTP -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tamat_sltp" class="block text-sm font-medium text-gray-700">Tamat SLTP</label>
        <input type="number" name="tamat_sltp" id="tamat_sltp" value="{{ old('tamat_sltp', $monografi->tamat_sltp ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tamat SLTA -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tamat_slta" class="block text-sm font-medium text-gray-700">Tamat SLTA</label>
        <input type="number" name="tamat_slta" id="tamat_slta" value="{{ old('tamat_slta', $monografi->tamat_slta ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tamat Akademi -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tamat_akademi" class="block text-sm font-medium text-gray-700">Tamat Akademi</label>
        <input type="number" name="tamat_akademi" id="tamat_akademi" value="{{ old('tamat_akademi', $monografi->tamat_akademi ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tamat Perguruan Tinggi -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tamat_perguruan_tinggi" class="block text-sm font-medium text-gray-700">Tamat Perguruan Tinggi</label>
        <input type="number" name="tamat_perguruan_tinggi" id="tamat_perguruan_tinggi" value="{{ old('tamat_perguruan_tinggi', $monografi->tamat_perguruan_tinggi ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Buta Huruf -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="buta_huruf" class="block text-sm font-medium text-gray-700">Buta Huruf</label>
        <input type="number" name="buta_huruf" id="buta_huruf" value="{{ old('buta_huruf', $monografi->buta_huruf ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Petani Pemilik Tanah -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="petani_pemilik_tanah" class="block text-sm font-medium text-gray-700">Petani Pemilik Tanah</label>
        <input type="number" name="petani_pemilik_tanah" id="petani_pemilik_tanah" value="{{ old('petani_pemilik_tanah', $monografi->petani_pemilik_tanah ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Petani Penggarap Tanah -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="petani_penggarap_tanah" class="block text-sm font-medium text-gray-700">Petani Penggarap Tanah</label>
        <input type="number" name="petani_penggarap_tanah" id="petani_penggarap_tanah" value="{{ old('petani_penggarap_tanah', $monografi->petani_penggarap_tanah ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Buruh Tani -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="buruh_tani" class="block text-sm font-medium text-gray-700">Buruh Tani</label>
        <input type="number" name="buruh_tani" id="buruh_tani" value="{{ old('buruh_tani', $monografi->buruh_tani ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Nelayan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="nelayan" class="block text-sm font-medium text-gray-700">Nelayan</label>
        <input type="number" name="nelayan" id="nelayan" value="{{ old('nelayan', $monografi->nelayan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Pengusaha Sedang Besar -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="pengusaha_sedang_besar" class="block text-sm font-medium text-gray-700">Pengusaha Sedang Besar</label>
        <input type="number" name="pengusaha_sedang_besar" id="pengusaha_sedang_besar" value="{{ old('pengusaha_sedang_besar', $monografi->pengusaha_sedang_besar ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Buruh Bangunan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="buruh_bangunan" class="block text-sm font-medium text-gray-700">Buruh Bangunan</label>
        <input type="number" name="buruh_bangunan" id="buruh_bangunan" value="{{ old('buruh_bangunan', $monografi->buruh_bangunan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Buruh Perkebunan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="buruh_perkebunan" class="block text-sm font-medium text-gray-700">Buruh Perkebunan</label>
        <input type="number" name="buruh_perkebunan" id="buruh_perkebunan" value="{{ old('buruh_perkebunan', $monografi->buruh_perkebunan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Pedagang -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="pedagang" class="block text-sm font-medium text-gray-700">Pedagang</label>
        <input type="number" name="pedagang" id="pedagang" value="{{ old('pedagang', $monografi->pedagang ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Pengangkutan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="pengangkutan" class="block text-sm font-medium text-gray-700">Pengangkutan</label>
        <input type="number" name="pengangkutan" id="pengangkutan" value="{{ old('pengangkutan', $monografi->pengangkutan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- PNS TNI Polisi -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="pns_tni_polisi" class="block text-sm font-medium text-gray-700">PNS TNI Polisi</label>
        <input type="number" name="pns_tni_polisi" id="pns_tni_polisi" value="{{ old('pns_tni_polisi', $monografi->pns_tni_polisi ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Pensiunan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="pensiunan" class="block text-sm font-medium text-gray-700">Pensiunan</label>
        <input type="number" name="pensiunan" id="pensiunan" value="{{ old('pensiunan', $monografi->pensiunan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Kepala Keluarga -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_kepala_keluarga" class="block text-sm font-medium text-gray-700">Jumlah Kepala Keluarga</label>
        <input type="number" name="jumlah_kepala_keluarga" id="jumlah_kepala_keluarga" value="{{ old('jumlah_kepala_keluarga', $monografi->jumlah_kepala_keluarga ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Kepala Keluarga Laki-laki -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_kepala_keluarga_laki_laki" class="block text-sm font-medium text-gray-700">Jumlah Kepala Keluarga Laki-laki</label>
        <input type="number" name="jumlah_kepala_keluarga_laki_laki" id="jumlah_kepala_keluarga_laki_laki" value="{{ old('jumlah_kepala_keluarga_laki_laki', $monografi->jumlah_kepala_keluarga_laki_laki ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Kepala Keluarga Perempuan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_kepala_keluarga_perempuan" class="block text-sm font-medium text-gray-700">Jumlah Kepala Keluarga Perempuan</label>
        <input type="number" name="jumlah_kepala_keluarga_perempuan" id="jumlah_kepala_keluarga_perempuan" value="{{ old('jumlah_kepala_keluarga_perempuan', $monografi->jumlah_kepala_keluarga_perempuan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Islam -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_islam" class="block text-sm font-medium text-gray-700">Jumlah Islam</label>
        <input type="number" name="jumlah_islam" id="jumlah_islam" value="{{ old('jumlah_islam', $monografi->jumlah_islam ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Khatolik -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_khatolik" class="block text-sm font-medium text-gray-700">Jumlah Khatolik</label>
        <input type="number" name="jumlah_khatolik" id="jumlah_khatolik" value="{{ old('jumlah_khatolik', $monografi->jumlah_khatolik ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Protestan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_protestan" class="block text-sm font-medium text-gray-700">Jumlah Protestan</label>
        <input type="number" name="jumlah_protestan" id="jumlah_protestan" value="{{ old('jumlah_protestan', $monografi->jumlah_protestan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Hindu -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_hindu" class="block text-sm font-medium text-gray-700">Jumlah Hindu</label>
        <input type="number" name="jumlah_hindu" id="jumlah_hindu" value="{{ old('jumlah_hindu', $monografi->jumlah_hindu ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Budha -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_budha" class="block text-sm font-medium text-gray-700">Jumlah Budha</label>
        <input type="number" name="jumlah_budha" id="jumlah_budha" value="{{ old('jumlah_budha', $monografi->jumlah_budha ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Dokter -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="dokter" class="block text-sm font-medium text-gray-700">Dokter</label>
        <input type="number" name="dokter" id="dokter" value="{{ old('dokter', $monografi->dokter ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Perawat -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="perawat" class="block text-sm font-medium text-gray-700">Perawat</label>
        <input type="number" name="perawat" id="perawat" value="{{ old('perawat', $monografi->perawat ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Bidan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="bidan" class="block text-sm font-medium text-gray-700">Bidan</label>
        <input type="number" name="bidan" id="bidan" value="{{ old('bidan', $monografi->bidan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Dokter Khitan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="dokter_khitan" class="block text-sm font-medium text-gray-700">Dokter Khitan</label>
        <input type="number" name="dokter_khitan" id="dokter_khitan" value="{{ old('dokter_khitan', $monografi->dokter_khitan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Dukun Bayi -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="dukun_bayi" class="block text-sm font-medium text-gray-700">Dukun Bayi</label>
        <input type="number" name="dukun_bayi" id="dukun_bayi" value="{{ old('dukun_bayi', $monografi->dukun_bayi ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Apotek Depot Obat -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="apotek_depot_obat" class="block text-sm font-medium text-gray-700">Apotek Depot Obat</label>
        <input type="number" name="apotek_depot_obat" id="apotek_depot_obat" value="{{ old('apotek_depot_obat', $monografi->apotek_depot_obat ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tanah Sawah -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tanah_sawah" class="block text-sm font-medium text-gray-700">Tanah Sawah</label>
        <input type="number" name="tanah_sawah" id="tanah_sawah" value="{{ old('tanah_sawah', $monografi->tanah_sawah ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tanah Kering -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tanah_kering" class="block text-sm font-medium text-gray-700">Tanah Kering</label>
        <input type="number" name="tanah_kering" id="tanah_kering" value="{{ old('tanah_kering', $monografi->tanah_kering ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Tambak Kolam -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="tambak_kolam" class="block text-sm font-medium text-gray-700">Tambak Kolam</label>
        <input type="number" name="tambak_kolam" id="tambak_kolam" value="{{ old('tambak_kolam', $monografi->tambak_kolam ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Rawa Rawa -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="rawa_rawa" class="block text-sm font-medium text-gray-700">Rawa Rawa</label>
        <input type="number" name="rawa_rawa" id="rawa_rawa" value="{{ old('rawa_rawa', $monografi->rawa_rawa ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Masjid -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="masjid" class="block text-sm font-medium text-gray-700">Masjid</label>
        <input type="number" name="masjid" id="masjid" value="{{ old('masjid', $monografi->masjid ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Musholla -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="musholla" class="block text-sm font-medium text-gray-700">Musholla</label>
        <input type="number" name="musholla" id="musholla" value="{{ old('musholla', $monografi->musholla ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Gereja Katolik -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="gereja_katolik" class="block text-sm font-medium text-gray-700">Gereja Katolik</label>
        <input type="number" name="gereja_katolik" id="gereja_katolik" value="{{ old('gereja_katolik', $monografi->gereja_katolik ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Gereja Protestan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="gereja_protestan" class="block text-sm font-medium text-gray-700">Gereja Protestan</label>
        <input type="number" name="gereja_protestan" id="gereja_protestan" value="{{ old('gereja_protestan', $monografi->gereja_protestan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Pura -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="pura" class="block text-sm font-medium text-gray-700">Pura</label>
        <input type="number" name="pura" id="pura" value="{{ old('pura', $monografi->pura ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Vihara -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="vihara" class="block text-sm font-medium text-gray-700">Vihara</label>
        <input type="number" name="vihara" id="vihara" value="{{ old('vihara', $monografi->vihara ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Dokter Umum -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="dokter_umum" class="block text-sm font-medium text-gray-700">Dokter Umum</label>
        <input type="number" name="dokter_umum" id="dokter_umum" value="{{ old('dokter_umum', $monografi->dokter_umum ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Jumlah Sekolah -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="jumlah_sekolah" class="block text-sm font-medium text-gray-700">Jumlah Sekolah</label>
        <input type="number" name="jumlah_sekolah" id="jumlah_sekolah" value="{{ old('jumlah_sekolah', $monografi->jumlah_sekolah ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Taman Kanak-Kanak -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="taman_kanak_kanak" class="block text-sm font-medium text-gray-700">Taman Kanak-Kanak</label>
        <input type="number" name="taman_kanak_kanak" id="taman_kanak_kanak" value="{{ old('taman_kanak_kanak', $monografi->taman_kanak_kanak ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Sekolah Dasar -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="sekolah_dasar" class="block text-sm font-medium text-gray-700">Sekolah Dasar</label>
        <input type="number" name="sekolah_dasar" id="sekolah_dasar" value="{{ old('sekolah_dasar', $monografi->sekolah_dasar ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Sekolah Menengah Pertama -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="sekolah_menengah_pertama" class="block text-sm font-medium text-gray-700">Sekolah Menengah Pertama</label>
        <input type="number" name="sekolah_menengah_pertama" id="sekolah_menengah_pertama" value="{{ old('sekolah_menengah_pertama', $monografi->sekolah_menengah_pertama ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Sekolah Menengah Atas -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="sekolah_menengah_atas" class="block text-sm font-medium text-gray-700">Sekolah Menengah Atas</label>
        <input type="number" name="sekolah_menengah_atas" id="sekolah_menengah_atas" value="{{ old('sekolah_menengah_atas', $monografi->sekolah_menengah_atas ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Universitas -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="universitas" class="block text-sm font-medium text-gray-700">Universitas</label>
        <input type="number" name="universitas" id="universitas" value="{{ old('universitas', $monografi->universitas ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Kesehatan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="kesehatan" class="block text-sm font-medium text-gray-700">Kesehatan</label>
        <input type="number" name="kesehatan" id="kesehatan" value="{{ old('kesehatan', $monografi->kesehatan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Transportasi -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="transportasi" class="block text-sm font-medium text-gray-700">Transportasi</label>
        <input type="number" name="transportasi" id="transportasi" value="{{ old('transportasi', $monografi->transportasi ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Perdagangan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="perdagangan" class="block text-sm font-medium text-gray-700">Perdagangan</label>
        <input type="number" name="perdagangan" id="perdagangan" value="{{ old('perdagangan', $monografi->perdagangan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Keagamaan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="keagamaan" class="block text-sm font-medium text-gray-700">Keagamaan</label>
        <input type="number" name="keagamaan" id="keagamaan" value="{{ old('keagamaan', $monografi->keagamaan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Pemerintahan -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="pemerintahan" class="block text-sm font-medium text-gray-700">Pemerintahan</label>
        <input type="number" name="pemerintahan" id="pemerintahan" value="{{ old('pemerintahan', $monografi->pemerintahan ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>

    <!-- Lain-lain -->
    <div class="mb-4 md:w-1/2 ml-auto">
        <label for="lain_lain" class="block text-sm font-medium text-gray-700">Lain-lain</label>
        <input type="number" name="lain_lain" id="lain_lain" value="{{ old('lain_lain', $monografi->lain_lain ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>
</form>
