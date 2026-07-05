<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Gallery Management | Clitoria Botanical Wellness</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#cabeff",
                        "on-primary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-background": "#151936",
                        "on-secondary": "#ffffff",
                        "background": "#fbf8ff",
                        "outline": "#797584",
                        "error": "#ba1a1a",
                        "outline-variant": "#c9c4d5",
                        "surface-container-lowest": "#ffffff",
                        "error-container": "#ffdad6",
                        "surface-container": "#edecff",
                        "primary-fixed": "#e6deff",
                        "secondary-fixed-dim": "#cbbeff",
                        "secondary-fixed": "#e6deff",
                        "on-secondary-fixed": "#1d0061",
                        "surface-bright": "#fbf8ff",
                        "tertiary-fixed": "#b3f582",
                        "on-error": "#ffffff",
                        "surface-tint": "#604bbd",
                        "on-tertiary": "#ffffff",
                        "inverse-primary": "#cabeff",
                        "surface-variant": "#dfe0ff",
                        "surface": "#fbf8ff",
                        "on-surface-variant": "#484553",
                        "on-secondary-fixed-variant": "#4931a1",
                        "primary-container": "#5b46b8",
                        "on-tertiary-container": "#a2e373",
                        "on-primary-fixed-variant": "#4831a4",
                        "on-primary-fixed": "#1c0062",
                        "on-tertiary-fixed-variant": "#255100",
                        "surface-container-highest": "#dfe0ff",
                        "inverse-on-surface": "#f0efff",
                        "on-primary-container": "#d4caff",
                        "inverse-surface": "#2a2e4c",
                        "tertiary": "#224c00",
                        "on-surface": "#151936",
                        "secondary": "#614cba",
                        "on-tertiary-fixed": "#0b2000",
                        "surface-dim": "#d5d7fe",
                        "on-secondary-container": "#371b8f",
                        "tertiary-container": "#306600",
                        "tertiary-fixed-dim": "#98d869",
                        "surface-container-high": "#e6e6ff",
                        "primary": "#432b9f",
                        "surface-container-low": "#f4f2ff",
                        "secondary-container": "#a28dff"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "20px",
                        "base": "8px",
                        "section-gap": "120px",
                        "margin-desktop": "64px",
                        "container-max": "1280px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "label-caps": ["Inter"],
                        "headline-sm": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                        "headline-md": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                        "display-lg-mobile": ["36px", {"lineHeight": "42px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-sm": ["24px", {"lineHeight": "32px", "letterSpacing": "0", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .gallery-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(91, 70, 184, 0.1), 0 10px 10px -5px rgba(91, 70, 184, 0.04);
        }
        .glass-nav {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen">
<!-- SideNavBar (Persistent) -->
<aside class="fixed left-0 top-0 h-full w-64 z-40 bg-surface-container-low dark:bg-surface-container-lowest shadow-sm flex flex-col gap-2 p-4 border-r border-outline-variant/30">
<div class="flex flex-col mb-8 px-2">
<span class="font-headline-sm text-headline-sm font-bold text-primary dark:text-on-primary-container">Clitoria</span>
<span class="font-label-md text-label-md text-on-surface-variant">Botanical Wellness</span>
</div>
<nav class="flex flex-col gap-1 overflow-y-auto">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="{{ route('admin.dashboard') }}">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="{{ route('admin.heroes.index') }}">
<span class="material-symbols-outlined" data-icon="stars">stars</span>
<span class="font-label-md text-label-md">Hero</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="{{ route('admin.benefits.index') }}">
<span class="material-symbols-outlined" data-icon="health_and_safety">health_and_safety</span>
<span class="font-label-md text-label-md">Benefits</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="font-label-md text-label-md">Products</span>
</a>
<!-- Active State: Gallery -->
<a class="flex items-center gap-3 px-4 py-3 bg-secondary-fixed text-on-secondary-fixed-variant rounded-lg font-bold scale-[0.98] transition-transform" href="{{ route('admin.galleries.index') }}">
<span class="material-symbols-outlined" data-icon="collections">collections</span>
<span class="font-label-md text-label-md">Gallery</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="reviews">reviews</span>
<span class="font-label-md text-label-md">Testimonials</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="groups">groups</span>
<span class="font-label-md text-label-md">Team</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
<span class="font-label-md text-label-md">Sales</span>
</a>
<div class="mt-auto pt-4 border-t border-outline-variant/20">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-label-md text-label-md">Business Settings</span>
</a>
</div>
</nav>
</aside>
<!-- TopAppBar -->
<header class="fixed top-0 right-0 left-64 h-16 z-30 flex justify-between items-center px-gutter bg-surface/80 dark:bg-surface-dim/80 glass-nav border-b border-outline-variant/20 shadow-sm">
<div class="flex items-center flex-1 max-w-xl">
<div class="relative w-full group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors" data-icon="search">search</span>
<input class="w-full h-10 pl-10 pr-4 bg-surface-container-low border-none rounded-full focus:ring-2 focus:ring-primary/20 text-body-md placeholder:text-outline-variant" placeholder="Search galleries..." type="text"/>
</div>
</div>
<div class="flex items-center gap-2">
<button class="hover:bg-surface-container-high dark:hover:bg-surface-container-highest rounded-full p-2 transition-all hover:scale-105 active:scale-95 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="hover:bg-surface-container-high dark:hover:bg-surface-container-highest rounded-full p-2 transition-all hover:scale-105 active:scale-95 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<div class="h-8 w-[1px] bg-outline-variant/30 mx-2"></div>
<div class="flex items-center gap-3 pl-2">
<div class="text-right hidden lg:block">
<p class="font-label-md text-label-md text-on-surface">Admin User</p>
<p class="font-label-caps text-label-caps text-on-surface-variant">SUPER ADMIN</p>
</div>
<div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container ring-2 ring-background ring-offset-2">
<span class="material-symbols-outlined" data-icon="account_circle" style="font-variation-settings: 'FILL' 1;">account_circle</span>
</div>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-64 pt-16 min-h-screen">
<div class="max-w-[1280px] mx-auto px-gutter py-8">
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
<div>
<h1 class="font-headline-md text-headline-md text-on-surface mb-2">Galleries</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Manage and curate visual botanical collections for the storefront.</p>
</div>
<a href="{{ route('admin.galleries.create') }}" class="bg-primary-container text-on-primary-container px-6 py-3 rounded-full font-label-md text-label-md flex items-center gap-2 shadow-sm hover:shadow-lg hover:scale-[1.02] active:scale-[0.98] transition-all">
<span class="material-symbols-outlined" data-icon="upload">upload</span>
Upload New Gallery
</a>
</div>

@if (session('success'))
<div class="mb-6 bg-tertiary-fixed text-on-tertiary-fixed-variant p-4 rounded-xl font-medium">
    {{ session('success') }}
</div>
@endif

<!-- Visual Image Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
@forelse ($galleries as $gallery)
<!-- Gallery Card -->
<div class="gallery-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-outline-variant/10 flex flex-col group">
<div class="relative aspect-[4/5] overflow-hidden bg-secondary-fixed">
@if ($gallery->image)
    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"/>
@else
    <div class="w-full h-full flex items-center justify-center text-on-surface-variant">
        <span class="material-symbols-outlined text-5xl">image</span>
    </div>
@endif
<div class="absolute top-4 left-4">
@if ($gallery->is_published ?? true)
<span class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-label-caps font-semibold shadow-sm flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Published
</span>
@else
<span class="px-3 py-1 bg-surface-container-highest text-on-surface-variant rounded-full text-label-caps font-semibold shadow-sm flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-outline"></span> Draft
</span>
@endif
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">{{ $gallery->title }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4 line-clamp-2">{{ $gallery->description ?? '-' }}</p>
<div class="mt-auto flex items-center justify-between border-t border-outline-variant/10 pt-4">
<span class="font-label-caps text-label-caps text-outline uppercase tracking-wider">#{{ $gallery->id }}</span>
<div class="flex items-center gap-1">
<a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary-fixed/30 rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</a>
<form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this gallery?');">
@csrf
@method('DELETE')
<button type="submit" class="p-2 text-on-surface-variant hover:text-error hover:bg-error-container/30 rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</form>
</div>
</div>
</div>
</div>
@empty
<!-- Empty State -->
<div class="col-span-full flex flex-col items-center justify-center py-24 text-on-surface-variant">
<span class="material-symbols-outlined text-6xl mb-4 text-outline-variant">collections</span>
<p class="font-headline-sm text-headline-sm mb-2">No galleries yet</p>
<p class="font-body-md text-body-md mb-6 text-center max-w-sm">Start building your visual story by uploading your first gallery collection.</p>
<a href="{{ route('admin.galleries.create') }}" class="bg-primary-container text-on-primary-container px-6 py-3 rounded-full font-label-md text-label-md flex items-center gap-2 shadow-sm hover:shadow-lg hover:scale-[1.02] active:scale-[0.98] transition-all">
<span class="material-symbols-outlined">add</span> Create First Gallery
</a>
</div>
@endforelse
</div>

@if ($galleries instanceof \Illuminate\Pagination\LengthAwarePaginator && $galleries->hasMorePages())
<!-- Pagination / Load More -->
<div class="mt-12 flex justify-center">
<button class="group flex flex-col items-center gap-2 hover:translate-y-[-4px] transition-transform duration-300">
<div class="w-12 h-12 rounded-full border-2 border-primary-fixed flex items-center justify-center text-primary group-hover:bg-primary-fixed-dim/20 transition-colors">
<span class="material-symbols-outlined" data-icon="expand_more">expand_more</span>
</div>
<span class="font-label-md text-label-md text-on-surface-variant">Load More Galleries</span>
</button>
</div>
@endif

</div>
</main>
<!-- Lightweight Micro-interactions -->
<script>
        document.querySelectorAll('.gallery-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Potential for dynamic JS-driven shadow adjustments or sound effects
            });
        });

        // Search Bar Focus Effect
        const searchInput = document.querySelector('input[type="text"]');
        const searchIcon = document.querySelector('.material-symbols-outlined[data-icon="search"]');
        
        searchInput.addEventListener('focus', () => {
            searchIcon.style.fontVariationSettings = "'FILL' 1";
        });
        
        searchInput.addEventListener('blur', () => {
            searchIcon.style.fontVariationSettings = "'FILL' 0";
        });
    </script>
</body></html>
