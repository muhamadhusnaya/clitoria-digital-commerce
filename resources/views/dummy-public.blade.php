@extends('layouts.public')

@section('title', 'Dummy Public Page')

@section('content')
    <div class="py-16 max-w-[1280px] mx-auto px-5 md:px-16" x-data="{ open: false }">
        <div class="bg-surface-container-low rounded-xl p-8 soft-shadow text-center">
            <h1 class="font-bold text-4xl text-on-surface mb-4">Welcome to Clitoria</h1>
            <p class="text-on-surface-variant text-lg mb-8">This is a dummy page to test the public master layout.</p>
            
            <button @click="open = !open" class="bg-primary hover:bg-primary-container text-white px-6 py-3 rounded-full font-medium transition-colors">
                Test Alpine.js
            </button>
            
            <div x-show="open" x-transition class="mt-6 p-4 bg-tertiary-container rounded-md text-tertiary font-medium">
                Alpine.js is working correctly!
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="bg-surface-container-highest py-8 mt-auto">
        <div class="max-w-[1280px] mx-auto px-5 md:px-16 text-center text-on-surface-variant text-sm">
            &copy; {{ date('Y') }} Clitoria Digital Commerce. All rights reserved.
        </div>
    </footer>
@endsection
