<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Clitoria Admin Dashboard</title>
<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Design System Configuration -->
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                "surface": "#fbf8ff",
                "secondary": "#614cba",
                "primary": "#432b9f",
                "secondary-fixed": "#e6deff",
                "on-secondary": "#ffffff",
                "on-primary-container": "#d4caff",
                "tertiary-fixed-dim": "#98d869",
                "on-secondary-container": "#371b8f",
                "tertiary": "#224c00",
                "error-container": "#ffdad6",
                "on-error-container": "#93000a",
                "secondary-fixed-dim": "#cbbeff",
                "on-secondary-fixed": "#1d0061",
                "tertiary-fixed": "#b3f582",
                "surface-tint": "#604bbd",
                "on-tertiary-container": "#a2e373",
                "on-primary-fixed": "#1c0062",
                "surface-container": "#edecff",
                "tertiary-container": "#306600",
                "surface-variant": "#dfe0ff",
                "on-background": "#151936",
                "inverse-primary": "#cabeff",
                "surface-bright": "#fbf8ff",
                "primary-fixed": "#e6deff",
                "on-surface-variant": "#484553",
                "surface-dim": "#d5d7fe",
                "surface-container-low": "#f4f2ff",
                "on-primary": "#ffffff",
                "primary-fixed-dim": "#cabeff",
                "on-secondary-fixed-variant": "#4931a1",
                "on-error": "#ffffff",
                "background": "#fbf8ff",
                "secondary-container": "#a28dff",
                "primary-container": "#5b46b8",
                "on-surface": "#151936",
                "outline-variant": "#c9c4d5",
                "on-tertiary": "#ffffff",
                "inverse-on-surface": "#f0efff",
                "on-tertiary-fixed": "#0b2000",
                "on-tertiary-fixed-variant": "#255100",
                "error": "#ba1a1a",
                "surface-container-lowest": "#ffffff",
                "inverse-surface": "#2a2e4c",
                "on-primary-fixed-variant": "#4831a4",
                "surface-container-highest": "#dfe0ff",
                "surface-container-high": "#e6e6ff",
                "outline": "#797584"
            },
            "borderRadius": {
                "DEFAULT": "1rem",
                "lg": "2rem",
                "xl": "3rem",
                "full": "9999px"
            },
            "spacing": {
                "section-gap": "120px",
                "base": "8px",
                "margin-desktop": "64px",
                "container-max": "1280px",
                "margin-mobile": "20px",
                "gutter": "24px"
            },
            "fontFamily": {
                "headline-md": ["Inter"],
                "body-lg": ["Inter"],
                "label-caps": ["Inter"],
                "label-md": ["Inter"],
                "display-lg": ["Inter"],
                "headline-sm": ["Inter"],
                "body-md": ["Inter"],
                "display-lg-mobile": ["Inter"]
            },
            "fontSize": {
                "headline-md": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "headline-sm": ["24px", {"lineHeight": "32px", "letterSpacing": "0", "fontWeight": "600"}],
                "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                "display-lg-mobile": ["36px", {"lineHeight": "42px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #fbf8ff;
            color: #151936;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(225, 220, 255, 0.4);
        }
        .card-shadow {
            box-shadow: 0 10px 30px -5px rgba(31, 35, 64, 0.04);
        }
        .hover-lift {
            transition: transform 0.2s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.2s ease;
        }
        .hover-lift:hover {
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 20px 40px -10px rgba(31, 35, 64, 0.08);
        }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="flex min-h-screen">
