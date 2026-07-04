@props([
    'variant' => 'default', // default (white), primary (gradient), glass (transparent)
    'padding' => 'md',
    'shadow' => 'soft', // soft, premium, none
])

@php
    $baseClasses = 'rounded-md transition-all duration-300';
    
    $paddingClasses = [
        'none' => 'p-0',
        'sm' => 'p-4',
        'md' => 'p-6',
        'lg' => 'p-8',
    ][$padding];

    $shadowClasses = [
        'soft' => 'shadow-soft-shadow hover:shadow-xl hover:-translate-y-1',
        'premium' => 'shadow-premium hover:-translate-y-1',
        'none' => '',
    ][$shadow];

    $variantClasses = [
        'default' => 'bg-surface-container-lowest border border-outline-variant',
        'primary' => 'bg-gradient-to-br from-surface to-surface-container',
        'glass' => 'glass-effect',
        'flat' => 'bg-surface-container-low',
    ][$variant];

    $classes = $baseClasses . ' ' . $paddingClasses . ' ' . $shadowClasses . ' ' . $variantClasses;
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
