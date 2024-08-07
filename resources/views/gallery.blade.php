@extends('layouts.app')

@section('content')

<div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="all">Semua Kegiatan</button>
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="nyadran">Nyadran</button>
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="agustus">17 Agustus</button>
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="pengajian">Pengajian</button>
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="sedekah">Sedekah Bumi</button>
</div>

<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    @foreach($galeris as $galeri)
        <div class="filter-item all {{ $galeri->kategori }}">
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/galeri/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}">
        </div>
    @endforeach
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".filter-btn");
        const items = document.querySelectorAll(".filter-item");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                const filter = this.getAttribute("data-filter");

                items.forEach(item => {
                    item.classList.remove("show");
                    if (item.classList.contains(filter) || filter === "all") {
                        item.classList.add("show");
                    }
                });
            });
        });

        // Initially show all items
        items.forEach(item => {
            item.classList.add("show");
        });
    });
</script>

@endsection
