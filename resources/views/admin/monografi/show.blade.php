@extends('admin.layouts.adminapp')

@section('content')
<div class="container mx-auto px-4 py-8" style="max-width: 1200px;">
    <h1 class="text-2xl font-bold mb-4">Detail Monografi</h1>
    
    <div class="bg-white shadow-md rounded-md p-6">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <strong>Desa:</strong> {{ $monografi->desa }}
            </div>
            <div>
                <strong>Kecamatan:</strong> {{ $monografi->kecamatan }}
            </div>
            <div>
                <strong>Kabupaten:</strong> {{ $monografi->kabupaten }}
            </div>
            <div>
                <strong>Jumlah Penduduk:</strong> {{ $monografi->jumlah_penduduk }}
            </div>
            <div>
                <strong>Luas Wilayah:</strong> {{ $monografi->luas_wilayah }}
            </div>
            <div>
                <strong>Tingkat Ekonomi:</strong> {{ $monografi->tingkat_ekonomi }}
            </div>
            <div>
                <strong>Kepadatan Penduduk:</strong> {{ $monografi->kepadatan_penduduk }}
            </div>
            <div>
                <strong>Jumlah Dusun:</strong> {{ $monografi->jumlah_dusun }}
            </div>
            <div>
                <strong>Jumlah RW:</strong> {{ $monografi->jumlah_rw }}
            </div>
            <div>
                <strong>Jumlah RT:</strong> {{ $monografi->jumlah_rt }}
            </div>
            <div>
                <strong>Jumlah Penduduk Laki-Laki:</strong> {{ $monografi->jumlah_penduduk_laki_laki }}
            </div>
            <div>
                <strong>Jumlah Penduduk Perempuan:</strong> {{ $monografi->jumlah_penduduk_perempuan }}
            </div>
            <div>
                <strong>Jumlah Penduduk Total:</strong> {{ $monografi->jumlah_penduduk_total }}
            </div>
            <div>
                <strong>Belum Sekolah:</strong> {{ $monografi->belum_sekolah }}
            </div>
            <div>
                <strong>Tidak Tamat SD:</strong> {{ $monografi->tidak_tamat_sd }}
            </div>
            <div>
                <strong>Tamat SD:</strong> {{ $monografi->tamat_sd }}
            </div>
            <div>
                <strong>Tamat SLTP:</strong> {{ $monografi->tamat_sltp }}
            </div>
            <div>
                <strong>Tamat SLTA:</strong> {{ $monografi->tamat_slta }}
            </div>
            <div>
                <strong>Tamat Akademi:</strong> {{ $monografi->tamat_akademi }}
            </div>
            <div>
                <strong>Tamat Perguruan Tinggi:</strong> {{ $monografi->tamat_perguruan_tinggi }}
            </div>
            <div>
                <strong>Buta Huruf:</strong> {{ $monografi->buta_huruf }}
            </div>
            <div>
                <strong>Petani Pemilik Tanah:</strong> {{ $monografi->petani_pemilik_tanah }}
            </div>
            <div>
                <strong>Petani Penggarap Tanah:</strong> {{ $monografi->petani_penggarap_tanah }}
            </div>
            <div>
                <strong>Buruh Tani:</strong> {{ $monografi->buruh_tani }}
            </div>
            <div>
                <strong>Nelayan:</strong> {{ $monografi->nelayan }}
            </div>
            <div>
                <strong>Pengusaha Sedang Besar:</strong> {{ $monografi->pengusaha_sedang_besar }}
            </div>
            <div>
                <strong>Buruh Bangunan:</strong> {{ $monografi->buruh_bangunan }}
            </div>
            <div>
                <strong>Buruh Perkebunan:</strong> {{ $monografi->buruh_perkebunan }}
            </div>
            <div>
                <strong>Pedagang:</strong> {{ $monografi->pedagang }}
            </div>
            <div>
                <strong>Pengangkutan:</strong> {{ $monografi->pengangkutan }}
            </div>
            <div>
                <strong>PNS/TNI/Polisi:</strong> {{ $monografi->pns_tni_polisi }}
            </div>
            <div>
                <strong>Pensiunan:</strong> {{ $monografi->pensiunan }}
            </div>
            <div>
                <strong>Jumlah Kepala Keluarga:</strong> {{ $monografi->jumlah_kepala_keluarga }}
            </div>
            <div>
                <strong>Jumlah Kepala Keluarga Laki-Laki:</strong> {{ $monografi->jumlah_kepala_keluarga_laki_laki }}
            </div>
            <div>
                <strong>Jumlah Kepala Keluarga Perempuan:</strong> {{ $monografi->jumlah_kepala_keluarga_perempuan }}
            </div>
            <div>
                <strong>Jumlah Islam:</strong> {{ $monografi->jumlah_islam }}
            </div>
            <div>
                <strong>Jumlah Katolik:</strong> {{ $monografi->jumlah_khatolik }}
            </div>
            <div>
                <strong>Jumlah Protestan:</strong> {{ $monografi->jumlah_protestan }}
            </div>
            <div>
                <strong>Jumlah Hindu:</strong> {{ $monografi->jumlah_hindu }}
            </div>
            <div>
                <strong>Jumlah Budha:</strong> {{ $monografi->jumlah_budha }}
            </div>
            <div>
                <strong>Dokter:</strong> {{ $monografi->dokter }}
            </div>
            <div>
                <strong>Perawat:</strong> {{ $monografi->perawat }}
            </div>
            <div>
                <strong>Bidan:</strong> {{ $monografi->bidan }}
            </div>
            <div>
                <strong>Dokter Khitan:</strong> {{ $monografi->dokter_khitan }}
            </div>
            <div>
                <strong>Dukun Bayi:</strong> {{ $monografi->dukun_bayi }}
            </div>
            <div>
                <strong>Apotek/Depot Obat:</strong> {{ $monografi->apotek_depot_obat }}
            </div>
            <div>
                <strong>Tanah Sawah:</strong> {{ $monografi->tanah_sawah }}
            </div>
            <div>
                <strong>Tanah Kering:</strong> {{ $monografi->tanah_kering }}
            </div>
            <div>
                <strong>Tambak/Kolam:</strong> {{ $monografi->tambak_kolam }}
            </div>
            <div>
                <strong>Rawa-Rawa:</strong> {{ $monografi->rawa_rawa }}
            </div>
            <div>
                <strong>Masjid:</strong> {{ $monografi->masjid }}
            </div>
            <div>
                <strong>Musholla:</strong> {{ $monografi->musholla }}
            </div>
            <div>
                <strong>Gereja:</strong> {{ $monografi->gereja }}
            </div>
            <div>
                <strong>Pura:</strong> {{ $monografi->pura }}
            </div>
            <div>
                <strong>Wihara:</strong> {{ $monografi->wihara }}
            </div>
            <div>
                <strong>Klenteng:</strong> {{ $monografi->klenteng }}
            </div>
            <div>
                <strong>Sarana Pendidikan:</strong> {{ $monografi->sarana_pendidikan }}
            </div>
            <div>
                <strong>Sarana Kesehatan:</strong> {{ $monografi->sarana_kesehatan }}
            </div>
            <div>
                <strong>Sarana Sosial:</strong> {{ $monografi->sarana_sosial }}
            </div>
            <div>
                <strong>Lapangan Olahraga:</strong> {{ $monografi->lapangan_olahraga }}
            </div>
            <div>
                <strong>Taman Rekreasi:</strong> {{ $monografi->taman_rekreasi }}
            </div>
            <div>
                <strong>Jalur Hijau:</strong> {{ $monografi->jalur_hijau }}
            </div>
            <div>
                <strong>Pemakaman:</strong> {{ $monografi->pemakaman }}
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('monografi.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md">Kembali</a>
    </div>
</div>
@endsection
