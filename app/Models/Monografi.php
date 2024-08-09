<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monografi extends Model
{
    use HasFactory;

    protected $table = 'monografi';

    protected $fillable = [
        'kepadatan_penduduk',
        'jumlah_dusun',
        'jumlah_rw',
        'jumlah_rt',
        'jumlah_penduduk_laki_laki',
        'jumlah_penduduk_perempuan',
        'jumlah_penduduk_total',
        'belum_sekolah',
        'tidak_tamat_sd',
        'tamat_sd',
        'tamat_sltp',
        'tamat_slta',
        'tamat_akademi',
        'tamat_perguruan_tinggi',
        'buta_huruf',
        'petani_pemilik_tanah',
        'petani_penggarap_tanah',
        'buruh_tani',
        'nelayan',
        'pengusaha_sedang_besar',
        'buruh_bangunan',
        'buruh_perkebunan',
        'pedagang',
        'pengangkutan',
        'pns_tni_polisi',
        'pensiunan',
        'jumlah_kepala_keluarga',
        'jumlah_kepala_keluarga_laki_laki',
        'jumlah_kepala_keluarga_perempuan',
        'jumlah_islam',
        'jumlah_khatolik',
        'jumlah_protestan',
        'jumlah_hindu',
        'jumlah_budha',
        'dokter',
        'perawat',
        'bidan',
        'dokter_khitan',
        'dukun_bayi',
        'apotek_depot_obat',
        'tanah_sawah',
        'tanah_kering',
        'tambak_kolam',
        'rawa_rawa',
        'masjid',
        'musholla',
        'gereja',
        'pura',
        'wihara',
        'klenteng',
        'sarana_pendidikan',
        'sarana_kesehatan',
        'sarana_sosial',
        'lapangan_olahraga',
        'taman_rekreasi',
        'jalur_hijau',
        'pemakaman'
    ];
}
