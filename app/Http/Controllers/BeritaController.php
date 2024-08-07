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
        $beritas = Berita::all(); // Mengambil semua data berita
        return view('beritas', compact('beritas')); // Mengirim data berita ke tampilan
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
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imagePath = $image->getPathname();
            $imageSize = getimagesize($imagePath);

            if ($imageSize[0] <= $imageSize[1]) {
                return redirect()->back()->withErrors(['gambar' => 'Lebar gambar harus lebih besar dari tinggi (format landscape).']);
            }

            $path = $image->store('gambar', 'public');
        } else {
            $path = null;
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

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.beritas.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi_berita' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $berita = Berita::find($id);
        $berita->judul = $request->get('judul');
        $berita->isi_berita = $request->get('isi_berita');

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imagePath = $image->store('uploads', 'public');
            $berita->gambar = $imagePath;
        }

        $berita->save();

        return redirect()->route('beritas.index')->with('success', 'Berita updated successfully');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->route('beritas.index')->with('success', 'Berita deleted successfully');
    }
}
