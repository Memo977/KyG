<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido a KyG</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-900 text-white">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="absolute top-6 right-6 space-x-4">
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
            @endif
            @endif
        </div>

        <div class="text-center">
            <img src="{{ asset('images/logo-kyg.png') }}" alt="KyG Logo"
                class="mx-auto mb-10 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl w-full">
            <h1 class="text-3xl font-bold mb-4">Bienvenido a KyG</h1>
            <p class="text-lg text-gray-400">Gestiona tus publicaciones de manera fácil y rápida</p>
        </div>
    </div>
</body>

</html>