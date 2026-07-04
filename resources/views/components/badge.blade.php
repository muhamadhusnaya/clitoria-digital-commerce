@props([
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold uppercase tracking-wider rounded-full';
    
    $sizeClasses = [
        'sm' => 'px-2 py-0.5 text-[10px]',
        'md' => 'px-2.5 py-1 text-xs',
        'lg' => 'px-3 py-1.5 text-sm',
    ][$size];

    $variantClasses = [
        'primary' => 'bg-primary-container text-white',
        'secondary' => 'bg-surface-container-high text-on-surface-variant',
        'tertiary' => 'bg-tertiary-fixed text-tertiary',
        'error' => 'bg-error-container text-error',
        'organic' => 'bg-tertiary-container text-white',
    ][$variant];

    $classes = $baseClasses . ' ' . $sizeClasses . ' ' . $variantClasses;
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
