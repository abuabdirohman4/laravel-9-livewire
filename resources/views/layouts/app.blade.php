<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
    
    @stack('head')
</head>

<body class="auth">

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>

    @livewireScripts

    @stack('script')
</body>

</html>
