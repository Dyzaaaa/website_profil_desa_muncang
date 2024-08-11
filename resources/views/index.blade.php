<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Muncang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/path/to/local/flowbite.min.css" rel="stylesheet"> <!-- Gunakan versi lokal -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-gray-900">
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl mx-auto p-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold dark:text-white">Desa Muncang</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden md:block w-full md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col md:flex-row md:space-x-8">
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 px-3 text-gray-900 rounded md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700">Home</a>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="block py-2 px-3 text-gray-900 rounded md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700">Profil</button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="hidden absolute z-10 mt-2 w-44 bg-white divide-y divide-gray-100 rounded-lg shadow-lg dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                                <li>
                                    <a href="{{ route('map') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Peta Desa</a>
                                </li>
                                <li>
                                    <a href="{{ route('struktur') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Struktur Organisasi Desa</a>
                                </li>
                                <li>
                                    <a href="{{ route('monografi') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Monografi Desa</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" class="block py-2 px-3 text-gray-900 rounded md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('potensi') }}" class="block py-2 px-3 text-gray-900 rounded md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700">Galeri</a>
                    </li>
                    <li>
                        <a href="/login" class="block py-2 px-3 text-gray-900 rounded md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Hero Section Start -->
<section id="home" class="relative w-full h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('public/img/balai desa.jpg');">
    <!-- Overlay dengan opacity 50% -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    
    <!-- Konten hero -->
    <div class="container mx-auto relative z-10 flex items-center justify-center h-full">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold mb-6">Welcome to Desa Muncang</h1>
            <p class="text-lg mb-8">Explore the beauty and culture of our village.</p>
            <a href="#about" class="bg-primary text-white py-3 px-6 rounded-full hover:bg-black hover:text-primary transition duration-300">Learn More</a>
        </div>
    </div>
</section>
<!-- Hero Section End -->



  <!-- About Section Start -->
<section id="about" class="pt-36 pb-16 bg-slate-100">
    <div class="px-16">
        <div class="w-full">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">About</h4>
                <h2 class="font-semibold text-3xl mb-4 sm:text-4xl lg:text-5xl">Tentang Muncang</h2>
                <p class="font-semibold text-md text-secondary md:text-lg">Sebagian besar masyarakat bekerja
                    sebagai petani dan peternak di desa ini, namun masyarakat desa Muncang juga bekerja di
                    konveksi-konveksi yang ada.</p>
            </div>
        </div>

        <div class="w-full flex flex-wrap justify-center">
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <a href="{{ url('/news') }}">
                        <img src="https://raw.githubusercontent.com/Dyzaaaa/website-muncang/main/sdn2muncang.jpeg" alt="SDN 02 Desa Muncang" class="w-full">
                    </a>
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">SDN 02 Desa Muncang</h3>
                <p class="font-medium text-base text-secondary">Berikut merupakan Sekolah Dasar Negeri 02 Desa
                    Muncang Kecamatan Bodeh, Kabupaten Pemalang.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <a href="{{ url('/news') }}">
                        <img src="https://raw.githubusercontent.com/Dyzaaaa/website-muncang/main/pertanianmuncang.jpeg" alt="Pertanian Desa Muncang" class="w-full">
                    </a>
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Pertanian Desa Muncang</h3>
                <p class="font-medium text-base text-secondary">Sektor pertanian di desa Muncang sebagian besar didominasi oleh petani padi. Terdapat organisasi petani Gapoktan (Gabungan Kelompok Tani) yang masih aktif.</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

   <!-- Contact Section Start -->
<section id="contact" class="pt-36 pb-32 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-dark mb-4">Contact Us</h2>
            <p class="text-lg text-secondary">Reach out to us through the following channels.</p>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-start md:items-center">
            <!-- Desa Muncang Contact Details -->
            <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col h-full">
                    <h3 class="text-2xl font-semibold text-primary mb-4">Desa Muncang</h3>
                    <ul class="list-none space-y-4 flex-grow">
                        <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-base text-secondary"> Gg. Janoko, Dusun I, Muncang 52365</span>
                        </li>
                        <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-base text-secondary">(123) 456-7890</span>
                        </li>
                        <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>
                        <span class="text-base text-secondary">info@desamuncang.com</span>
                        </li>
                    </ul>
                </div>
            </div>
           <!-- Developer Contact Details -->
