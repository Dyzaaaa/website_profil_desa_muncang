@extends('layouts.app')

@section('content')
<!-- Profile Header -->
<header class="bg-cover bg-center h-64" style="background-image: url('https://source.unsplash.com/1600x900/?village');">
    <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold">Profil Desa Muncang</h1>
        </div>
    </div>
</header>

<!-- Profile Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Tentang Desa Muncang</h2>
            <p class="text-lg text-gray-700">Desa Muncang adalah sebuah desa yang terletak di wilayah yang indah dengan pemandangan alam yang menakjubkan. Desa ini memiliki budaya yang kaya dan sejarah yang panjang. Masyarakat desa ini terkenal dengan keramahannya dan tradisi yang mereka lestarikan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Sejarah -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">Sejarah</h3>
                <p class="text-gray-600">Desa Muncang memiliki sejarah yang panjang dan kaya. Desa ini berdiri sejak zaman kolonial dan telah melalui berbagai perubahan signifikan hingga menjadi desa yang dikenal saat ini. Sejarah desa ini dipenuhi dengan kisah perjuangan dan perkembangan yang menarik untuk diketahui.</p>
            </div>

            <!-- Budaya -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">Budaya</h3>
                <p class="text-gray-600">Budaya di Desa Muncang sangat beragam dan unik. Masyarakat desa ini sangat menjunjung tinggi adat istiadat dan tradisi yang diwariskan dari generasi ke generasi. Berbagai upacara adat, kesenian, dan festival budaya secara rutin diadakan untuk menjaga dan merayakan warisan budaya yang ada.</p>
            </div>

            <!-- Geografi -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">Geografi</h3>
                <p class="text-gray-600">Desa Muncang terletak di wilayah dengan pemandangan alam yang menakjubkan. Dikelilingi oleh perbukitan hijau dan sungai yang jernih, desa ini menawarkan keindahan alam yang luar biasa. Letaknya yang strategis menjadikannya tempat yang ideal untuk kegiatan pertanian dan pariwisata alam.</p>
            </div>

            <!-- Ekonomi -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">Ekonomi</h3>
                <p class="text-gray-600">Perekonomian Desa Muncang didominasi oleh sektor pertanian dan pariwisata. Masyarakat desa ini bekerja keras dalam bidang pertanian dengan menghasilkan berbagai produk unggulan seperti padi, sayuran, dan buah-buahan. Selain itu, pariwisata alam juga menjadi sumber penghasilan penting bagi desa ini.</p>
            </div>
        </div>
    </div>
</section>
@endsection
