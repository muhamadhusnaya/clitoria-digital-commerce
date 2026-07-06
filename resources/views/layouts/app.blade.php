<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clitoria') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <style>
        body {
            background-color: #fbf8ff;
            color: #151936;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="flex min-h-screen">
    
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Area -->
    <main class="flex-1 ml-64 min-h-screen">
        <!-- Topbar -->
        @include('layouts.topbar')

        <!-- Main Canvas -->
        <div class="pt-24 pb-12 px-6 space-y-8 max-w-[1280px] mx-auto">
            @isset($header)
                <!-- Page Header (Optional Fallback) -->
                <div class="mb-8">
                    <h2 class="text-3xl font-semibold text-[#151936]">{{ $header }}</h2>
                </div>
            @endisset

            {{ $slot }}
        </div>
    </main>

    @stack('scripts')
</body>
</html>
