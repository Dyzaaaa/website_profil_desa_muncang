@extends('admin.layouts.adminapp')

@section('content')
<div class="container">
    <h1>Detail Berita</h1>
    <a href="{{ route('beritas.index') }}" class="btn btn-primary">Kembali</a>
    <div class="card mt-2">
        <div class="card-body">
            <h3>{{ $berita->judul }}</h3>
            <p>{{ $berita->isi_berita }}</p>
            @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" width="300">
            @endif
            <p>Tanggal Upload: {{ $berita->tanggal_upload }}</p>
        </div>
    </div>
</div>
@endsection
