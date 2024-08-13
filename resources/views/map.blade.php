@extends('layouts.app')

@section('content')

<div class="relative min-h-screen bg-gray-100">
    <!-- Carousel Section -->
    <div class="flex justify-center items-center pt-5 pb-16">
        <div id="gallery" class="relative w-full md:w-3/4 lg:w-2/3 h-[80vh]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative w-full h-full overflow-hidden rounded-lg">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('img/peta_fasilitas.pdf') }}" class="block w-full h-full object-contain" alt="Peta Fasilitas">
                    <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Fasilitas</div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/peta_titik_fasil.jpg') }}" class="block w-full h-full object-contain" alt="Peta Titik Fasilitas">
                    <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Titik Fasilitas</div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/peta_admin.png') }}" class="block w-full h-full object-contain" alt="Peta Admin">
                    <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Admin</div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/peta_layout.png') }}" class="block w-full h-full object-contain" alt="Peta Layout">
                    <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Layout</div>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-1/2 left-0 z-50 flex items-center justify-center h-10 w-10 cursor-pointer group focus:outline-none transform -translate-y-1/2 bg-black bg-opacity-50 text-white" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-full h-full rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-1/2 right-0 z-50 flex items-center justify-center h-10 w-10 cursor-pointer group focus:outline-none transform -translate-y-1/2 bg-black bg-opacity-50 text-white" data-carousel-next>
                <span class="inline-flex items-center justify-center w-full h-full rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- Flowbite JS -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.1/dist/flowbite.min.js"></script>
@endsection
