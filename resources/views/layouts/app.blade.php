<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    <!-- Styles -->
    @vite('resources/css/app.css')

    @stack('head')

    @livewireStyles
</head>

<body class="auth bg-gray-100">

    @if (!Request::is('login'))
        <x-navbar />
    @endif

    <main>
        @yield('content')
    </main>

    {{-- <x-footer/> --}}

    @vite('/node_modules/flowbite/dist/flowbite.js')

    @stack('script')

    @livewireScripts
</body>

</html>
