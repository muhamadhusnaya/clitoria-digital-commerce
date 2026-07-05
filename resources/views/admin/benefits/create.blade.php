<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Clitoria Admin - Add New Benefit</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-container": "#a28dff",
                        "on-secondary-fixed-variant": "#4931a1",
                        "surface-dim": "#d5d7fe",
                        "on-tertiary-fixed-variant": "#255100",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#151936",
                        "background": "#fbf8ff",
                        "on-background": "#151936",
                        "tertiary-fixed-dim": "#98d869",
                        "primary-container": "#5b46b8",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed": "#1c0062",
                        "surface-variant": "#dfe0ff",
                        "secondary-fixed": "#e6deff",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#306600",
                        "on-secondary-container": "#371b8f",
                        "primary-fixed": "#e6deff",
                        "error": "#ba1a1a",
                        "on-secondary-fixed": "#1d0061",
                        "on-primary-container": "#d4caff",
                        "surface-container-low": "#f4f2ff",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#cabeff",
                        "surface-container-high": "#e6e6ff",
                        "on-primary-fixed-variant": "#4831a4",
                        "on-surface-variant": "#484553",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#cbbeff",
                        "tertiary-fixed": "#b3f582",
                        "surface": "#fbf8ff",
                        "on-error": "#ffffff",
                        "primary-fixed-dim": "#cabeff",
                        "outline": "#797584",
                        "on-tertiary-container": "#a2e373",
                        "surface-bright": "#fbf8ff",
                        "primary": "#432b9f",
                        "secondary": "#614cba",
                        "on-secondary": "#ffffff",
                        "inverse-surface": "#2a2e4c",
                        "tertiary": "#224c00",
                        "inverse-on-surface": "#f0efff",
                        "surface-container-highest": "#dfe0ff",
                        "surface-container": "#edecff",
                        "outline-variant": "#c9c4d5",
                        "surface-tint": "#604bbd",
                        "on-tertiary-fixed": "#0b2000"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "margin-desktop": "64px",
                        "base": "8px",
                        "section-gap": "120px",
                        "margin-mobile": "20px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "label-caps": ["Inter"],
                        "headline-md": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                        "headline-sm": ["24px", {"lineHeight": "32px", "letterSpacing": "0", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                        "display-lg-mobile": ["36px", {"lineHeight": "42px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                        "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-md": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                    }
                }
            }
        };
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fbf8ff;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .dropzone-active {
            border-color: #5B46B8;
            background-color: #f4f2ff;
        }
        .custom-shadow {
            box-shadow: 0 10px 30px rgba(31, 35, 64, 0.04);
        }
    </style>
</head>
<body class="text-on-surface">
<!-- SideNavBar (Persistent Shell) -->
<aside class="fixed left-0 top-0 h-full w-64 z-40 bg-surface-container-low dark:bg-surface-container-lowest shadow-sm flex flex-col gap-2 p-4 border-r border-outline-variant/30">
<div class="flex items-center gap-3 px-4 py-6 mb-4">
<div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined">eco</span>
</div>
<div>
<h1 class="font-headline-sm text-headline-sm font-bold text-primary dark:text-on-primary-container">Clitoria</h1>
<p class="font-label-md text-label-md text-on-surface-variant opacity-70">Botanical Wellness</p>
</div>
</div>
<nav class="flex-1 space-y-1 overflow-y-auto">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="stars">stars</span>
<span class="font-label-md text-label-md">Hero</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 bg-secondary-fixed text-on-secondary-fixed-variant rounded-lg font-bold scale-[0.98] transition-transform" href="#">
<span class="material-symbols-outlined" data-icon="health_and_safety" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
<span class="font-label-md text-label-md">Benefits</span>
</a>
<!-- Other nav items omitted for brevity -->
</nav>
<div class="mt-auto border-t border-outline-variant/20 pt-4 px-4">
<div class="flex items-center gap-3 group cursor-pointer">
<img class="w-10 h-10 rounded-full border-2 border-primary-fixed-dim" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9fZ7C_eDGPrRrIdVLj2dhoZB9lqDR_o0yi8W_QwFturdFNEO2jCRJUsMxh8UL1YN66oODKeh41GpGSlVvWSwXsSNaYAq2iGSp414JKHM8tIjEJZuFQTVwHk-uGNhCZAZe8XW2rdhDqKlZiztMGCPFa_qap3CDizJpdd530hdf-wXSky4x1JEhBbATyuC3cYhRmJ7XinnxSTi-ymffph6sXKQwhosElkFvqMoINleAzDnfDEi1m6oKqFOmzrsyURZddRB3UWTXxQ"/>
<div class="overflow-hidden">
<p class="font-label-md text-label-md font-bold truncate">Admin Profile</p>
<p class="text-xs text-on-surface-variant truncate">Sign out</p>
</div>
</div>
</div>
</aside>
<!-- Main Canvas -->
<main class="ml-64 min-h-screen pb-32">
<header class="h-16 flex justify-between items-center px-gutter glass-panel border-b border-outline-variant/10 sticky top-0 z-30">
<div class="flex items-center gap-4">
<button class="p-2 hover:bg-surface-container-high rounded-full transition-colors flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant">menu</span>
</button>
<div class="h-8 w-[1px] bg-outline-variant/30"></div>
<nav class="flex items-center gap-2">
<span class="text-on-surface-variant font-label-md">Admin</span>
<span class="material-symbols-outlined text-on-surface-variant text-sm">chevron_right</span>
<span class="text-primary font-bold font-label-md">New Benefit</span>
</nav>
</div>
<div class="flex items-center gap-3">
<button class="material-symbols-outlined hover:bg-surface-container-high rounded-full p-2 transition-colors">notifications</button>
<button class="material-symbols-outlined hover:bg-surface-container-high rounded-full p-2 transition-colors">help</button>
<button class="material-symbols-outlined hover:bg-surface-container-high rounded-full p-2 transition-colors">account_circle</button>
</div>
</header>
<div class="max-w-[1000px] mx-auto px-gutter py-10">
<div class="flex flex-col gap-6 mb-12">
<a class="inline-flex items-center gap-2 text-primary font-label-md group" href="#">
<span class="material-symbols-outlined group-hover:-translate-x-1 transition-transform">arrow_back</span>
Back to List
</a>
<h2 class="font-display-lg text-display-lg text-on-surface">Create New Benefit</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<div class="md:col-span-7 flex flex-col gap-8">
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant ml-1" for="benefit-title">Benefit Title</label>
<input class="h-[56px] px-6 rounded-xl border-0 bg-surface-container-low focus:ring-2 focus:ring-primary focus:bg-white custom-shadow transition-all duration-300 text-body-md placeholder:text-outline" id="benefit-title" placeholder="e.g. Natural Antioxidant Power" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant ml-1" for="status">Status</label>
<div class="relative">
<select class="w-full h-[56px] px-6 rounded-xl border-0 bg-surface-container-low focus:ring-2 focus:ring-primary focus:bg-white custom-shadow appearance-none transition-all duration-300 text-body-md cursor-pointer" id="status">
<option value="published">Published</option>
<option value="draft">Draft</option>
</select>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant ml-1" for="description">Short Description</label>
<textarea class="px-6 py-4 rounded-xl border-0 bg-surface-container-low focus:ring-2 focus:ring-primary focus:bg-white custom-shadow transition-all duration-300 text-body-md placeholder:text-outline resize-none" id="description" placeholder="Briefly explain this benefit for the customer..." rows="4"></textarea>
</div>
</div>
<div class="md:col-span-5 flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant ml-1">Icon Upload</label>
<div class="relative group cursor-pointer h-[320px] rounded-xl border-2 border-dashed border-outline-variant bg-surface-container-low hover:bg-secondary-fixed/10 hover:border-primary transition-all duration-300 flex flex-col items-center justify-center text-center p-8 overflow-hidden" id="dropzone">
<div class="flex flex-col items-center gap-4 transition-transform group-hover:scale-105 duration-300">
<div class="w-16 h-16 rounded-full bg-secondary-fixed flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined text-4xl" data-icon="upload">upload</span>
</div>
<div>
<p class="font-headline-sm text-label-md font-bold text-on-surface">Click to upload or drag and drop</p>
<p class="text-xs text-on-surface-variant mt-2 max-w-[200px]">Recommended: SVG or PNG with transparent background (Min 256x256px)</p>
</div>
</div>
<input accept=".svg,.png" class="absolute inset-0 opacity-0 cursor-pointer" type="file"/>
</div>
<div class="mt-4 p-4 rounded-xl bg-tertiary-fixed/10 flex items-start gap-3">
<span class="material-symbols-outlined text-tertiary">info</span>
<p class="text-xs text-on-tertiary-fixed font-medium">Icons should be minimalist and monochromatic to maintain the premium brand aesthetic.</p>
</div>
</div>
</div>
</div>
</main>
<div class="fixed bottom-0 left-64 right-0 h-24 glass-panel border-t border-outline-variant/20 flex items-center justify-between px-gutter z-50">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
<p class="text-xs font-label-md text-on-surface-variant">Draft saved just now</p>
</div>
<div class="flex items-center gap-4">
<button class="h-12 px-8 rounded-full border border-outline text-on-surface-variant font-label-md hover:bg-surface-container-high hover:border-on-surface-variant transition-all active:scale-95">
                Cancel
            </button>
<button class="h-12 px-10 rounded-full bg-primary text-on-primary font-label-md font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all">
                Save Benefit
            </button>
</div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropzone = document.getElementById('dropzone');

            ['dragenter', 'dragover'].forEach(eventName => {
                dropzone.addEventListener(eventName, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    dropzone.classList.add('dropzone-active');
                }, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropzone.addEventListener(eventName, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    dropzone.classList.remove('dropzone-active');
                }, false);
            });

            dropzone.addEventListener('drop', (e) => {
                let dt = e.dataTransfer;
                let files = dt.files;
                console.log('Files dropped:', files);
                if(files.length > 0) {
                    alert('File "' + files[0].name + '" ready for upload.');
                }
            });

            const buttons = document.querySelectorAll('button');
            buttons.forEach(btn => {
                btn.addEventListener('mousedown', () => btn.classList.add('scale-95'));
                btn.addEventListener('mouseup', () => btn.classList.remove('scale-95'));
                btn.addEventListener('mouseleave', () => btn.classList.remove('scale-95'));
            });
        });
    </script>
</body>
</html>
