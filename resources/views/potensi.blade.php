@extends('layouts.app')

@section('content')

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tani-tab" data-tabs-target="#tani" type="button" role="tab" aria-controls="tani" aria-selected="false">Pertanian</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ternak-tab" data-tabs-target="#ternak" type="button" role="tab" aria-controls="ternak" aria-selected="false">Peternakan Ayam</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="konveksi-tab" data-tabs-target="#konveksi" type="button" role="tab" aria-controls="Konveksi" aria-selected="false">Konveksi</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="roti-tab" data-tabs-target="#roti" type="button" role="tab" aria-controls="roti" aria-selected="false">UMKM Roti</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="tempe-tab" data-tabs-target="#tempe" type="button" role="tab" aria-controls="tempe" aria-selected="false">UMKM Tempe</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="kerupuk-tab" data-tabs-target="#kerupuk" type="button" role="tab" aria-controls="kerupuk" aria-selected="false">UMKM Kerupuk</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="tahu-tab" data-tabs-target="#tahu" type="button" role="tab" aria-controls="tahu" aria-selected="false">UMKM Tahu</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="komik-tab" data-tabs-target="#komik" type="button" role="tab" aria-controls="komik" aria-selected="false">Komik Parenting</button>
        </li>
    </ul>
</div>

<div id="default-tab-content" class="pb-20 mb-20">
    <!-- Tab Pertanian -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="tani" role="tabpanel" aria-labelledby="tani-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Sektor pertanian di desa Muncang berjalan dan berkembang dengan baik dengan adanya <strong class="font-medium text-gray-800 dark:text-white">GAPOKTAN (Gabungan Kelompok Tani)</strong> yang terkoordinasi dengan baik. Produk utamanya adalah padi. Para petani di desa ini juga memanfaatkan teknologi pertanian modern untuk meningkatkan hasil panen.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="public/vid/sawah.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="public/img/tani1.jpeg" alt="Pertanian 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tani2.jpg" alt="Pertanian 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tani3.jpeg" alt="Pertanian 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tani4.jpg" alt="Pertanian 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab Peternakan -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="ternak" role="tabpanel" aria-labelledby="ternak-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Peternakan di Desa Muncang meliputi pengelolaan hewan ternak ayam. Peternak di desa ini menggunakan pakan alami dan teknik peternakan modern untuk memastikan kesehatan hewan dan kualitas produk.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="public/vid/ternak.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="public/img/ternak1.JPG" alt="Peternakan 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/ternak2.JPG" alt="Peternakan 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/ternak3.JPG" alt="Peternakan 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/ternak4.JPG" alt="Peternakan 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/ternak5.JPG" alt="Peternakan 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/ternak6.JPG" alt="Peternakan 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab Konveksi -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="konveksi" role="tabpanel" aria-labelledby="konveksi-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Industri konveksi adalah sektor pengahsilan utama di Desa Muncang, hampir setiap rumah di desa Muncang memiliki seorang penjahit yang mengerjakan pesanan. Para pekerja di sektor ini terampil dalam menjahit, menghasilkan produk yang berkualitas tinggi.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full h-screen mt-4">
            <source src="public/vid/konveksivideo.MOV" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="public/img/konveksi1.jpg" alt="Konveksi 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/konveksi2.jpg" alt="Konveksi 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/konveksi3.jpg" alt="Konveksi 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/konveksi4.jpg" alt="Konveksi 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/konveksi5.jpg" alt="Konveksi 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab UMKM Roti -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="roti" role="tabpanel" aria-labelledby="roti-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">UMKM Roti di Desa Muncang adalah roti kenanga yang memproduksi roti secara massal dengan sistem pemesanan.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full h-screen mt-4">
            <source src="public/vid/roti.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="public/img/roti1.JPG" alt="UMKM 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/roti2.JPG" alt="UMKM 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/roti3.JPG" alt="UMKM 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/roti4.JPG" alt="UMKM 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/roti5.JPG" alt="UMKM 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/roti6.JPG" alt="UMKM 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/roti7.JPG" alt="UMKM 7" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/roti8.JPG" alt="UMKM 8" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/roti9.JPG" alt="UMKM 9" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab UMKM Tempe -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="tempe" role="tabpanel" aria-labelledby="tempe-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">UMKM Tempe di Desa Muncang masih menggunakan cara tradisional untuk pengelolaannya, namun dari segi kebersihan terjaga.</p>
        <!-- Galeri foto -->
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="public/img/tempe1.JPG" alt="UMKM 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tempe2.JPG" alt="UMKM 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tempe3.JPG" alt="UMKM 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tempe4.JPG" alt="UMKM 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tempe5.JPG" alt="UMKM 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tempe6.JPG" alt="UMKM 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tempe7.JPG" alt="UMKM 7" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tempe8.JPG" alt="UMKM 8" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tempe9.JPG" alt="UMKM 9" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab UMKM Kerupuk -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="kerupuk" role="tabpanel" aria-labelledby="kerupuk-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">UMKM Kerupuk di Desa Muncang masih menggunakan cara tradisional untuk pengelolaannya, namun dari segi kebersihan terjaga.</p>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk1.jpeg" alt="UMKM 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk2.jpeg" alt="UMKM 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk3.jpeg" alt="UMKM 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk4.jpeg" alt="UMKM 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk5.jpeg" alt="UMKM 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk6.jpeg" alt="UMKM 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk7.jpeg" alt="UMKM 7" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk8.jpeg" alt="UMKM 8" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk9.jpeg" alt="UMKM 9" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/kerupuk10.jpeg" alt="UMKM 10" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab UMKM Tahu -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="tahu" role="tabpanel" aria-labelledby="tahu-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">UMKM Tahu di Desa Muncang masih menggunakan cara tradisional untuk pengelolaannya, namun dari segi kebersihan terjaga.</p>
        <!-- Galeri foto -->
        <div class="grid grid-cols-3 md:grid-cols-5 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="public/img/tahu1.jpeg" alt="UMKM 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu2.jpeg" alt="UMKM 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu3.jpeg" alt="UMKM 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu4.jpeg" alt="UMKM 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu5.jpeg" alt="UMKM 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu6.jpeg" alt="UMKM 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu7.jpeg" alt="UMKM 7" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu8.jpeg" alt="UMKM 8" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu9.jpeg" alt="UMKM 9" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu10.jpeg" alt="UMKM 10" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu11.jpeg" alt="UMKM 11" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu12.jpeg" alt="UMKM 12" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu13.jpeg" alt="UMKM 13" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="public/img/tahu14.jpeg" alt="UMKM 14" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab Komik -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="komik" role="tabpanel" aria-labelledby="komik-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Komik Strip Parenting</p>
        <div id="custom-controls-gallery" class="relative w-full h-full" data-carousel="slide">
    <div class="carousel-wrapper">
         <div class="relative w-full h-full">
      <!-- Item 1 -->
      <div class="carousel-item">
        <img src="public/img/komik1.jpg" alt="Komik 1">
        <p class="carousel-caption">Komik Strip Parenting 1</p>
      </div>
      <!-- Item 2 -->
      <div class="carousel-item hidden">
        <img src="public/img/komik2.jpg" alt="Komik 2">
        <p class="carousel-caption">Komik Strip Parenting 2</p>
      </div>
      <!-- Item 3 -->
      <div class="carousel-item hidden">
        <img src="public/img/komik3.jpg" alt="Komik 3">
        <p class="carousel-caption">Komik Strip Parenting 3</p>
      </div>
       <!-- Item 4 -->
       <div class="carousel-item">
        <img src="public/img/komik4.jpg" alt="Komik 4">
        <p class="carousel-caption">Komik Strip Parenting 4</p>
      </div>
      <!-- Item 5 -->
      <div class="carousel-item hidden">
        <img src="public/img/komik5.jpg" alt="Komik 5">
        <p class="carousel-caption">Komik Strip Parenting 5</p>
      </div>
      <!-- Item 6 -->
      <div class="carousel-item hidden">
        <img src="public/img/komik6.jpg" alt="Komik 6">
        <p class="carousel-caption">Komik Strip Parenting 6</p>
      </div>
       <!-- Item 7 -->
       <div class="carousel-item">
        <img src="public/img/komik7.jpg" alt="Komik 7">
        <p class="carousel-caption">Komik Strip Parenting 7</p>
      </div>
      <!-- Item 8 -->
      <div class="carousel-item hidden">
        <img src="public/img/komik8.jpg" alt="Komik 8">
        <p class="carousel-caption">Komik Strip Parenting 8</p>
      </div>
      <!-- Item 9 -->
      <div class="carousel-item hidden">
        <img src="public/img/komik9.jpg" alt="Komik 9">
        <p class="carousel-caption">Komik Strip Parenting 9</p>
      </div>
      <!-- Item 10 -->
      <div class="carousel-item hidden">
        <img src="public/img/komik10.jpg" alt="Komik 10">
        <p class="carousel-caption">Komik Strip Parenting 10</p>
      </div>
    </div>

    <!-- Navigation buttons -->
    <div class="flex justify-center items-center pt-4">
    <button type="button" class="flex justify-center items-center me-4 carousel-button carousel-button-prev" id="prev">
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
      </svg>
      <span class="sr-only">Previous</span>
    </button>
    <button type="button" class="carousel-button carousel-button-next" id="next">
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
      </svg>
      <span class="sr-only">Next</span>
    </button>
  </div>

  <!-- Flowbite JS -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.1/dist/flowbite.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const prevButton = document.getElementById('prev');
      const nextButton = document.getElementById('next');
      const items = document.querySelectorAll('.carousel-item');
      let currentIndex = 0;

      function showItem(index) {
        items.forEach((item, i) => {
          item.classList.toggle('hidden', i !== index);
        });
      }

      prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        showItem(currentIndex);
      });

      nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % items.length;
        showItem(currentIndex);
      });

      showItem(currentIndex); // Initial display
    });
  </script>

</div>

@endsection
