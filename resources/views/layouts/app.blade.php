<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Muncang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
    <div class="max-w-screen-xl mx-auto p-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold dark:text-white">Desa Muncang</span>
        </a>
        <button type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden md:block w-full md:w-auto" id="navbar-default">
            <ul class="flex flex-col md:flex-row md:space-x-8">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 px-3 text-gray-900 rounded md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700">Home</a>
                </li>
                <li class="relative group">
                    <button class="block py-2 px-3 text-gray-900 rounded md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700">Profil</button>
                    <div class="absolute hidden group-hover:block bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-400 mt-1 rounded-lg shadow-lg">
                        <ul class="py-2 text-sm">
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



    <!-- Content -->
    <div class="container mx-auto mt-auto border-0">
    @yield('content')
</div>



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

</html>
