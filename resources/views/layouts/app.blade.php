<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <x-seo-meta />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-on-surface bg-background overflow-hidden" x-data="{ sidebarOpen: false }">
        <div class="flex h-screen overflow-hidden">
            
            <!-- Desktop Sidebar -->
            <aside class="hidden w-64 overflow-y-auto border-r border-outline-variant bg-surface-container-lowest lg:block flex-shrink-0">
                @include('layouts.sidebar')
            </aside>

            <!-- Mobile Sidebar Backdrop -->
            <div x-show="sidebarOpen" 
                 x-transition:enter="transition-opacity ease-linear duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-linear duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 z-20 bg-on-surface/50 lg:hidden" 
                 @click="sidebarOpen = false" 
                 style="display: none;"></div>

            <!-- Mobile Sidebar -->
            <aside x-show="sidebarOpen" 
                   x-transition:enter="transition ease-in-out duration-300 transform"
                   x-transition:enter-start="-translate-x-full"
                   x-transition:enter-end="translate-x-0"
                   x-transition:leave="transition ease-in-out duration-300 transform"
                   x-transition:leave-start="translate-x-0"
                   x-transition:leave-end="-translate-x-full"
                   class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto bg-surface-container-lowest lg:hidden shadow-xl"
                   style="display: none;">
                @include('layouts.sidebar')
            </aside>

            <!-- Main Content Area -->
            <div class="flex flex-col flex-1 overflow-hidden min-w-0">
                <!-- Topbar -->
                @include('layouts.topbar')
                
                <!-- Page Content -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-background">
                    @isset($header)
                        <header class="px-6 py-8">
                            <div class="max-w-7xl mx-auto flex items-center justify-between">
                                <h1 class="text-3xl font-bold tracking-tight text-on-surface">
                                    {{ $header }}
                                </h1>
                                @isset($headerActions)
                                    <div>
                                        {{ $headerActions }}
                                    </div>
                                @endisset
                            </div>
                        </header>
                    @endisset
                    
                    <div class="px-6 pb-12 max-w-7xl mx-auto">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
