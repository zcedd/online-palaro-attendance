<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin&family=Tinos&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    <script src="https://kit.fontawesome.com/0bb69a1b42.js" crossorigin="anonymous"></script>

    @livewireStyles
</head>

<body class="font-sans antialiased min-vh-100">
    <x-banner />

    <div >
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
        </main>
    </div>

    <x-footer />

    <x-toast />
    @livewireScripts
</body>

</html>