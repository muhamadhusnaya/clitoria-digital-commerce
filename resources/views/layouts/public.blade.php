<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', get_setting('seo_meta_title') ?: config('app.name', 'Clitoria Digital Commerce'))</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    
    <!-- SEO & Social Meta Tags -->
    @if(get_setting('seo_meta_description'))
    <meta name="description" content="{{ get_setting('seo_meta_description') }}">
    <meta property="og:description" content="{{ get_setting('seo_meta_description') }}">
    @endif
    
    @if(get_setting('seo_meta_keywords'))
    <meta name="keywords" content="{{ get_setting('seo_meta_keywords') }}">
    @endif
    
    <meta property="og:title" content="@yield('title', get_setting('seo_meta_title') ?: config('app.name'))">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    @if(get_setting('seo_og_image'))
    <meta property="og:image" content="{{ Storage::url(get_setting('seo_og_image')) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ Storage::url(get_setting('seo_og_image')) }}">
    @endif

    @yield('meta')
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
