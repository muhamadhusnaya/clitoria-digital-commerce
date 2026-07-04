<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Clitoria Digital Commerce'))</title>
    @yield('meta')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="bg-background text-on-surface font-sans antialiased min-h-screen flex flex-col">
    <x-public-header />

    <!-- Main Content -->
    <main class="flex-grow pt-24 pb-20 md:pb-0">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <x-public-footer />

    <x-mobile-bottom-nav />

    <!-- WhatsApp CTA -->
    <x-whatsapp-cta />

    <!-- Scripts Stack -->
    @stack('scripts')
</body>
</html>
