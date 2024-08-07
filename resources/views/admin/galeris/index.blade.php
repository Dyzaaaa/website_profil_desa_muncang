@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Galeri</h1>
    <a href="{{ route('galeri.create') }}" class="btn btn-primary">Tambah Gambar</a>
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galeris as $galeri)
            <tr>
                <td>{{ $galeri->judul }}</td>
                <td><img src="{{ asset('storage/galeri/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" width="100"></td>
                <td>
                    <a href="{{ route('galeri.edit', $galeri) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('galeri.destroy', $galeri) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
