@extends('layouts.app')

@section('content')

<div class="relative min-h-screen bg-gray-100">
    <!-- Carousel Section -->
    <div class="flex justify-center items-center pt-5 pb-16">
        <div id="gallery" class="relative w-full md:w-3/4 lg:w-2/3 h-[80vh]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative w-full h-full overflow-hidden rounded-lg">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="public/img/peta fasilitas.pdf" class="block w-full h-full object-contain" alt="Peta Fasilitas">
                    <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Fasilitas</div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="public/img/peta titik fasil.jpg" class="block w-full h-full object-contain" alt="Peta Titik Fasilitas">
                    <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Titik Fasilitas</div>
                </div>
                <!-- Item 3 -->
                <div class="rhidden duration-700 ease-in-out" data-carousel-item>
                    <img src="public/img/peta admin.png" class="block w-full h-full object-contain" alt="Peta Admin">
                    <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Admin</div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="public/img/peta layout.png" class="block w-full h-full object-contain" alt="Peta Layout">
                    <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Layout</div>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
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
<script>
  // Tidak perlu JavaScript tambahan karena Flowbite sudah menangani carousel
</script>
@endsection
