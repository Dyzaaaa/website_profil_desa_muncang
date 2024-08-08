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
    </ul>
</div>

<div id="default-tab-content" class="pb-20 mb-20">
    <!-- Tab Pertanian -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="tani" role="tabpanel" aria-labelledby="tani-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Sektor pertanian di desa Muncang berjalan dan berkembang dengan baik dengan adanya <strong class="font-medium text-gray-800 dark:text-white">GAPOKTAN (Gabungan Kelompok Tani)</strong> yang terkoordinasi dengan baik. Produk utamanya adalah padi. Para petani di desa ini juga memanfaatkan teknologi pertanian modern untuk meningkatkan hasil panen.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="vid/sawah.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="img/tani1.jpeg" alt="Pertanian 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tani2.jpg" alt="Pertanian 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tani3.jpeg" alt="Pertanian 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tani4.jpg" alt="Pertanian 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab Peternakan -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="ternak" role="tabpanel" aria-labelledby="ternak-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Peternakan di Desa Muncang meliputi pengelolaan hewan ternak ayam. Peternak di desa ini menggunakan pakan alami dan teknik peternakan modern untuk memastikan kesehatan hewan dan kualitas produk.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="vid/ternak.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="img/ternak1.jpg" alt="Peternakan 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/ternak2.jpg" alt="Peternakan 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/ternak3.jpg" alt="Peternakan 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/ternak4.jpg" alt="Peternakan 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/ternak5.jpg" alt="Peternakan 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/ternak6.jpg" alt="Peternakan 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab Konveksi -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="konveksi" role="tabpanel" aria-labelledby="konveksi-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Industri konveksi adalah sektor pengahsilan utama di Desa Muncang, hampir setiap rumah di desa Muncang memiliki seorang penjahit yang mengerjakan pesanan. Para pekerja di sektor ini terampil dalam menjahit, menghasilkan produk yang berkualitas tinggi.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full h-screen mt-4">
            <source src="vid/konveksivideo.MOV" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="img/konveksi1.jpg" alt="Konveksi 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/konveksi2.jpg" alt="Konveksi 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/konveksi3.jpg" alt="Konveksi 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/konveksi4.jpg" alt="Konveksi 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/konveksi5.jpg" alt="Konveksi 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/konveksi6.jpg" alt="Konveksi 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab UMKM Roti -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="roti" role="tabpanel" aria-labelledby="roti-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">UMKM Roti di Desa Muncang adalah roti kenanga yang memproduksi roti secara massal dengan sistem pemesanan.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full h-screen mt-4">
            <source src="vid/roti.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="img/roti1.jpg" alt="UMKM 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/roti2.jpg" alt="UMKM 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/roti3.jpg" alt="UMKM 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/roti4.jpg" alt="UMKM 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/roti5.jpg" alt="UMKM 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/roti6.jpg" alt="UMKM 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/roti7.jpg" alt="UMKM 7" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/roti8.jpg" alt="UMKM 8" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/roti9.jpg" alt="UMKM 9" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Tab UMKM Tempe -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="tempe" role="tabpanel" aria-labelledby="tempe-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">UMKM Tempe di Desa Muncang masih menggunakan cara tradisional untuk pengelolaannya, namun dari segi kebersihan terjaga.</p>
        <!-- Galeri foto -->
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4 mt-4">
            <div class="relative w-full h-60">
                <img src="img/tempe1.jpg" alt="UMKM 1" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tempe2.jpg" alt="UMKM 2" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tempe3.jpg" alt="UMKM 3" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tempe4.jpg" alt="UMKM 4" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tempe5.jpg" alt="UMKM 5" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tempe6.jpg" alt="UMKM 6" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tempe7.jpg" alt="UMKM 7" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tempe8.jpg" alt="UMKM 8" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative w-full h-60">
                <img src="img/tempe9.jpg" alt="UMKM 9" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>
</div>

@endsection
