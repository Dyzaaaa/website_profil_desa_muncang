@extends('layouts.app')

@section('content')

<!-- News Section Start -->
<section id="news" class="pt-36 pb-16 bg-slate-100">
    <div class="px-16">
        <div class="w-full">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">News</h4>
                <h2 class="font-semibold text-3xl mb-4 sm:text-4xl lg:text-5xl">Berita Terbaru di Muncang</h2>
                <p class="font-semibold text-md text-secondary md:text-lg">Berita terkini dan update terbaru mengenai
                    berbagai kegiatan dan perkembangan di Desa Muncang.</p>
            </div>
        </div>

        <div class="w-full flex flex-wrap justify-center">
            @foreach ($beritas as $berita)
                <div class="mb-12 p-4 md:w-1/2 lg:w-1/3">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <a href="{{ route('beritas.show', $berita->id) }}">
                            @if ($berita->gambar)
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-64 object-cover">
                            @else
                                <img src="https://via.placeholder.com/600x400" alt="Placeholder" class="w-full h-64 object-cover">
                            @endif
                        </a>
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">{{ $berita->judul }}</h3>
                    <p class="font-medium text-base text-secondary">{{ Str::limit($berita->isi_berita, 100) }}</p>
                    <p class="text-sm text-gray-500 mt-2">{{ \Carbon\Carbon::parse($berita->tanggal_upload)->format('d M Y') }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- News Section End -->

@endsection
