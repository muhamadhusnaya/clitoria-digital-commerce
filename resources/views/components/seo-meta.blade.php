@props([
    'title' => null,
    'description' => null,
    'keywords' => null,
    'image' => null,
])

@php
    $finalTitle = $title ?? get_setting('seo_meta_title', config('app.name', 'Laravel'));
    $finalDescription = $description ?? get_setting('seo_meta_description');
    $finalKeywords = $keywords ?? get_setting('seo_meta_keywords');
    $finalImage = $image ?? get_setting('seo_og_image');
@endphp

<title>{{ $finalTitle }}</title>

@if($finalDescription)
    <meta name="description" content="{{ $finalDescription }}">
    <meta property="og:description" content="{{ $finalDescription }}">
@endif

@if($finalKeywords)
    <meta name="keywords" content="{{ $finalKeywords }}">
@endif

<meta property="og:title" content="{{ $finalTitle }}">

@if($finalImage)
    <meta property="og:image" content="{{ asset('storage/' . $finalImage) }}">
@endif

<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $finalTitle }}">

@if($finalDescription)
    <meta name="twitter:description" content="{{ $finalDescription }}">
@endif

@if($finalImage)
    <meta name="twitter:image" content="{{ asset('storage/' . $finalImage) }}">
@endif
