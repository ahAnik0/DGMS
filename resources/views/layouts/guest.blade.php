<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DGMS-ADMIN</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased" style="background-color: #111827;">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900"
        style="background-color: #111827;">
        <div>

            <img src="{{ asset('front_end/assets') }}/images/bgms/logo.png" alt=""
                class="w-35 h-25 fill-current text-gray-500" style="padding-left: 65px;">
            {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
            <h1 style="color: #BDAB7B;font-size: x-large;">DGMS WEBSITE MANAGMENT</h1>

        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

<script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

    // Disable F12 key and Ctrl+Shift+I combination
    document.onkeydown = function(e) {
        if (
            (e.which == 123) ||
            ((e.ctrlKey || e.metaKey) && (e.shiftKey) && (e.keyCode == 73))
        ) {
            e.preventDefault();
        }
    };
</script>

</html>
