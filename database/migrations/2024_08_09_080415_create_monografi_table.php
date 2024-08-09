<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonografiTable extends Migration
{
    public function up()
    {
        Schema::create('monografi', function (Blueprint $table) {
            $table->id();
            $table->string('kepadatan_penduduk')->nullable();
            $table->integer('jumlah_dusun')->nullable();
            $table->integer('jumlah_rw')->nullable();
            $table->integer('jumlah_rt')->nullable();
            $table->integer('jumlah_penduduk_laki_laki')->nullable();
            $table->integer('jumlah_penduduk_perempuan')->nullable();
            $table->integer('jumlah_penduduk_total')->nullable();
            $table->integer('belum_sekolah')->nullable();
            $table->integer('tidak_tamat_sd')->nullable();
            $table->integer('tamat_sd')->nullable();
            $table->integer('tamat_sltp')->nullable();
            $table->integer('tamat_slta')->nullable();
            $table->integer('tamat_akademi')->nullable();
            $table->integer('tamat_perguruan_tinggi')->nullable();
            $table->integer('buta_huruf')->nullable();
            $table->integer('petani_pemilik_tanah')->nullable();
            $table->integer('petani_penggarap_tanah')->nullable();
            $table->integer('buruh_tani')->nullable();
            $table->integer('nelayan')->nullable();
            $table->integer('pengusaha_sedang_besar')->nullable();
            $table->integer('buruh_bangunan')->nullable();
            $table->integer('buruh_perkebunan')->nullable();
            $table->integer('pedagang')->nullable();
            $table->integer('pengangkutan')->nullable();
            $table->integer('pns_tni_polisi')->nullable();
            $table->integer('pensiunan')->nullable();
            $table->integer('jumlah_kepala_keluarga')->nullable();
            $table->integer('jumlah_kepala_keluarga_laki_laki')->nullable();
            $table->integer('jumlah_kepala_keluarga_perempuan')->nullable();
            $table->integer('jumlah_islam')->nullable();
            $table->integer('jumlah_khatolik')->nullable();
            $table->integer('jumlah_protestan')->nullable();
            $table->integer('jumlah_hindu')->nullable();
            $table->integer('jumlah_budha')->nullable();
            $table->integer('dokter')->nullable();
            $table->integer('perawat')->nullable();
            $table->integer('bidan')->nullable();
            $table->integer('dokter_khitan')->nullable();
            $table->integer('dukun_bayi')->nullable();
            $table->integer('apotek_depot_obat')->nullable();
            $table->integer('tanah_sawah')->nullable();
            $table->integer('tanah_kering')->nullable();
            $table->integer('tambak_kolam')->nullable();
            $table->integer('rawa_rawa')->nullable();
            $table->integer('masjid')->nullable();
            $table->integer('musholla')->nullable();
            $table->integer('gereja')->nullable();
            $table->integer('pura')->nullable();
            $table->integer('wihara')->nullable();
            $table->integer('klenteng')->nullable();
            $table->integer('sarana_pendidikan')->nullable();
            $table->integer('sarana_kesehatan')->nullable();
            $table->integer('sarana_sosial')->nullable();
            $table->integer('lapangan_olahraga')->nullable();
            $table->integer('taman_rekreasi')->nullable();
            $table->integer('jalur_hijau')->nullable();
            $table->integer('pemakaman')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('monografi');
    }
}
