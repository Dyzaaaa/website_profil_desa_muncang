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
<div id="default-tab-content pb-20 mb-20">
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="tani" role="tabpanel" aria-labelledby="tani-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Sektor pertanian di desa Muncang berjalan dan berkembang dengan baik dengan adanya <strong class="font-medium text-gray-800 dark:text-white">GAPOKTAN (Gabungan Kelompok Tani)</strong> yang terkoordinasi dengan baik. Produk utama meliputi padi, jagung, dan sayuran. Para petani di desa ini juga memanfaatkan teknologi pertanian modern dan metode pertanian organik untuk meningkatkan hasil panen.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="path_to_video/pertanian.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <img src="img/gapoktan1.png" alt="Pertanian 1" class="w-full h-auto rounded-lg">
            <img src="img/gapoktan2.png" alt="Pertanian 2" class="w-full h-auto rounded-lg">
            <img src="img/gapoktan3.png" alt="Pertanian 3" class="w-full h-auto rounded-lg">
            <img src="img/gapoktan4.png" alt="Pertanian 4" class="w-full h-auto rounded-lg">
            <img src="img/gapoktan5.png" alt="Pertanian 5" class="w-full h-auto rounded-lg">
            <img src="img/gapoktan6.png" alt="Pertanian 6" class="w-full h-auto rounded-lg">
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="ternak" role="tabpanel" aria-labelledby="ternak-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Peternakan di Desa Muncang meliputi pengelolaan hewan ternak seperti sapi, kambing, dan ayam. Peternak di desa ini menggunakan pakan alami dan teknik peternakan modern untuk memastikan kesehatan hewan dan kualitas produk.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="path_to_video/peternakan.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <img src="img/ternak1.jpg" alt="Peternakan 1" class="w-full h-auto rounded-lg">
            <img src="img/ternak2.jpg" alt="Peternakan 2" class="w-full h-auto rounded-lg">
            <img src="img/ternak3.jpg" alt="Peternakan 3" class="w-full h-auto rounded-lg">
            <img src="img/ternak4.jpg" alt="Peternakan 4" class="w-full h-auto rounded-lg">
            <img src="img/ternak5.jpg" alt="Peternakan 5" class="w-full h-auto rounded-lg">
            <img src="img/ternak6.jpg" alt="Peternakan 6" class="w-full h-auto rounded-lg">
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="konveksi" role="tabpanel" aria-labelledby="konveksi-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">Industri konveksi di Desa Muncang menghasilkan berbagai produk pakaian dan tekstil. Para pekerja di sektor ini terampil dalam menjahit dan desain, menghasilkan produk yang berkualitas tinggi dan berdaya saing.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="path_to_video/konveksi.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <img src="path_to_image/konveksi1.jpg" alt="Konveksi 1" class="w-full h-auto rounded-lg">
            <img src="path_to_image/konveksi2.jpg" alt="Konveksi 2" class="w-full h-auto rounded-lg">
            <img src="path_to_image/konveksi3.jpg" alt="Konveksi 3" class="w-full h-auto rounded-lg">
            <img src="path_to_image/konveksi4.jpg" alt="Konveksi 4" class="w-full h-auto rounded-lg">
            <img src="path_to_image/konveksi5.jpg" alt="Konveksi 5" class="w-full h-auto rounded-lg">
            <img src="path_to_image/konveksi6.jpg" alt="Konveksi 6" class="w-full h-auto rounded-lg">
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="roti" role="tabpanel" aria-labelledby="roti-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">UMKM Roti di Desa Muncang mencakup berbagai usaha kecil dan menengah, termasuk produksi makanan ringan, kerajinan tangan, dan jasa lainnya. UMKM ini berperan penting dalam perekonomian desa dan menyediakan lapangan kerja bagi penduduk setempat.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="path_to_video/umkm.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4 mt-20">
        <img src="img/roti3.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
            <img src="img/roti1.jpg" alt="UMKM 1" class="w-full h-auto rounded-lg">
            <img src="img/roti2.jpg" alt="UMKM 2" class="w-full h-auto rounded-lg">
            <img src="img/roti4.jpg" alt="UMKM 4" class="w-full h-auto rounded-lg">
            <img src="img/roti5.jpg" alt="UMKM 5" class="w-full h-auto rounded-lg">
            <img src="img/roti6.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
            <img src="img/roti7.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
            <img src="img/roti8.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
            <img src="img/roti9.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 mb-20" id="tempe" role="tabpanel" aria-labelledby="tempe-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">UMKM Tempe di Desa Muncang mencakup berbagai usaha kecil dan menengah, termasuk produksi makanan ringan, kerajinan tangan, dan jasa lainnya. UMKM ini berperan penting dalam perekonomian desa dan menyediakan lapangan kerja bagi penduduk setempat.</p>
        <!-- Tambahkan video -->
        <video controls class="w-full mt-4">
            <source src="path_to_video/umkm.mp4" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
        <!-- Galeri foto -->
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4 mt-20">
        <img src="img/roti3.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
            <img src="img/tempe1.jpg" alt="UMKM 1" class="w-full h-auto rounded-lg">
            <img src="img/tempe2.jpg" alt="UMKM 2" class="w-full h-auto rounded-lg">
            <img src="img/tempe4.jpg" alt="UMKM 4" class="w-full h-auto rounded-lg">
            <img src="img/tempe5.jpg" alt="UMKM 5" class="w-full h-auto rounded-lg">
            <img src="img/tempe6.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
            <img src="img/tempe7.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
            <img src="img/tempe8.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
            <img src="img/tempe9.jpg" alt="UMKM 3" class="w-full h-auto rounded-lg">
        </div>
    </div>
</div>

@endsection
