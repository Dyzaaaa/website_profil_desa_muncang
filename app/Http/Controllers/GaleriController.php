<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('galeris', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'gambar' => 'required|file',
            'kategori' => 'required|string',
        ]);
        

        $imageName = time().'.'.$request->gambar->extension();  
        $request->gambar->move(public_path('images'), $imageName);

        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $imageName,
            'kategori' => $request->kategori ?? 'default_value', // Provide a default value if needed
        ]);
        

        return redirect()->route('admin.galeris.index')
                        ->with('success','Gambar berhasil ditambahkan.');
    }
}

