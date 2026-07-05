<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Clitoria | Benefits Management</title>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface": "#151936",
                    "primary-fixed": "#e6deff",
                    "primary": "#432b9f",
                    "on-primary-fixed-variant": "#4831a4",
                    "error": "#ba1a1a",
                    "on-error": "#ffffff",
                    "inverse-on-surface": "#f0efff",
                    "error-container": "#ffdad6",
                    "secondary-container": "#a28dff",
                    "primary-fixed-dim": "#cabeff",
                    "surface": "#fbf8ff",
                    "surface-container-low": "#f4f2ff",
                    "surface-bright": "#fbf8ff",
                    "primary-container": "#5b46b8",
                    "secondary": "#614cba",
                    "on-secondary-fixed": "#1d0061",
                    "on-primary": "#ffffff",
                    "tertiary": "#224c00",
                    "inverse-primary": "#cabeff",
                    "surface-container": "#edecff",
                    "on-error-container": "#93000a",
                    "secondary-fixed": "#e6deff",
                    "on-secondary": "#ffffff",
                    "surface-container-high": "#e6e6ff",
                    "outline-variant": "#c9c4d5",
                    "tertiary-container": "#306600",
                    "surface-container-lowest": "#ffffff",
                    "surface-tint": "#604bbd",
                    "on-secondary-fixed-variant": "#4931a1",
                    "surface-dim": "#d5d7fe",
                    "outline": "#797584",
                    "tertiary-fixed-dim": "#98d869",
                    "on-secondary-fixed": "#1d0061",
                    "surface-container-highest": "#dfe0ff",
                    "on-background": "#151936",
                    "surface-variant": "#dfe0ff",
                    "on-tertiary-fixed-variant": "#255100",
                    "on-primary-container": "#d4caff",
                    "on-secondary-container": "#371b8f",
                    "on-primary-fixed": "#1c0062",
                    "inverse-surface": "#2a2e4c",
                    "tertiary-fixed": "#b3f582",
                    "on-tertiary-container": "#a2e373",
                    "background": "#fbf8ff",
                    "secondary-fixed-dim": "#cbbeff",
                    "on-tertiary": "#ffffff",
                    "on-surface-variant": "#484553"
            },
            "borderRadius": {
                    "DEFAULT": "1rem",
                    "lg": "2rem",
                    "xl": "3rem",
                    "full": "9999px"
            },
            "spacing": {
                    "container-max": "1280px",
                    "gutter": "24px",
                    "margin-mobile": "20px",
                    "margin-desktop": "64px",
                    "section-gap": "120px",
                    "base": "8px"
            },
            "fontFamily": {
                    "headline-md": ["Inter"],
                    "display-lg": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-sm": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "label-caps": ["Inter"]
            },
            "fontSize": {
                    "headline-md": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                    "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "letterSpacing": "0", "fontWeight": "600"}],
                    "display-lg-mobile": ["36px", {"lineHeight": "42px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #F8F9FC;
            font-family: 'Inter', sans-serif;
            color: #151936;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-header {
            background: rgba(251, 248, 255, 0.8);
            backdrop-filter: blur(20px);
        }
        .ambient-shadow {
            box-shadow: 0 10px 30px -5px rgba(31, 35, 64, 0.04);
        }
        .pill-shape {
            border-radius: 9999px;
        }
    </style>
</head>
<body class="overflow-x-hidden">
<!-- SideNavBar (Shared Component) -->
<aside class="fixed left-0 top-0 h-full w-64 z-40 bg-surface-container-low dark:bg-surface-container-lowest shadow-sm flex flex-col gap-2 p-4 border-r border-outline-variant/30">
<div class="flex items-center gap-3 px-2 mb-8">
<div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center text-white">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">eco</span>
</div>
<div>
<h1 class="font-headline-sm text-headline-sm font-bold text-primary dark:text-on-primary-container leading-none">Clitoria</h1>
<p class="font-label-md text-label-md text-on-surface-variant opacity-70">Botanical Wellness</p>
</div>
</div>
<nav class="flex-1 flex flex-col gap-1">
<!-- Dashboard -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<!-- Hero -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">stars</span>
<span class="font-label-md text-label-md">Hero</span>
</a>
<!-- Benefits (ACTIVE) -->
<a class="flex items-center gap-3 px-4 py-3 bg-secondary-fixed text-on-secondary-fixed-variant rounded-lg font-bold scale-[0.98] transition-transform" href="#">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
<span class="font-label-md text-label-md">Benefits</span>
</a>
<!-- Products -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">shopping_bag</span>
<span class="font-label-md text-label-md">Products</span>
</a>
<!-- Product Pricing -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">payments</span>
<span class="font-label-md text-label-md">Product Pricing</span>
</a>
<!-- Gallery -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">collections</span>
<span class="font-label-md text-label-md">Gallery</span>
</a>
<!-- Testimonials -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">reviews</span>
<span class="font-label-md text-label-md">Testimonials</span>
</a>
<div class="my-4 border-t border-outline-variant/20 mx-4"></div>
<!-- Team -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">groups</span>
<span class="font-label-md text-label-md">Team</span>
</a>
<!-- Sales -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">monitoring</span>
<span class="font-label-md text-label-md">Sales</span>
</a>
<!-- Business Settings -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined text-[20px]">settings</span>
<span class="font-label-md text-label-md">Business Settings</span>
</a>
</nav>
<div class="p-4 bg-surface-container rounded-2xl flex items-center gap-3 mt-auto">
<div class="w-10 h-10 rounded-full bg-surface-dim overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Professional studio portrait of an administrative manager for a luxury botanical brand, soft natural lighting, clean high-key background, wearing minimalist professional attire, serene and reliable expression, Inter typography aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzonlsef9GCvFQrpUH4V4oHT9FZj0NJi8OeWaJs3o584zOOXDVB5xD0VuyTNoIMvO4p04aefw8Dgmjw8vhHlRJOMSZLCItKismCpOu8Zpo65QiipCemKhwRGITMhhYcgLuh4-Yiaak8Wnu1CwQfrvWgiLC7DLQOlYimLqRus4Nd16KALmnxmGt8uabvhX7nxEiEQnSQLzJBNEjYpGdQTO15Xd2KWZVCyZVVb521oNaTLH279fyPI-lzfJClw8fiyTKqq8bhglQUw"/>
</div>
<div class="overflow-hidden">
<p class="font-label-md text-label-md font-bold truncate">Admin Profile</p>
<p class="text-[10px] uppercase tracking-wider text-on-surface-variant opacity-60">Manager</p>
</div>
</div>
</aside>
<!-- Main Content Wrapper -->
<main class="ml-64 min-h-screen pb-20">
<!-- TopAppBar (Shared Component Implementation) -->
<header class="fixed top-0 right-0 left-64 h-16 z-30 flex justify-between items-center px-8 w-full glass-header border-b border-outline-variant/10 shadow-sm">
<div class="flex items-center gap-4 flex-1">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-[20px]">search</span>
<input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search benefits..." type="text"/>
</div>
</div>
<div class="flex items-center gap-2">
<button class="hover:bg-surface-container-high rounded-full p-2 transition-colors active:scale-95">
<span class="material-symbols-outlined text-on-surface-variant">notifications</span>
</button>
<button class="hover:bg-surface-container-high rounded-full p-2 transition-colors active:scale-95">
<span class="material-symbols-outlined text-on-surface-variant">help</span>
</button>
<button class="hover:bg-surface-container-high rounded-full p-2 transition-colors active:scale-95">
<span class="material-symbols-outlined text-on-surface-variant">account_circle</span>
</button>
</div>
</header>
<!-- Page Canvas -->
<div class="pt-24 px-12 max-w-container-max mx-auto">
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
<div class="space-y-2">
<h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Benefits Management</h2>
<p class="font-body-md text-body-md text-on-surface-variant/70 max-w-2xl">
                        Curate the core value propositions that define the Clitoria experience. 
                        Adjust how these organic advantages are presented to your elite clientele.
                    </p>
</div>
<button class="bg-primary hover:bg-primary-container text-white px-8 py-4 pill-shape font-label-md text-label-md flex items-center gap-2 shadow-lg shadow-primary/20 transition-all hover:scale-[1.02] active:scale-[0.98]">
<span class="material-symbols-outlined text-[20px]">add</span>
                    Add New Benefit
                </button>
</div>
<!-- Bento Stats Row (Optional High-End UI) -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
<div class="bg-white p-6 rounded-2xl ambient-shadow flex flex-col gap-1 border border-outline-variant/10">
<span class="text-on-surface-variant font-label-caps uppercase text-[11px] tracking-widest">Total Benefits</span>
<span class="text-3xl font-bold text-on-surface">12</span>
</div>
<div class="bg-white p-6 rounded-2xl ambient-shadow flex flex-col gap-1 border border-outline-variant/10">
<span class="text-on-surface-variant font-label-caps uppercase text-[11px] tracking-widest">Active Site</span>
<span class="text-3xl font-bold text-tertiary-container">8</span>
</div>
<div class="bg-white p-6 rounded-2xl ambient-shadow flex flex-col gap-1 border border-outline-variant/10">
<span class="text-on-surface-variant font-label-caps uppercase text-[11px] tracking-widest">Pending Review</span>
<span class="text-3xl font-bold text-secondary">4</span>
</div>
<div class="bg-secondary-fixed p-6 rounded-2xl ambient-shadow flex items-center justify-center border border-primary/10">
<div class="text-center">
<span class="material-symbols-outlined text-primary text-4xl">energy_savings_leaf</span>
<p class="font-label-md text-primary mt-1">Organic Health Focus</p>
</div>
</div>
</div>
<!-- Data Table Card -->
<div class="bg-white rounded-[24px] ambient-shadow border border-outline-variant/10 overflow-hidden">
<div class="px-8 py-6 border-b border-outline-variant/10 flex items-center justify-between bg-surface-container-lowest/50">
<h3 class="font-headline-sm text-[20px] font-semibold">Active Value Propositions</h3>
<div class="flex items-center gap-4">
<button class="flex items-center gap-2 text-on-surface-variant font-label-md hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]">filter_list</span>
                            Filter
                        </button>
<button class="flex items-center gap-2 text-on-surface-variant font-label-md hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]">sort</span>
                            Sort
                        </button>
</div>
</div>
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-lowest">
<th class="px-8 py-4 font-label-caps text-on-surface-variant/60 uppercase tracking-widest text-[11px] border-b border-outline-variant/10">Asset</th>
<th class="px-8 py-4 font-label-caps text-on-surface-variant/60 uppercase tracking-widest text-[11px] border-b border-outline-variant/10">Title &amp; Description</th>
<th class="px-8 py-4 font-label-caps text-on-surface-variant/60 uppercase tracking-widest text-[11px] border-b border-outline-variant/10">Status</th>
<th class="px-8 py-4 font-label-caps text-on-surface-variant/60 uppercase tracking-widest text-[11px] border-b border-outline-variant/10 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low/30 transition-colors group">
<td class="px-8 py-6">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">eco</span>
</div>
</td>
<td class="px-8 py-6">
<div class="flex flex-col">
<span class="font-body-md font-bold text-on-surface">100% Organic</span>
<span class="text-on-surface-variant/60 text-sm">Sourced directly from sustainable butterfly pea farms in SE Asia.</span>
</div>
</td>
<td class="px-8 py-6">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary/10 text-tertiary-container text-[12px] font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                                    Published
                                </span>
</td>
<td class="px-8 py-6">
<div class="flex items-center justify-end gap-2">
<button class="p-2 rounded-xl text-on-surface-variant hover:bg-secondary-fixed hover:text-primary transition-all">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 rounded-xl text-on-surface-variant hover:bg-error-container hover:text-error transition-all">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low/30 transition-colors group">
<td class="px-8 py-6">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">spark</span>
</div>
</td>
<td class="px-8 py-6">
<div class="flex flex-col">
<span class="font-body-md font-bold text-on-surface">Antioxidant Rich</span>
<span class="text-on-surface-variant/60 text-sm">Packed with anthocyanins to support cellular health and vitality.</span>
</div>
</td>
<td class="px-8 py-6">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary/10 text-tertiary-container text-[12px] font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                                    Published
                                </span>
</td>
<td class="px-8 py-6">
<div class="flex items-center justify-end gap-2">
<button class="p-2 rounded-xl text-on-surface-variant hover:bg-secondary-fixed hover:text-primary transition-all">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 rounded-xl text-on-surface-variant hover:bg-error-container hover:text-error transition-all">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low/30 transition-colors group">
<td class="px-8 py-6">
<div class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">favorite</span>
</div>
</td>
<td class="px-8 py-6">
<div class="flex flex-col">
<span class="font-body-md font-bold text-on-surface">Calm &amp; Focus</span>
<span class="text-on-surface-variant/60 text-sm">Naturally caffeine-free, promoting cognitive clarity without the jitters.</span>
</div>
</td>
<td class="px-8 py-6">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-outline-variant/20 text-on-surface-variant text-[12px] font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-on-surface-variant/40"></span>
                                    Draft
                                </span>
</td>
<td class="px-8 py-6">
<div class="flex items-center justify-end gap-2">
<button class="p-2 rounded-xl text-on-surface-variant hover:bg-secondary-fixed hover:text-primary transition-all">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 rounded-xl text-on-surface-variant hover:bg-error-container hover:text-error transition-all">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low/30 transition-colors group">
<td class="px-8 py-6">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">water_drop</span>
</div>
</td>
<td class="px-8 py-6">
<div class="flex flex-col">
<span class="font-body-md font-bold text-on-surface">Pure Infusion</span>
<span class="text-on-surface-variant/60 text-sm">Deep indigo hues without artificial colors or synthetic additives.</span>
</div>
</td>
<td class="px-8 py-6">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary/10 text-tertiary-container text-[12px] font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                                    Published
                                </span>
</td>
<td class="px-8 py-6">
<div class="flex items-center justify-end gap-2">
<button class="p-2 rounded-xl text-on-surface-variant hover:bg-secondary-fixed hover:text-primary transition-all">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 rounded-xl text-on-surface-variant hover:bg-error-container hover:text-error transition-all">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
<div class="px-8 py-6 bg-surface-container-lowest/50 border-t border-outline-variant/10 flex items-center justify-between">
<p class="text-sm text-on-surface-variant/60 font-label-md">Showing 4 of 12 benefits</p>
<div class="flex gap-2">
<button class="p-2 rounded-lg border border-outline-variant/20 hover:bg-surface-container transition-colors disabled:opacity-30" disabled="">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="p-2 rounded-lg border border-outline-variant/20 hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Promotion / Help Card -->
<div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="p-8 rounded-[24px] bg-primary text-white flex flex-col justify-between h-64 relative overflow-hidden group">
<div class="z-10">
<h4 class="font-headline-sm mb-2">Visual Content Guide</h4>
<p class="opacity-80 max-w-xs text-body-md">Learn how to capture the perfect botanical infusion shot for your benefit gallery.</p>
</div>
<button class="z-10 w-fit bg-white text-primary px-6 py-2 rounded-full font-bold hover:bg-primary-fixed transition-colors">View Tutorial</button>
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-[160px] opacity-10 rotate-12 group-hover:rotate-0 transition-transform duration-700">camera_alt</span>
</div>
<div class="p-8 rounded-[24px] border-2 border-dashed border-outline-variant/40 flex flex-col items-center justify-center h-64 text-center">
<div class="w-16 h-16 rounded-full bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-primary text-3xl">lightbulb</span>
</div>
<h4 class="font-headline-sm text-on-surface mb-2">Pro-Tip</h4>
<p class="text-on-surface-variant/70 max-w-xs text-body-md">High-performing benefits often mention specific health outcomes backed by our tea science blog.</p>
</div>
</div>
</div>
</main>
<script>
        // Simple micro-interaction for rows
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.querySelector('.material-symbols-outlined[style*="FILL"]').style.transition = 'transform 0.3s ease';
                row.querySelector('.material-symbols-outlined[style*="FILL"]').style.transform = 'scale(1.1)';
            });
            row.addEventListener('mouseleave', () => {
                row.querySelector('.material-symbols-outlined[style*="FILL"]').style.transform = 'scale(1)';
            });
        });
    </script>
</body></html>
