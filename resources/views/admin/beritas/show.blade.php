@extends('layouts.app')

@section('content')

<section id="news-detail" class="pt-36 pb-16 mb-20 bg-slate-100">
    <div class="px-16">
        <div class="w-full max-w-4xl mx-auto">
            <!-- Gambar Berita -->
            <div class="rounded-md shadow-md overflow-hidden mb-8">
                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-96 object-cover">
                @else
                    <img src="https://via.placeholder.com/800x600" alt="Placeholder" class="w-full h-96 object-cover">
                @endif
            </div>

            <!-- Judul Berita -->
            <h1 class="font-semibold text-4xl text-dark mb-5">{{ $berita->judul }}</h1>

            <!-- Tanggal Upload -->
            <p class="text-sm text-gray-500 mb-5">{{ \Carbon\Carbon::parse($berita->tanggal_upload)->format('d M Y') }}</p>

            <!-- Isi Berita -->
            <div class="text-lg text-secondary leading-relaxed" style="text-align: justify;">
                {!! nl2br(e($berita->isi_berita)) !!}
            </div>
        </div>
    </div>
</section>

@endsection