<!-- SideNavBar Anchor -->
<aside class="fixed left-0 top-0 h-full w-64 z-40 bg-surface-container-low dark:bg-surface-container-lowest shadow-sm flex flex-col gap-2 p-4 border-r border-outline-variant/30">
<div class="mb-8 px-2 flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">local_florist</span>
</div>
<div>
<h1 class="font-headline-sm text-headline-sm font-bold text-primary dark:text-on-primary-container">Clitoria</h1>
<p class="text-[10px] uppercase tracking-widest text-outline">Botanical Wellness</p>
</div>
</div>
<nav class="flex-1 space-y-1 overflow-y-auto no-scrollbar">
<!-- Active: Dashboard -->
<a class="flex items-center gap-3 px-4 py-3 bg-secondary-fixed text-on-secondary-fixed-variant rounded-lg font-bold scale-[0.98] transition-transform" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="stars">stars</span>
<span class="font-label-md text-label-md">Hero</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="health_and_safety">health_and_safety</span>
<span class="font-label-md text-label-md">Benefits</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="font-label-md text-label-md">Products</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span class="font-label-md text-label-md">Product Pricing</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="collections">collections</span>
<span class="font-label-md text-label-md">Gallery</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="reviews">reviews</span>
<span class="font-label-md text-label-md">Testimonials</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="groups">groups</span>
<span class="font-label-md text-label-md">Team</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
<span class="font-label-md text-label-md">Sales</span>
</a>
<div class="mt-4 pt-4 border-t border-outline-variant/30">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant dark:text-outline hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-label-md text-label-md">Business Settings</span>
</a>
</div>
</nav>
</aside>
<!-- Content Area -->
<main class="flex-1 ml-64 min-h-screen">
<!-- TopAppBar Anchor -->
<header class="fixed top-0 right-0 left-64 h-16 z-30 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-xl border-b border-outline-variant/20 shadow-sm flex justify-between items-center px-gutter">
<div class="flex items-center gap-4 flex-1">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-xl">search</span>
<input class="w-full bg-surface-container-low border-none rounded-full pl-10 pr-4 py-2 text-body-md focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search data or reports..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="hover:bg-surface-container-high dark:hover:bg-surface-container-highest rounded-full p-2 transition-all hover:scale-105 active:scale-95">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="hover:bg-surface-container-high dark:hover:bg-surface-container-highest rounded-full p-2 transition-all hover:scale-105 active:scale-95">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<div class="h-8 w-[1px] bg-outline-variant/30 mx-2"></div>
<div class="flex items-center gap-3 cursor-pointer hover:bg-surface-container-high p-1 pr-4 rounded-full transition-colors">
<img class="w-8 h-8 rounded-full border-2 border-primary/20 object-cover" data-alt="A professional portrait of a tech-savvy female administrator in her early 30s, wearing stylish glasses and a neutral linen blazer. She is smiling warmly in a bright, modern studio with soft botanical accents in the background. The aesthetic is high-end corporate meets wellness brand, with soft natural lighting and a clean, minimalist professional atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoz_qvjkYbepZaPcg9vKO0cd39Yhe4tgf9MdNoWmzIoI-fxeYqm0uabFphs_539NboBcUEkIEwZ8aFF2WHddab9ZWGU41FKfChid3LOXRrBdZ3isVBN28OwGMn5wnJOePHss4U385JaiMV9HfLm8khUiVp7ehqtm0RS1U7WQmE9D_jxh9_yIaSTERFTjPTzz5u5A012gNmvhq1EdC4lP4iXNDWMRpff6IY3Bu2wyegMg3UzdugpdPovnBTVT-6b6aFdCmdrkFMWg"/>
<div class="hidden lg:block">
<p class="font-label-md text-label-md text-on-surface">Admin Profile</p>
<p class="text-[10px] text-outline leading-tight">Master Admin</p>
</div>
</div>
</div>
</header>
<!-- Main Canvas -->
<div class="pt-24 pb-12 px-gutter space-y-8 max-w-container-max mx-auto">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Dashboard Overview</h2>
<p class="text-body-md text-outline">Real-time performance and inventory insights for Clitoria Botanical.</p>
</div>
<div class="flex items-center gap-3 bg-white px-4 py-2 rounded-xl shadow-sm border border-outline-variant/20 cursor-pointer hover:border-primary/40 transition-colors">
<span class="material-symbols-outlined text-primary">calendar_today</span>
<span class="font-label-md text-label-md">Oct 01, 2023 - Oct 31, 2023</span>
<span class="material-symbols-outlined text-outline">expand_more</span>
</div>
</div>
<!-- Metric Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Card 1: Total Produk -->
<div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-2xl bg-primary-container/10 flex items-center justify-center text-primary transition-transform group-hover:rotate-12">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">shopping_bag</span>
</div>
<span class="text-[10px] font-bold text-outline uppercase tracking-wider bg-surface-container px-2 py-1 rounded-full">Inventory</span>
</div>
<p class="text-outline font-label-md text-label-md">Total Produk</p>
<h3 class="font-display-lg text-[40px] text-on-surface mt-1">32</h3>
<div class="mt-4 flex items-center gap-2 text-tertiary font-medium text-sm">
<span class="material-symbols-outlined text-sm">add_circle</span>
<span>2 new items this month</span>
</div>
</div>
<!-- Card 2: Total Gallery -->
<div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-2xl bg-secondary-container/10 flex items-center justify-center text-secondary transition-transform group-hover:rotate-12">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">collections</span>
</div>
<span class="text-[10px] font-bold text-outline uppercase tracking-wider bg-surface-container px-2 py-1 rounded-full">Assets</span>
</div>
<p class="text-outline font-label-md text-label-md">Total Gallery</p>
<h3 class="font-display-lg text-[40px] text-on-surface mt-1">128</h3>
<div class="mt-4 flex items-center gap-2 text-outline font-medium text-sm">
<span class="material-symbols-outlined text-sm">cloud_done</span>
<span>Optimized storage</span>
</div>
</div>
<!-- Card 3: Total Testimonial -->
<div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-2xl bg-tertiary-container/10 flex items-center justify-center text-tertiary transition-transform group-hover:rotate-12">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">reviews</span>
</div>
<span class="text-[10px] font-bold text-outline uppercase tracking-wider bg-surface-container px-2 py-1 rounded-full">Social Proof</span>
</div>
<p class="text-outline font-label-md text-label-md">Total Testimonial</p>
<h3 class="font-display-lg text-[40px] text-on-surface mt-1">45</h3>
<div class="mt-4 flex items-center gap-2 text-tertiary font-medium text-sm">
<span class="material-symbols-outlined text-sm">star_rate</span>
<span>4.9 Avg Rating</span>
</div>
</div>
<!-- Card 4: Total Team Member -->
<div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-2xl bg-primary-container/10 flex items-center justify-center text-primary transition-transform group-hover:rotate-12">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">groups</span>
</div>
<span class="text-[10px] font-bold text-outline uppercase tracking-wider bg-surface-container px-2 py-1 rounded-full">Organization</span>
</div>
<p class="text-outline font-label-md text-label-md">Total Team Member</p>
<h3 class="font-display-lg text-[40px] text-on-surface mt-1">24</h3>
<div class="mt-4 flex items-center gap-2 text-outline font-medium text-sm">
<span class="material-symbols-outlined text-sm">info</span>
<span>4 active departments</span>
</div>
</div>
<!-- Card 5: Sales Count -->
<div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group relative overflow-hidden">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-tertiary-fixed/20 rounded-full blur-2xl"></div>
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-2xl bg-tertiary-container/10 flex items-center justify-center text-tertiary transition-transform group-hover:rotate-12">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">shopping_cart</span>
</div>
<span class="text-[10px] font-bold text-tertiary uppercase tracking-wider bg-tertiary-fixed/40 px-2 py-1 rounded-full">Active</span>
</div>
<p class="text-outline font-label-md text-label-md">Total Penjualan Bulan Ini</p>
<div class="flex items-baseline gap-3">
<h3 class="font-display-lg text-[40px] text-on-surface mt-1">156</h3>
<span class="text-tertiary font-bold flex items-center gap-0.5 text-sm bg-tertiary-fixed/20 px-2 py-0.5 rounded-full">
<span class="material-symbols-outlined text-xs">trending_up</span> 12%
                        </span>
