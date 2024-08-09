@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    @if($monografis->count() > 0)
        @foreach($monografis as $monografi)
        <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Monogram Desa {{ $monografi->desa }}</h1>

        <!-- Keterangan Umum -->
        <h2 class="text-xl font-semibold mb-2">Keterangan Umum</h2>
        <p>Desa: {{ $monografi->desa }}</p>
        <p>Tinggi Wilayah: {{ $monografi->tinggi_wilayah }} MDPL</p>
        <p>Kecamatan: {{ $monografi->kecamatan }}</p>
        <p>Suhu: Max {{ $monografi->suhu_max }}°C, Min {{ $monografi->suhu_min }}°C</p>
        <p>Jarak Desa dengan:</p>
        <ul class="list-disc ml-6">
            <li>Ibukota Kecamatan: {{ $monografi->jarak_ibukota_kecamatan }} km / 1 jam</li>
            <li>Ibukota Kabupaten: {{ $monografi->jarak_ibukota_kabupaten }} km / 3 jam</li>
            <li>Ibukota Provinsi: {{ $monografi->jarak_ibukota_provinsi }}</li>
        </ul>

        <!-- Curah Hujan dan Bentuk Wilayah -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Curah Hujan dan Bentuk Wilayah</h2>
        <p>Curah Hujan Terbanyak: {{ $monografi->curah_hujan_terbanyak }} hari</p>
        <p>Bentuk Wilayah:</p>
        <ul class="list-disc ml-6">
            <li>Datar sampai Berombak: {{ $monografi->datar_berombak }}%</li>
            <li>Berombak sampai Berbukit: {{ $monografi->berombak_berbukit }}%</li>
            <li>Berbukit sampai Bergunung: {{ $monografi->berbukit_bergunung }}%</li>
        </ul>

        <!-- Tanah -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Tanah</h2>
        <p>Tanah Kering:</p>
        <ul class="list-disc ml-6">
            <li>Pekarangan/Bangunan/Emplasemen: {{ $monografi->pek_bangunan }} ha</li>
            <li>Tegal/Kebun: {{ $monografi->tegal_kebun }} ha</li>
            <li>Ladang/Tanah Huma: {{ $monografi->ladang_tanah_huma }} ha</li>
            <li>Ladang Penggembalaan/Pangonan: {{ $monografi->ladang_penggembalaan }} ha</li>
        </ul>
        <p>Tanah Basah:</p>
        <ul class="list-disc ml-6">
            <li>Tambak: {{ $monografi->tambak }} ha</li>
            <li>Rawa/Pasang Surut: {{ $monografi->rawa_pasang_surut }} ha</li>
            <li>Balong/Empang/Kolam: {{ $monografi->balong_empang_kolam }} ha</li>
            <li>Gambut: {{ $monografi->gambut }} ha</li>
        </ul>
        <p>Tanah Hutan:</p>
        <ul class="list-disc ml-6">
            <li>Tanah Perkebunan Negara: {{ $monografi->tanah_perkebunan_negara }} ha</li>
            <li>Tanah Perkebunan Swasta: {{ $monografi->tanah_perkebunan_swasta }} ha</li>
            <li>Tanah Perkebunan Rakyat: {{ $monografi->tanah_perkebunan_rakyat }} ha</li>
        </ul>
        <p>Tanah Keperluan Fasilitas Umum:</p>
        <ul class="list-disc ml-6">
            <li>Lapangan Olahraga: {{ $monografi->lapangan_olahraga }} ha</li>
            <li>Taman Rekreasi: {{ $monografi->taman_rekreasi }} ha</li>
            <li>Jalur Hijau: {{ $monografi->jalur_hijau }} ha</li>
            <li>Pemakaman: {{ $monografi->pemakaman }} ha</li>
        </ul>
        <p>Tanah Keperluan Fasilitas Sosial:</p>
        <ul class="list-disc ml-6">
            <li>Masjid/Musholla: {{ $monografi->masjid_musholla }} ha</li>
            <li>Gereja: {{ $monografi->gereja }} ha</li>
            <li>Pura: {{ $monografi->pura }} ha</li>
            <li>Wihara: {{ $monografi->wihara }} ha</li>
            <li>Klenteng: {{ $monografi->klenteng }} ha</li>
            <li>Sarana Pendidikan: {{ $monografi->sarana_pendidikan }} ha</li>
            <li>Sarana Kesehatan: {{ $monografi->sarana_kesehatan }} ha</li>
            <li>Sarana Sosial: {{ $monografi->sarana_sosial }} ha</li>
        </ul>

        <!-- Pemerintahan Desa -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Pemerintahan Desa</h2>
        <p>Dusun/Lingkungan: {{ $monografi->dusun }}</p>
        <p>Rukun Warga (RW): {{ $monografi->rw }}</p>
        <p>Rukun Tetangga (RT): {{ $monografi->rt }}</p>

        <!-- Kejuaraan Lomba Desa/Kelurahan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Kejuaraan Lomba Desa/Kelurahan (Lima Tahun Terakhir)</h2>
        <p>Tingkat Kecamatan: {{ $monografi->kejuaraan_lomba_kecamatan }}</p>
        <p>Tingkat Kabupaten: {{ $monografi->kejuaraan_lomba_kabupaten }}</p>
        <p>Tingkat Provinsi: {{ $monografi->kejuaraan_lomba_provinsi }}</p>

        <!-- Prasarana Pemerintahan Desa -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Prasarana Pemerintahan Desa</h2>
        <p>Balai Desa:</p>
        <ul class="list-disc ml-6">
            <li>Luas Tanah: {{ $monografi->balai_desa_luas_tanah }} m²</li>
            <li>Luas Bangunan: {{ $monografi->balai_desa_luas_bangunan }} m²</li>
            <li>Dibangun Tahun: {{ $monografi->balai_desa_tahun_dibangun }}</li>
        </ul>
        <p>Tanah Kas Desa:</p>
        <ul class="list-disc ml-6">
            <li>Luas Tanah Sawah: {{ $monografi->tanah_kas_sawah }} ha</li>
            <li>Luas Tanah Kering: {{ $monografi->tanah_kas_kering }} ha</li>
            <li>Luas Tambak/Kolam: {{ $monografi->tanah_kas_tambak_kolam }} ha</li>
            <li>Luas Rawa-rawa: {{ $monografi->tanah_kas_rawa }} ha</li>
            <li>Luas Lain-lain: {{ $monografi->tanah_kas_lainnya }} ha</li>
            <li>Jumlah: {{ $monografi->tanah_kas_sawah + $monografi->tanah_kas_kering + $monografi->tanah_kas_tambak_kolam + $monografi->tanah_kas_rawa + $monografi->tanah_kas_lainnya }} ha</li>
        </ul>

        <!-- Prasarana Pengairan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Prasarana Pengairan</h2>
        <p>Waduk/Dam/Embung: {{ $monografi->waduk_dam_embung }}</p>
        <p>Kincir Air/Pompa Air: {{ $monografi->kincir_air_pompa }} unit</p>
        <p>Air Terjun: {{ $monografi->air_terjun }}</p>
        <p>Sungai/Kali: {{ $monografi->sungai_kali }}</p>
        <p>Danau/Situ: {{ $monografi->danau_situ }}</p>

        <!-- Prasarana Jalan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Prasarana Jalan</h2>
        <p>Jalan Desa:</p>
        <ul class="list-disc ml-6">
            <li>Aspal/Beton: {{ $monografi->jalan_aspal_beton }} km</li>
            <li>Diperkeras: {{ $monografi->jalan_diperkeras }} km</li>
            <li>Jalan Tanah: {{ $monografi->jalan_tanah }} km</li>
        </ul>
        <p>Kondisi Jalan:</p>
        <ul class="list-disc ml-6">
            <li>Baik: {{ $monografi->jalan_baik }} km</li>
            <li>Sedang: {{ $monografi->jalan_sedang }} km</li>
            <li>Rusak: {{ $monografi->jalan_rusak }} km</li>
        </ul>
        <p>Jembatan:</p>
        <ul class="list-disc ml-6">
            <li>Jembatan Beton: {{ $monografi->jembatan_beton }} unit</li>
            <li>Jembatan Besi: {{ $monografi->jembatan_besi }} unit</li>
        </ul>

        <!-- Prasarana Ekonomi -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Prasarana Ekonomi</h2>
        <p>Koperasi:</p>
        <ul class="list-disc ml-6">
            <li>Koperasi Simpan Pinjam: {{ $monografi->koperasi_simpan_pinjam }} unit</li>
            <li>Koperasi Unit Desa: {{ $monografi->koperasi_unit_desa }} unit</li>
        </ul>
        <p>Pasar:</p>
        <ul class="list-disc ml-6">
            <li>Pasar Umum: {{ $monografi->pasar_umum }} unit</li>
            <li>Jumlah Toko/Kios/Warung: {{ $monografi->jumlah_toko_kios_warung }} unit</li>
        </ul>
        <p>Bank: {{ $monografi->bank }} unit</p>

        <!-- Prasarana Pendidikan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Prasarana Pendidikan</h2>
        <p>Taman Kanak-kanak:</p>
        <ul class="list-disc ml-6">
            <li>Jumlah Sekolah: {{ $monografi->tk_jumlah_sekolah }}</li>
            <li>Jumlah Murid: {{ $monografi->tk_jumlah_murid }}</li>
            <li>Jumlah Guru: {{ $monografi->tk_jumlah_guru }}</li>
        </ul>
        <p>Sekolah Dasar Negeri:</p>
        <ul class="list-disc ml-6">
            <li>Jumlah Sekolah: {{ $monografi->sdn_jumlah_sekolah }}</li>
            <li>Jumlah Murid: {{ $monografi->sdn_jumlah_murid }}</li>
            <li>Jumlah Guru: {{ $monografi->sdn_jumlah_guru }}</li>
        </ul>

        <!-- Prasarana Kesehatan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Prasarana Kesehatan</h2>
        <p>Puskesmas: {{ $monografi->puskesmas }}</p>
        <p>Dokter: {{ $monografi->dokter }}</p>
        <p>Perawat: {{ $monografi->perawat }}</p>
        <p>Bidan: {{ $monografi->bidan }}</p>
        <p>Apotik: {{ $monografi->apotik }}</p>

        <!-- Jumlah Penduduk -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Jumlah Penduduk</h2>
        <ul class="list-disc ml-6">
            <li>Jumlah KK: {{ $monografi->jumlah_kk }}</li>
            <li>Penduduk Laki-laki: {{ $monografi->penduduk_laki_laki }}</li>
            <li>Penduduk Perempuan: {{ $monografi->penduduk_perempuan }}</li>
            <li>Total Penduduk: {{ $monografi->penduduk_total }}</li>
            <li>Penduduk 0-6 Tahun: {{ $monografi->penduduk_0_6_tahun }}</li>
            <li>Penduduk 7-12 Tahun: {{ $monografi->penduduk_7_12_tahun }}</li>
            <li>Penduduk 13-18 Tahun: {{ $monografi->penduduk_13_18_tahun }}</li>
            <li>Penduduk 19-24 Tahun: {{ $monografi->penduduk_19_24_tahun }}</li>
            <li>Penduduk 25-55 Tahun: {{ $monografi->penduduk_25_55_tahun }}</li>
            <li>Penduduk 56-79 Tahun: {{ $monografi->penduduk_56_79_tahun }}</li>
            <li>Penduduk 80 Tahun ke Atas: {{ $monografi->penduduk_80_tahun_ke_atas }}</li>
        </ul>

        <!-- Tingkat Pendidikan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Tingkat Pendidikan</h2>
        <ul class="list-disc ml-6">
            <li>Belum Sekolah: {{ $monografi->belum_sekolah }}</li>
            <li>Tidak Tamat SD: {{ $monografi->tidak_tamat_sd }}</li>
            <li>Tamat SD: {{ $monografi->tamat_sd }}</li>
            <li>Tamat SLTP: {{ $monografi->tamat_sltp }}</li>
            <li>Tamat SLTA: {{ $monografi->tamat_slta }}</li>
            <li>Tamat Akademi: {{ $monografi->tamat_akademi }}</li>
            <li>Tamat Perguruan Tinggi: {{ $monografi->tamat_perguruan_tinggi }}</li>
            <li>Buta Huruf: {{ $monografi->buta_huruf }}</li>
        </ul>

        <!-- Dinamika Penduduk -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Dinamika Penduduk</h2>
        <ul class="list-disc ml-6">
            <li>Pindah: {{ $monografi->pindah }}</li>
            <li>Datang: {{ $monografi->datang }}</li>
            <li>Lahir: {{ $monografi->lahir }}</li>
            <li>Meninggal (5 Tahun Terakhir): {{ $monografi->mati_5_tahun }}</li>
        </ul>

        <!-- Pekerjaan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Pekerjaan</h2>
        <ul class="list-disc ml-6">
            <li>Petani Pemilik Tanah: {{ $monografi->petani_pemilik_tanah }}</li>
            <li>Petani Penggarap Tanah: {{ $monografi->petani_penggarap_tanah }}</li>
            <li>Buruh Tani: {{ $monografi->buruh_tani }}</li>
            <li>Pengusaha Sedang/Besar: {{ $monografi->pengusaha_sedang_besar }}</li>
        </ul>

        <!-- Kepemilikan Hewan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Kepemilikan Hewan</h2>
        <ul class="list-disc ml-6">
            <li>Ayam: {{ $monografi->ayam }} ekor</li>
            <li>Itik: {{ $monografi->itik }} ekor</li>
            <li>Kambing: {{ $monografi->kambing }} ekor</li>
        </ul>

        <!-- Kepemilikan Aset -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Kepemilikan Aset</h2>
        <ul class="list-disc ml-6">
            <li>Televisi: {{ $monografi->tv }}</li>
            <li>Telepon/HP: {{ $monografi->telepon_hp }}</li>
            <li>Penduduk dengan Listrik PLN: {{ $monografi->penduduk_listrik_pln }}</li>
        </ul>

        <!-- Keamanan -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Keamanan</h2>
        <ul class="list-disc ml-6">
            <li>Hansip Desa: {{ $monografi->hansip_desa }} unit</li>
            <li>Pos Kamling: {{ $monografi->pos_kamling }} unit</li>
        </ul>

        <!-- Jumlah Dusun, RW, RT -->
        <h2 class="text-xl font-semibold mt-4 mb-2">Jumlah Dusun, RW, RT</h2>
        <p>Dusun: {{ $monografi->dusun }}</p>
        <p>RW: {{ $monografi->rw }}</p>
        <p>RT: {{ $monografi->rt }}</p>

    </div>
    @endforeach
    @else
    <div class="bg-white shadow-md rounded-lg p-6">
        <p class="text-center">Data tidak ditemukan</p>
    </div>
    @endif
@endsection
