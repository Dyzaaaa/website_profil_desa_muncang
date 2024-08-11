<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('beritas', compact('beritas'));
    }

    public function news()
    {
        $beritas = Berita::all();
        return view('beritas', compact('beritas'));
    }

    public function create()
    {
        return view('admin.beritas.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi_berita' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imagePath = $image->getPathname();
            $imageSize = getimagesize($imagePath);

            if ($imageSize[0] <= $imageSize[1]) {
                return redirect()->back()->withErrors(['gambar' => 'Lebar gambar harus lebih besar dari tinggi (format landscape).']);
            }

            $path = $image->store('images', 'public');
        }

        Berita::create([
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'gambar' => $path,
        ]);

        return redirect()->route('beritas.index')->with('success', 'Berita created successfully.');
    }

    public function show(Berita $berita)
    {
        return view('admin.beritas.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('admin.beritas.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required',
            'isi_berita' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $berita->judul = $request->get('judul');
        $berita->isi_berita = $request->get('isi_berita');

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $image = $request->file('gambar');
            $path = $image->store('uploads', 'public');
            $berita->gambar = $path;
        }

        $berita->save();

        return redirect()->route('beritas.index')->with('success', 'Berita updated successfully');
    }

    public function destroy(Berita $berita)
    {
        // Hapus gambar jika ada
        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('beritas.index')->with('success', 'Berita deleted successfully');
    }
}