<div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col h-full">
        <h3 class="text-2xl font-semibold text-primary mb-4">Developer Contact</h3>
        <div class="flex flex-col space-y-4 flex-grow">
            <!-- Instagram Icon -->
            <a href="https://www.instagram.com/dyzasssa/" target="_blank" class="flex items-center text-base text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                <path d="M 16.5 5 C 10.159 5 5 10.159 5 16.5 L 5 31.5 C 5 37.841 10.159 43 16.5 43 L 31.5 43 C 37.841 43 43 37.841 43 31.5 L 43 16.5 C 43 10.159 37.841 5 31.5 5 L 16.5 5 z M 34 12 C 35.105 12 36 12.895 36 14 C 36 15.104 35.105 16 34 16 C 32.895 16 32 15.104 32 14 C 32 12.895 32.895 12 34 12 z M 24 14 C 29.514 14 34 18.486 34 24 C 34 29.514 29.514 34 24 34 C 18.486 34 14 29.514 14 24 C 14 18.486 18.486 14 24 14 z M 24 17 A 7 7 0 1 0 24 31 A 7 7 0 1 0 24 17 z"></path>
            </svg>
                <span>Instagram</span>
            </a>
            <!-- TikTok Icon -->
            <a href="https://www.tiktok.com/@dyzanisa" target="_blank" class="flex items-center text-base text-secondary">
                <svg width="24" height="24" fill="black" viewBox="0 0 24 24">
                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                </svg>
                <span>TikTok</span>
            </a>
            <!-- GitHub Icon -->
            <a href="https://github.com/Dyzaaaa" target="_blank" class="flex items-center text-base text-secondary">
                <svg width="24" height="24" fill="black" viewBox="0 0 24 24">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                </svg>
                <span>GitHub</span>
            </a>
        </div>
    </div>
</div>

    </div>
</section>
<!-- Contact Section End -->




    <!-- Client Section Start -->
<section id="clients" class=" py-10 sm:py-16 lg:py-24">
    <div class="px-16">
        <div class="w-full">
            <div class="mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Warga Muncang</h4>
                <h2 class="font-semibold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">Kata Mereka</h2>
                <p class="font-semibold text-md text-secondary md:text-lg">Kesan Pesan terhadap KKN Tim II Undip 2023/2024</p>
            </div>
        </div>

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 justify-center">
            <div class="grid max-w-xl grid-cols-1 mx-auto mt-8 text-center lg:max-w-full sm:mt-12 lg:mt-20 lg:grid-cols-3 gap-x-6 xl:gap-x-12 gap-y-6">
                <div class="overflow-hidden bg-white rounded-md shadow">
                    <div class="px-8 py-12">
                        <div class="relative w-24 h-24 mx-auto">
                            <img class="relative object-cover w-24 h-24 mx-auto rounded-full"
                                 src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/1/avatar-1.jpg"
                                 alt="Kades" />
                            <div class="absolute top-0 right-0 flex items-center justify-center bg-primary rounded-full w-7 h-7">
                                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <blockquote class="mt-7">
                            <p class="text-lg text-black">“Amet minim mollit non deserunt ullam co est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat”</p>
                        </blockquote>
                        <p class="text-base font-semibold text-black mt-9">Jenny Wilson</p>
                        <p class="mt-1 text-base text-gray-600">Project Manager at Microsoft</p>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded-md shadow">
                    <div class="px-8 py-12">
                        <div class="relative w-24 h-24 mx-auto">
                            <img class="relative object-cover w-24 h-24 mx-auto rounded-full"
                                 src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/1/avatar-2.jpg"
                                 alt="Person 2" />
                            <div class="absolute top-0 right-0 flex items-center justify-center bg-primary rounded-full w-7 h-7">
                                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <blockquote class="mt-7">
                            <p class="text-lg text-black">“Amet minim mollit non deserunt ullam co est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat”</p>
                        </blockquote>
                        <p class="text-base font-semibold text-black mt-9">Robert Fox</p>
                        <p class="mt-1 text-base text-gray-600">Founder at Brain.co</p>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded-md shadow">
                    <div class="px-8 py-12">
                        <div class="relative w-24 h-24 mx-auto">
                            <img class="relative object-cover w-24 h-24 mx-auto rounded-full"
                                 src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/1/avatar-3.jpg"
                                 alt="Person 3" />
                            <div class="absolute top-0 right-0 flex items-center justify-center bg-primary rounded-full w-7 h-7">
                                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <blockquote class="mt-7">
                            <p class="text-lg text-black">“Amet minim mollit non deserunt ullam co est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat”</p>
                        </blockquote>
                        <p class="text-base font-semibold text-black mt-9">Kristin Watson</p>
                        <p class="mt-1 text-base text-gray-600">UX Designer at Google</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->

<!-- Footer -->
    <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Desa Muncang</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li class="mr-6 md:mr-8">
            <a href="#about" class="hover:underline">About</a>
        </li>
        <li>
            <a href="#contact" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>

    
</body>
<script src="/path/to/local/flowbite.min.js"></script>
</html>