</div>
<div class="mt-4 h-1 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-tertiary-fixed-dim w-3/4 rounded-full"></div>
</div>
</div>
<!-- Card 6: Revenue -->
<div class="p-6 rounded-[24px] hover-lift group relative overflow-hidden bg-primary text-white shadow-xl shadow-primary/20">
<div class="absolute -left-4 -bottom-4 w-32 h-32 bg-secondary-container/20 rounded-full blur-3xl"></div>
<div class="flex justify-between items-start mb-4 relative z-10">
<div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center text-white transition-transform group-hover:rotate-12">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">payments</span>
</div>
<span class="text-[10px] font-bold text-white/80 uppercase tracking-wider bg-white/10 px-2 py-1 rounded-full">Monthly Revenue</span>
</div>
<p class="text-white/70 font-label-md text-label-md relative z-10">Total Omzet Bulan Ini</p>
<h3 class="font-display-lg text-[40px] text-white mt-1 relative z-10">$12,450</h3>
<p class="mt-4 text-white/60 text-sm relative z-10 flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span> Last updated 12m ago
                    </p>
</div>
</div>
<!-- Recent Sales Section -->
<div class="glass-card card-shadow rounded-[24px] overflow-hidden border border-outline-variant/20">
<div class="p-6 border-b border-outline-variant/10 flex justify-between items-center bg-white/50">
<div>
<h4 class="font-headline-sm text-headline-sm text-on-surface">Recent Sales Summary</h4>
<p class="text-label-md text-outline">Latest transactions across all channels.</p>
</div>
<button class="flex items-center gap-2 text-primary font-bold hover:bg-primary/5 px-4 py-2 rounded-full transition-all">
                        View All Reports
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-surface-container-low/50">
<th class="px-6 py-4 font-label-caps text-label-caps text-outline uppercase">Date</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-outline uppercase">Customer</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-outline uppercase">Amount</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-outline uppercase">Status</th>
<th class="px-6 py-4 font-label-caps text-label-caps text-outline uppercase text-center">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 bg-white/30">
<!-- Completed Transaction -->
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-6 py-4 text-body-md text-on-surface">Oct 24, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center text-[10px] font-bold">JD</div>
<div>
<p class="text-body-md font-bold text-on-surface">Jane Doe</p>
<p class="text-[11px] text-outline">jane.d@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-md font-bold text-on-surface">$145.00</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed/30 text-tertiary text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                        Completed
                                    </span>
