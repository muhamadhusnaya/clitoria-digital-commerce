@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
    'href' => null,
    'fullWidth' => false,
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed';
    
    // Public main buttons use rounded-full (pill shape). Admin uses rounded-md/rounded-xl. We'll default to rounded-full for public.
    $shapeClass = 'rounded-full';

    $sizeClasses = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-base',
        'lg' => 'px-8 py-4 text-lg',
    ][$size];

    $variantClasses = [
        'primary' => 'bg-primary text-white hover:bg-primary-container focus:ring-primary',
        'secondary' => 'bg-secondary-container text-on-surface hover:bg-secondary focus:ring-secondary',
        'outline' => 'bg-transparent border border-outline text-on-surface hover:border-primary hover:text-primary focus:ring-primary',
        'ghost' => 'bg-transparent text-on-surface hover:bg-surface-container-high focus:ring-primary',
        'error' => 'bg-error text-white hover:bg-red-800 focus:ring-error',
    ][$variant];

    $classes = $baseClasses . ' ' . $shapeClass . ' ' . $sizeClasses . ' ' . $variantClasses . ($fullWidth ? ' w-full' : '');
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
