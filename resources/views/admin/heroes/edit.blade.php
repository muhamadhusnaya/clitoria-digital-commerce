<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Clitoria Admin - Hero Section Management</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
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
                "error-container": "#ffdad6",
                "on-tertiary-fixed-variant": "#255100",
                "on-secondary": "#ffffff",
                "primary": "#432b9f",
                "on-error": "#ffffff",
                "on-error-container": "#93000a",
                "inverse-on-surface": "#f0efff",
                "inverse-primary": "#cabeff",
                "surface-container": "#edecff",
                "secondary-fixed": "#e6deff",
                "surface-container-high": "#e6e6ff",
                "background": "#fbf8ff",
                "secondary-fixed-dim": "#cbbeff",
                "surface-variant": "#dfe0ff",
                "surface-container-highest": "#dfe0ff",
                "tertiary-container": "#306600",
                "primary-container": "#5b46b8",
                "on-tertiary-fixed": "#0b2000",
                "secondary-container": "#a28dff",
                "surface-dim": "#d5d7fe",
                "surface-container-lowest": "#ffffff",
                "on-background": "#151936",
                "on-primary-fixed-variant": "#4831a4",
                "tertiary-fixed-dim": "#98d869",
                "on-secondary-fixed": "#1d0061",
                "surface-tint": "#604bbd",
                "on-secondary-fixed-variant": "#4931a1",
                "surface-bright": "#fbf8ff",
                "outline": "#797584",
                "on-primary-fixed": "#1c0062",
                "on-tertiary": "#ffffff",
                "error": "#ba1a1a",
                "on-surface-variant": "#484553",
                "on-surface": "#151936",
                "on-secondary-container": "#371b8f",
                "tertiary": "#224c00",
                "inverse-surface": "#2a2e4c",
                "primary-fixed-dim": "#cabeff",
                "on-primary": "#ffffff",
                "secondary": "#614cba",
                "on-primary-container": "#d4caff",
                "surface": "#fbf8ff",
                "tertiary-fixed": "#b3f582",
                "outline-variant": "#c9c4d5",
                "on-tertiary-container": "#a2e373",
                "primary-fixed": "#e6deff",
                "surface-container-low": "#f4f2ff"
            },
            "borderRadius": {
                "DEFAULT": "1rem",
                "lg": "2rem",
                "xl": "3rem",
                "full": "9999px"
            },
            "spacing": {
                "section-gap": "120px",
                "margin-desktop": "64px",
                "gutter": "24px",
                "margin-mobile": "20px",
                "base": "8px",
                "container-max": "1280px"
            },
            "fontFamily": {
                "display-lg": ["Inter"],
                "label-md": ["Inter"],
                "headline-sm": ["Inter"],
                "body-md": ["Inter"],
                "label-caps": ["Inter"],
                "body-lg": ["Inter"],
                "headline-md": ["Inter"]
            },
            "fontSize": {
                "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                "headline-sm": ["24px", {"lineHeight": "32px", "letterSpacing": "0", "fontWeight": "600"}],
                "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                "headline-md": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .soft-shadow {
            box-shadow: 0 10px 30px -5px rgba(31, 35, 64, 0.04);
        }
        .glass-effect {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .floating-label-input:focus-within label,
        .floating-label-input input:not(:placeholder-shown) + label {
            transform: translateY(-24px) scale(0.85);
            color: #432b9f;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-secondary-fixed selection:text-on-secondary-fixed">
<!-- SideNavBar (Persistent Left) -->
<aside class="fixed left-0 top-0 h-full w-64 z-40 flex flex-col gap-2 p-4 border-r border-outline-variant/30 bg-surface-container-low dark:bg-surface-container-lowest shadow-sm">
<div class="flex items-center gap-3 px-2 mb-8">
<div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">spa</span>
</div>
<div>
<h1 class="font-headline-sm text-headline-sm font-bold text-primary dark:text-on-primary-container leading-none">Clitoria</h1>
<p class="text-[10px] uppercase tracking-widest text-on-surface-variant font-semibold">Botanical Wellness</p>
</div>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<!-- Active Tab: Hero -->
<a class="flex items-center gap-3 px-4 py-3 bg-secondary-fixed text-on-secondary-fixed-variant rounded-lg font-bold scale-[0.98] transition-transform" href="#">
<span class="material-symbols-outlined" data-icon="stars" style="font-variation-settings: 'FILL' 1;">stars</span>
<span class="font-label-md text-label-md">Hero</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="health_and_safety">health_and_safety</span>
<span class="font-label-md text-label-md">Benefits</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="font-label-md text-label-md">Products</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span class="font-label-md text-label-md">Product Pricing</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
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
</nav>
<div class="mt-auto pt-4 border-t border-outline-variant/20">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-label-md text-label-md">Business Settings</span>
</a>
</div>
</aside>
<!-- TopAppBar -->
<header class="fixed top-0 right-0 left-64 h-16 z-30 flex justify-between items-center px-8 w-full bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-xl border-b border-outline-variant/20 shadow-sm">
<div class="flex items-center gap-4 flex-1">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-low rounded-full border-none focus:ring-2 focus:ring-primary/20 text-body-md transition-all" placeholder="Search settings..." type="text"/>
</div>
</div>
<div class="flex items-center gap-2">
<button class="hover:bg-surface-container-high dark:hover:bg-surface-container-highest rounded-full p-2 transition-all hover:scale-105 active:scale-95">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="notifications">notifications</span>
</button>
<button class="hover:bg-surface-container-high dark:hover:bg-surface-container-highest rounded-full p-2 transition-all hover:scale-105 active:scale-95">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="help">help</span>
</button>
<div class="h-8 w-[1px] bg-outline-variant/30 mx-2"></div>
<div class="flex items-center gap-3 pl-2">
<div class="text-right">
<p class="text-label-md font-bold text-on-surface leading-none">Admin User</p>
<p class="text-[10px] text-on-surface-variant">System Manager</p>
</div>
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center overflow-hidden border border-outline-variant/50">
<img class="w-full h-full object-cover" data-alt="A professional headshot of a female administrator with a kind expression, set against a soft blurred lavender office background. High-fidelity photography, clean lighting, representing the Clitoria brand aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9xsp7rHavMNxawYl2SqG_0_HLEARQ_lQskoE94xh1fioLt5hyZCqdwr8JdD1PP_ekhW7tevQOXSe2_Q5695yiaZviEijezBiAKwI_QUYllmJnAfUYY8vpBviLuiXObep1FPy3fi5Par3tQfQ7beF8vzyZ8naXZd5x6d3jLHYOxi_k6GjXsEaAqFhkBQK7IVPfhPxpmBm9fPCnx6o6CoeppKioKel30CQikLMjvT4w-HezLIJWmUGWNWPvC9iBTlNmp4Oxh10uzw"/>
</div>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="ml-64 pt-16 pb-32 min-h-screen">
<div class="max-w-[1280px] mx-auto px-8 py-10">
<!-- Header & Breadcrumbs -->
<header class="mb-10">
<nav class="flex items-center gap-2 text-label-md text-on-surface-variant mb-2">
<span>CMS</span>
<span class="material-symbols-outlined text-[16px]" data-icon="chevron_right">chevron_right</span>
<span class="text-primary font-semibold">Hero Section</span>
</nav>
<div class="flex items-end justify-between">
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Hero Settings</h2>
<p class="text-body-md text-on-surface-variant mt-1">Configure the main visual identity and call-to-action of your landing page.</p>
</div>
<div class="flex items-center gap-2 bg-tertiary-fixed/30 px-4 py-2 rounded-full">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
<span class="text-label-caps text-on-tertiary-fixed-variant">Live Status: Active</span>
</div>
</div>
</header>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Left Column: Hero Content -->
<div class="lg:col-span-7">
<div class="bg-white rounded-xl lg:rounded-xl p-8 soft-shadow border border-outline-variant/10">
<div class="flex items-center gap-3 mb-8">
<div class="w-10 h-10 rounded-lg bg-primary-container/10 flex items-center justify-center text-primary-container">
<span class="material-symbols-outlined" data-icon="edit_note">edit_note</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Hero Content</h3>
</div>
<form class="space-y-6">
<!-- Title Field -->
<div class="relative floating-label-input">
<input class="peer w-full h-[56px] px-4 pt-4 pb-1 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary/20 text-body-md transition-all outline-none" id="title" placeholder=" " type="text" value="Where Flavor Meets Innovation"/>
<label class="absolute left-4 top-4 text-on-surface-variant transition-all pointer-events-none origin-left" for="title">Title</label>
</div>
<!-- Subtitle Field -->
<div class="relative floating-label-input">
<textarea class="peer w-full min-h-[120px] px-4 pt-6 pb-2 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary/20 text-body-md transition-all outline-none resize-none" id="subtitle" placeholder=" " rows="4">Unique and nutritious Butterfly Pea Flower products designed for the modern ritual of tea consumption.</textarea>
<label class="absolute left-4 top-4 text-on-surface-variant transition-all pointer-events-none origin-left" for="subtitle">Subtitle</label>
</div>
<div class="grid grid-cols-2 gap-6">
<!-- Button Text -->
<div class="relative floating-label-input">
<input class="peer w-full h-[56px] px-4 pt-4 pb-1 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary/20 text-body-md transition-all outline-none" id="btn-text" placeholder=" " type="text" value="Explore Products"/>
<label class="absolute left-4 top-4 text-on-surface-variant transition-all pointer-events-none origin-left" for="btn-text">Button Text</label>
</div>
<!-- Button Link -->
<div class="relative floating-label-input">
<input class="peer w-full h-[56px] px-4 pt-4 pb-1 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary/20 text-body-md transition-all outline-none" id="btn-link" placeholder=" " type="text" value="#products"/>
<label class="absolute left-4 top-4 text-on-surface-variant transition-all pointer-events-none origin-left" for="btn-link">Button Link</label>
</div>
</div>
<div class="p-4 bg-secondary-fixed/20 rounded-xl flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-body-lg" data-icon="info">info</span>
<p class="text-label-md text-on-secondary-fixed-variant">These changes will update the landing page hero section in real-time after saving.</p>
</div>
</form>
</div>
</div>
<!-- Right Column: Hero Visual -->
<div class="lg:col-span-5">
<div class="bg-white rounded-xl lg:rounded-xl p-8 soft-shadow border border-outline-variant/10 h-full flex flex-col">
<div class="flex items-center gap-3 mb-8">
<div class="w-10 h-10 rounded-lg bg-primary-container/10 flex items-center justify-center text-primary-container">
<span class="material-symbols-outlined" data-icon="image">image</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Hero Visual</h3>
</div>
<!-- Dropzone -->
<div class="flex-1 flex flex-col">
<div class="relative group cursor-pointer border-2 border-dashed border-outline-variant rounded-xl overflow-hidden hover:border-primary transition-colors flex-1 flex flex-col">
<input class="absolute inset-0 opacity-0 cursor-pointer z-10" type="file"/>
<div class="flex-1 min-h-[320px] bg-surface-container-low flex flex-col items-center justify-center p-6 text-center">
<div class="mb-4 w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="cloud_upload">cloud_upload</span>
</div>
<p class="font-bold text-on-surface">Click to upload or drag and drop</p>
<p class="text-label-md text-on-surface-variant mt-1">Recommended: 1920x1080px (PNG, WebP)</p>
</div>
<!-- Current Preview -->
<div class="relative h-[240px] border-t border-outline-variant/20 overflow‑hidden">
<img class="w-full h-full object‑cover" data‑alt="A top‑down premium lifestyle shot of a clear glass teapot filled with deep blue Butterfly Pea tea. A few dried botanical flowers are scattered on a white marble surface next to a matching cup. Soft morning sunlight creates clean shadows, evoking a tranquil and sophisticated wellness atmosphere. High‑end photography." src="https://lh3.googleusercontent.com/aida‑public/AB6AXuBAr8pxln4e0rT8COcW7zolEKgtmBPKwn2JHvmWok5QUDH_DQ7e9VbUhtv7SkNVZPWxWn3n79JlBhWsZ3A2_8hYlDYJn8582SgwPcwaO‑zkzN2CXmw4qjDqeV7A‑ZBlrnhAQ5sKwp7REjt2fR_bE4aUnuEEv‑kLN4‑dVifaXUUo3uqmPGYUnDuCCRNSaDatC7X‑qhsnWokpd6LLBCePjZbqBPF6ZRefc9iHph42TAdg5puf5Cm_3VoRQT3buJ_yjLYVSKwVB6‑BTw"/>
<div class="absolute inset-0 bg-gradient-to‑t from‑black/50 to‑transparent flex items‑end p‑4">
<div class="flex items‑center gap‑2 text‑white bg‑white/20 backdrop‑blur‑md px‑3 py‑1 rounded‑full text‑label‑caps">
<span class="material‑symbols‑outlined text‑[14px]" data‑icon="check_circle">check_circle</span>
                                            Current Image Preview
                                        </div>
</div>
<button class="absolute top‑4 right‑4 bg‑error‑container text‑on‑error‑container w‑10 h‑10 rounded‑full flex items‑center justify‑center shadow‑lg hover:scale‑110 transition‑transform z‑20">
<span class="material‑symbols‑outlined" data‑icon="delete">delete</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Sticky Action Bar -->
<div class="fixed bottom‑0 right‑0 left‑64 h‑24 bg‑surface/90 backdrop‑blur‑xl border‑t border‑outline‑variant/20 flex items‑center justify‑end px‑8 z‑40">
<div class="flex items‑center gap‑4">
<button class="px‑8 h‑12 rounded‑full border border‑outline text‑on‑surface‑variant font‑bold hover:bg‑surface‑container‑high transition‑all active:scale‑95">
                    Discard Changes
                </button>
<button class="px‑10 h‑12 rounded‑full bg‑primary‑container text‑white font‑bold shadow‑lg shadow‑primary/20 hover:scale‑[1.02] active:scale‑95 transition‑all flex items‑center gap‑2">
<span class="material‑symbols‑outlined" data‑icon="save">save</span>
                    Save Settings
                </button>
</div>
</div>
</main>
<script>
        // Micro‑interaction for the save button
        const saveBtn = document.querySelector('button:last‑child');
        saveBtn.addEventListener('click', () => {
            const originalContent = saveBtn.innerHTML;
            saveBtn.innerHTML = `<span class="material‑symbols‑outlined animate‑spin" data‑icon="progress_activity">progress_activity</span> Saving…`;
            saveBtn.classList.add('opacity‑80', 'cursor‑not‑allowed');
            
            setTimeout(() => {
                saveBtn.innerHTML = `<span class="material‑symbols‑outlined" data‑icon="done">done</span> Saved!`;
                saveBtn.classList.replace('bg‑primary‑container', 'bg‑tertiary‑container');
                
                setTimeout(()