</td>
<td class="px-6 py-4 text-center">
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors">more_vert</button>
</td>
</tr>
<!-- Processing Transaction -->
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-6 py-4 text-body-md text-on-surface">Oct 23, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center text-[10px] font-bold">MK</div>
<div>
<p class="text-body-md font-bold text-on-surface">Marcus Knight</p>
<p class="text-[11px] text-outline">m.knight@webmail.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-md font-bold text-on-surface">$2,100.50</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-orange-100 text-orange-700 text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                                        Processing
                                    </span>
</td>
<td class="px-6 py-4 text-center">
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors">more_vert</button>
</td>
</tr>
<!-- Cancelled Transaction -->
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-6 py-4 text-body-md text-on-surface">Oct 22, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center text-[10px] font-bold">SL</div>
<div>
<p class="text-body-md font-bold text-on-surface">Sarah Lee</p>
<p class="text-[11px] text-outline">slee@design.co</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-md font-bold text-on-surface">$45.00</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container text-on-error-container text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                        Cancelled
                                    </span>
</td>
<td class="px-6 py-4 text-center">
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors">more_vert</button>
</td>
</tr>
<!-- Completed Transaction -->
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-6 py-4 text-body-md text-on-surface">Oct 21, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center text-[10px] font-bold">BW</div>
<div>
<p class="text-body-md font-bold text-on-surface">Bob Wilson</p>
<p class="text-[11px] text-outline">bob@wilson.org</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-md font-bold text-on-surface">$560.20</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed/30 text-tertiary text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                        Completed
                                    </span>
