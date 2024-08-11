@extends('admin.layouts.adminapp')

@section('content')
<div class="container max-w-lg mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Edit Berita</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="list-disc list-inside text-red-500">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="space-y-4">
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" id="judul" name="judul" value="{{ old('judul', $berita->judul) }}" required
                       class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
            </div>

            <div>
                <label for="isi_berita" class="block text-sm font-medium text-gray-700">Isi Berita</label>
                <textarea id="isi_berita" name="isi_berita" rows="4"
                          class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                          required>{{ old('isi_berita', $berita->isi_berita) }}</textarea>
            </div>

            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <div class="mt-1 flex items-center">
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-indigo-500" type="file" id="gambar" name="gambar">
                    @if ($berita->gambar)
                        <img src="{{ asset('storage/app/public/' . $berita->gambar) }}" alt="Gambar Berita" class="ml-4 h-10 w-10 rounded-full object-cover">
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Update</button>
        </div>
    </form>
</div>
@endsection
