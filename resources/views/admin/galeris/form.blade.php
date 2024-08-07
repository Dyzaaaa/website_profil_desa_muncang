@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-5">
    <h2 class="text-center text-2xl font-bold mb-4">Tambah Galeri</h2>
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white p-8 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="judul" class="block text-gray-700">Judul</label>
            <input type="text" name="judul" id="judul" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ old('judul') }}">
        </div>
        <div class="mb-4">
            <label for="kategori" class="block text-gray-700">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ old('kategori') }}">
        </div>
        <div class="mb-4">
            <label for="gambar" class="block text-gray-700">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="w-full p-2 border border-gray-300 rounded mt-1">
        </div>
        <div class="mb-4 text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah</button>
        </div>
    </form>
</div>

@endsection
