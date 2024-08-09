<?php

namespace App\Http\Controllers;

use App\Models\Monografi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MonografiController extends Controller
{
    // Menampilkan daftar monografi
    public function index()
    {
        $monografis = Monografi::all();
        return view('monografi.index', compact('monografis'));
    }

    // Menampilkan form untuk input data baru
    public function create()
    {
        return view('admin.monografi.create');
    }

    // Menyimpan data monografi baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'kepadatan_penduduk' => 'required|string|max:255',
            'jumlah_dusun' => 'required|integer',
            'jumlah_rw' => 'required|integer',
            'jumlah_rt' => 'required|integer',
            'jumlah_penduduk_laki_laki' => 'required|integer',
            'jumlah_penduduk_perempuan' => 'required|integer',
            'jumlah_penduduk_total' => 'required|integer',
            'belum_sekolah' => 'required|integer',
            'tidak_tamat_sd' => 'required|integer',
            'tamat_sd' => 'required|integer',
            'tamat_sltp' => 'required|integer',
            'tamat_slta' => 'required|integer',
            'tamat_akademi' => 'required|integer',
            'tamat_perguruan_tinggi' => 'required|integer',
            'buta_huruf' => 'required|integer',
            'petani_pemilik_tanah' => 'required|integer',
            'petani_penggarap_tanah' => 'required|integer',
            'buruh_tani' => 'required|integer',
            'nelayan' => 'required|integer',
            'pengusaha_sedang_besar' => 'required|integer',
            'buruh_bangunan' => 'required|integer',
            'buruh_perkebunan' => 'required|integer',
            'pedagang' => 'required|integer',
            'pengangkutan' => 'required|integer',
            'pns_tni_polisi' => 'required|integer',
            'pensiunan' => 'required|integer',
            'jumlah_kepala_keluarga' => 'required|integer',
            'jumlah_kepala_keluarga_laki_laki' => 'required|integer',
            'jumlah_kepala_keluarga_perempuan' => 'required|integer',
            'jumlah_islam' => 'required|integer',
            'jumlah_khatolik' => 'required|integer',
            'jumlah_protestan' => 'required|integer',
            'jumlah_hindu' => 'required|integer',
            'jumlah_budha' => 'required|integer',
            'dokter' => 'required|integer',
            'perawat' => 'required|integer',
            'bidan' => 'required|integer',
            'dokter_khitan' => 'required|integer',
            'dukun_bayi' => 'required|integer',
            'apotek_depot_obat' => 'required|integer',
            'tanah_sawah' => 'required|numeric',
            'tanah_kering' => 'required|numeric',
            'tambak_kolam' => 'required|numeric',
            'rawa_rawa' => 'required|numeric',
            'masjid' => 'required|integer',
            'musholla' => 'required|integer',
            'gereja' => 'required|integer',
            'pura' => 'required|integer',
            'wihara' => 'required|integer',
            'klenteng' => 'required|integer',
            'sarana_pendidikan' => 'required|integer',
            'sarana_kesehatan' => 'required|integer',
            'sarana_sosial' => 'required|integer',
            'lapangan_olahraga' => 'required|integer',
            'taman_rekreasi' => 'required|integer',
            'jalur_hijau' => 'required|integer',
            'pemakaman' => 'required|integer',
        ]);

        Monografi::create($request->all());

        return redirect()->route('monografi.index')->with('success', 'Data Monografi berhasil disimpan');
    }

    // Menampilkan data monografi berdasarkan id
    public function show($id)
    {
        $monografi = Monografi::findOrFail($id);
        return view('monografi.show', compact('monografi'));
    }

    // Menampilkan form edit untuk data monografi
    public function edit($id)
    {
        $monografi = Monografi::findOrFail($id);
        return view('monografi.edit', compact('monografi'));
    }

    // Memperbarui data monografi yang sudah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'kepadatan_penduduk' => 'required|string|max:255',
            'jumlah_dusun' => 'required|integer',
            'jumlah_rw' => 'required|integer',
            'jumlah_rt' => 'required|integer',
            'jumlah_penduduk_laki_laki' => 'required|integer',
            'jumlah_penduduk_perempuan' => 'required|integer',
            'jumlah_penduduk_total' => 'required|integer',
            'belum_sekolah' => 'required|integer',
            'tidak_tamat_sd' => 'required|integer',
            'tamat_sd' => 'required|integer',
            'tamat_sltp' => 'required|integer',
            'tamat_slta' => 'required|integer',
            'tamat_akademi' => 'required|integer',
            'tamat_perguruan_tinggi' => 'required|integer',
            'buta_huruf' => 'required|integer',
            'petani_pemilik_tanah' => 'required|integer',
            'petani_penggarap_tanah' => 'required|integer',
            'buruh_tani' => 'required|integer',
            'nelayan' => 'required|integer',
            'pengusaha_sedang_besar' => 'required|integer',
            'buruh_bangunan' => 'required|integer',
            'buruh_perkebunan' => 'required|integer',
            'pedagang' => 'required|integer',
            'pengangkutan' => 'required|integer',
            'pns_tni_polisi' => 'required|integer',
            'pensiunan' => 'required|integer',
            'jumlah_kepala_keluarga' => 'required|integer',
            'jumlah_kepala_keluarga_laki_laki' => 'required|integer',
            'jumlah_kepala_keluarga_perempuan' => 'required|integer',
            'jumlah_islam' => 'required|integer',
            'jumlah_khatolik' => 'required|integer',
            'jumlah_protestan' => 'required|integer',
            'jumlah_hindu' => 'required|integer',
            'jumlah_budha' => 'required|integer',
            'dokter' => 'required|integer',
            'perawat' => 'required|integer',
            'bidan' => 'required|integer',
            'dokter_khitan' => 'required|integer',
            'dukun_bayi' => 'required|integer',
            'apotek_depot_obat' => 'required|integer',
            'tanah_sawah' => 'required|numeric',
            'tanah_kering' => 'required|numeric',
            'tambak_kolam' => 'required|numeric',
            'rawa_rawa' => 'required|numeric',
            'masjid' => 'required|integer',
            'musholla' => 'required|integer',
            'gereja' => 'required|integer',
            'pura' => 'required|integer',
            'wihara' => 'required|integer',
            'klenteng' => 'required|integer',
            'sarana_pendidikan' => 'required|integer',
            'sarana_kesehatan' => 'required|integer',
            'sarana_sosial' => 'required|integer',
            'lapangan_olahraga' => 'required|integer',
            'taman_rekreasi' => 'required|integer',
            'jalur_hijau' => 'required|integer',
            'pemakaman' => 'required|integer',
        ]);

        $monografi = Monografi::findOrFail($id);
        $monografi->update($request->all());

        return redirect()->route('monografi.index')->with('success', 'Data Monografi berhasil diperbarui');
    }

    // Menghapus data monografi
    public function destroy($id)
    {
        $monografi = Monografi::findOrFail($id);
        $monografi->delete();

        return redirect()->route('monografi.index')->with('success', 'Data Monografi berhasil dihapus');
    }
}