</td>
<td class="px-6 py-4 text-center">
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors">more_vert</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-6 py-4 bg-surface-container-low/30 border-t border-outline-variant/10 flex items-center justify-between">
<p class="text-label-md text-outline">Showing 4 of 156 sales</p>
<div class="flex gap-2">
<button class="w-8 h-8 rounded-lg border border-outline-variant/30 flex items-center justify-center text-outline hover:bg-white transition-colors">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-lg border border-primary/30 bg-primary text-white flex items-center justify-center text-xs font-bold">1</button>
<button class="w-8 h-8 rounded-lg border border-outline-variant/30 flex items-center justify-center text-xs font-bold hover:bg-white transition-colors">2</button>
<button class="w-8 h-8 rounded-lg border border-outline-variant/30 flex items-center justify-center text-outline hover:bg-white transition-colors">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Bento Bottom Grid (Optional/Additional UI) -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Stock Alerts -->
<div class="lg:col-span-2 glass-card card-shadow p-6 rounded-[24px]">
<div class="flex items-center justify-between mb-6">
<h4 class="font-headline-sm text-headline-sm text-on-surface">Inventory Status</h4>
<span class="material-symbols-outlined text-outline">inventory_2</span>
</div>
<div class="space-y-4">
<div class="flex items-center justify-between p-4 bg-white rounded-2xl border border-outline-variant/10">
<div class="flex items-center gap-4">
<img class="w-12 h-12 rounded-xl object-cover bg-surface" data-alt="A macro studio photograph of premium dried Butterfly Pea flowers (Clitoria Ternatea), showcasing intense deep blue and purple hues. The lighting is soft and artistic, highlighting the delicate organic textures. The composition is clean and minimalist, set against a pristine white background with soft ambient shadows." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLufxvGTOYDq-C15yC_uDWo3olX6d3QzDvD72Ak4vXphED-BYs-F0bIt5b8YpnaX7TvuFBD1ZJayRc5li_u7wK-SoivK-E98vV_zJmUxTat84DwGm-ksXqNg4AIWCbRb4dukHCAD8uULM5lvTj8aMuQBxTTK69jSJysSTEZ90B7CfVIMWtaKpQoGde5aDEE-Rgxf5V2eudxhl4q_5Or0BY8hZttj2Fvg3j1kwdMRU1XIPEl0RBvWTCpAWuaxrFMD0648Y79vZCLg"/>
<div>
<p class="font-bold text-on-surface">Premium Blue Tea Leaf</p>
<p class="text-xs text-outline">ID: SKU-2045</p>
</div>
</div>
<div class="text-right">
<p class="font-bold text-error">Only 5 left</p>
<p class="text-xs text-outline">Restock recommended</p>
</div>
</div>
<div class="flex items-center justify-between p-4 bg-white rounded-2xl border border-outline-variant/10">
<div class="flex items-center gap-4">
<img class="w-12 h-12 rounded-xl object-cover bg-surface" data-alt="A set of elegant, minimalist clear glass tea canisters filled with vibrant blue and purple botanical blends. The jars are topped with cork lids and feature sleek, modern typography on white labels. The lighting is bright and clean, reflecting a high-end apothecary or boutique wellness tea brand aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4OdvtPl4F9uwiNzvg7YTt1U1lz75eGju8gce9DIUiSqk44PC7v1O7OeRY4zmH5vDOuI0KxV6VIeHT579MQ37P9QgZdjyF61L6qrQ2GfhO75E8-Zc2VMuIchWm9ukF2Ng5D4BxY6AAw-GVrQ9Y7RM9zLBC9b6SNb5F9vjDHEmsdLqoDWD_7ACFUC1MQipep54zaQWnsROGbIB6QCzlM5xuUSJdSHWXwx2LHd--XaLh3SaE9B3xHdNB89kDEWVFvFvLe0GMHPoytQ"/>
<div>
<p class="font-bold text-on-surface">Infusion Set Mini</p>
<p class="text-xs text-outline">ID: SKU-3092</p>
</div>
</div>
<div class="text-right">
<p class="font-bold text-tertiary">124 units</p>
<p class="text-xs text-outline">Healthy stock</p>
</div>
</div>
</div>
</div>
<!-- Quick Action Card -->
<div class="bg-secondary-fixed rounded-[24px] p-6 flex flex-col justify-between group">
<div>
<h4 class="font-headline-sm text-headline-sm text-on-secondary-fixed-variant">System Health</h4>
<p class="text-on-secondary-fixed-variant/70 text-body-md mt-2">All systems are running smoothly. Automated sync completed 2h ago.</p>
</div>
<button class="mt-8 bg-on-secondary-fixed text-white w-full py-4 rounded-2xl font-bold flex items-center justify-center gap-2 group-hover:scale-[1.02] transition-transform">
<span class="material-symbols-outlined">sync</span>
                        Run Manual Sync
                    </button>
</div>
</div>
</div>
</main>
<!-- Interactive Micro-interactions Script -->
<script>
        document.querySelectorAll('.hover-lift').forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Potential for adding subtle canvas particles on hover
            });
        });

        // Simple date update logic
        const dateSpan = document.querySelector('.bg-white.px-4.py-2.rounded-xl span:nth-child(2)');
        if (dateSpan) {
            const now = new Date();
            const firstDay = new Date(now.getFullYear(), now.getMonth(), 1);
            const lastDay = new Date(now.getFullYear(), now.getMonth() + 1, 0);
            
            const formatDate = (date) => {
                const options = { month: 'short', day: '2-digit', year: 'numeric' };
                return date.toLocaleDateString('en-US', options);
            };
            
            dateSpan.textContent = `${formatDate(firstDay)} - ${formatDate(lastDay)}`;
        }
    </script>
</body></html>
