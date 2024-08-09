<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login</title>
</head>
<div class="flex">
    <button id="theme-toggle" type="button"
        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>
</div>

<body class="text-center bg-gray-50 dark:bg-gray-900">
    <section id="#">
        <div class="align-content-center px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 mt-4 mb-12">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-gray-700 dark:text-gray-200 sm:text-4xl lg:text-5xl">
                    Selamat Datang Admin!
                </h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-700 dark:text-gray-50 ">Silakan
                    masuk</p>
            </div>
            <div class="max-w-md mx-auto mt-4 md:mt-8">
                <div
                    class="overflow-hidden bg-white rounded-md shadow-md bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-500 rounded-lg">
                    <div class="px-4 py-6 sm:px-8 sm:py-7">
                        @if ($errors->any())
                            <div id="floating-alert" class="fixed bottom-0 right-0 z-50 mr-4">
                                <div class="alert alert-success">
                                    <div id="alert-1"
                                        class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg dark:bg-gray-700 dark:text-red-400 border border-red-800">
                                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                        <button type="button"
                                            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-transparent dark:text-red-400 dark:hover:bg-gray-600"
                                            data-dismiss-target="#alert-1" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var floatingAlert = document.getElementById("floating-alert");
                                    var alert1 = document.getElementById("alert-1");

                                    alert1.addEventListener("click", function() {
                                        floatingAlert.style.display = "none";
                                    });
                                });
                            </script>
                        @endif
                        <form action="" method="POST">
                            @csrf
                            <div class="space">
                                    <!-- Add your logo path -->
                                    <h1 class="mt-4 text-2xl font-bold text-gray-500">Web Profil 
                                    </h1>
                                    <h1 class="mt-0 text-2xl font-bold text-gray-500">Desa Muncang
                                    </h1>
                                </div>

                                <!-- Email Field -->
                                <div>
                                    <label for="username"
                                        class="block text-sm font-medium text-gray-400 flex items-center justify-between">Username</label>
                                    <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" value="{{ old('username') }}" name="username"
                                            placeholder="Masukkan Username Anda"
                                            class="w-full py-4 pl-10 pr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-slate-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                    </div>
                                </div>

                                <!-- Password Field -->
                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="password"
                                            class="block text-sm font-medium text-gray-400">Password</label>
                                        {{-- <a href="#" title="" class="text-sm font-medium text-orange-500 transition-all duration-200 hover:text-orange-600 focus:text-orange-600 hover:underline">Forgot password?</a> --}}
                                    </div>
                                    <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                            </svg>

                                        </div>
                                        <input type="password" name="password" placeholder="Masukkan password anda"
                                            class="block w-full py-4 pl-10 pr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-slate-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-slate-500 dark:focus:ring-slate-500 dark:focus:border-slate-500 w-full" />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button name="submit" type="submit"
                                        class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700 mt-4">
                                        Login
                                    </button>
                                </div>
                                <div class="items-center justify-center">
                                    <p class="mt-5 text-muted text-gray-700 dark:text-gray-100">&copy; KKN TIM II
                                        UNIVERSITAS DIPONEGORO 2024</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- <main class="form-signin">
        <form action="" method="POST">
            @csrf
            <img class="mb-4" src="/img/Kabupaten_Pemalang.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Silahkan masuk</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-floating">
                <input type="text" class="form-control" name='username' id="floatingInput"
                    placeholder="name@example.com" value="{{ old('username') }}">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name='password' id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
            <p class="mt-5 mb-3 text-muted">&copy; KKN TIM II UNIVERSITAS DIPONEGORO 2024</p>
        </form>
    </main> --}}



</body>

</html>