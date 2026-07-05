<!DOCTYPE html>

<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Clitoria Admin - Upload New Gallery</title>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface": "#fbf8ff",
                    "inverse-surface": "#2a2e4c",
                    "on-error-container": "#93000a",
                    "surface-bright": "#fbf8ff",
                    "primary": "#432b9f",
                    "inverse-on-surface": "#f0efff",
                    "secondary-fixed-dim": "#cbbeff",
                    "background": "#fbf8ff",
                    "surface-container-highest": "#dfe0ff",
                    "inverse-primary": "#cabeff",
                    "secondary-fixed": "#e6deff",
                    "surface-container-high": "#e6e6ff",
                    "on-surface": "#151936",
                    "error": "#ba1a1a",
                    "on-tertiary-container": "#a2e373",
                    "on-background": "#151936",
                    "surface-dim": "#d5d7fe",
                    "primary-fixed": "#e6deff",
                    "on-primary-fixed-variant": "#4831a4",
                    "on-secondary-container": "#371b8f",
                    "surface-tint": "#604bbd",
                    "on-tertiary": "#ffffff",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed": "#b3f582",
                    "on-tertiary-fixed": "#0b2000",
                    "on-primary": "#ffffff",
                    "on-surface-variant": "#484553",
                    "primary-fixed-dim": "#cabeff",
                    "on-error": "#ffffff",
                    "outline": "#797584",
                    "surface-container-lowest": "#ffffff",
                    "on-tertiary-fixed-variant": "#255100",
                    "on-primary-fixed": "#1c0062",
                    "tertiary-fixed-dim": "#98d869",
                    "on-secondary-fixed": "#1d0061",
                    "surface-container-low": "#f4f2ff",
                    "primary-container": "#5b46b8",
                    "secondary-container": "#a28dff",
                    "secondary": "#614cba",
                    "error-container": "#ffdad6",
                    "tertiary": "#224c00",
                    "tertiary-container": "#306600",
                    "on-secondary-fixed-variant": "#4931a1",
                    "surface-container": "#edecff",
                    "outline-variant": "#c9c4d5",
                    "surface-variant": "#dfe0ff",
                    "on-primary-container": "#d4caff"
            },
            "borderRadius": {
                    "DEFAULT": "1rem",
                    "lg": "2rem",
                    "xl": "3rem",
                    "full": "9999px"
            },
            "spacing": {
                    "section-gap": "120px",
                    "gutter": "24px",
                    "margin-desktop": "64px",
                    "base": "8px",
                    "margin-mobile": "20px",
                    "container-max": "1280px"
            },
            "fontFamily": {
                    "body-lg": ["Inter"],
                    "label-caps": ["Inter"],
                    "headline-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "label-md": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg": ["Inter"]
            },
            "fontSize": {
                    "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "letterSpacing": "0", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                    "display-lg-mobile": ["36px", {"lineHeight": "42px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        display: inline-block;
        line-height: 1;
      }
      .custom-shadow {
        box-shadow: 0 10px 30px 0 rgba(31, 35, 64, 0.04);
      }
      ::-webkit-scrollbar {
        width: 6px;
      }
      ::-webkit-scrollbar-track {
        background: transparent;
      }
      ::-webkit-scrollbar-thumb {
        background: #e6e0ff;
        border-radius: 10px;
      }
      .dropzone-dashed {
        background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='24' ry='24' stroke='%23432B9FFF' stroke-width='2' stroke-dasharray='12%2c 12' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
      }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface">

<!-- Persistent SideNavBar -->
<aside class="fixed left-0 top-0 h-full w-64 z-40 bg-surface-container-low dark:bg-surface-container-lowest shadow-sm flex flex-col gap-2 p-4 border-r border-outline-variant/30 overflow-y-auto">
    <!-- Logo Section -->
    <div class="flex items-center gap-3 px-2 py-6 mb-4">
        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">spa</span>
        </div>
        <div>
            <h1 class="font-headline-sm text-headline-sm font-bold text-primary dark:text-on-primary-container">Clitoria</h1>
            <p class="text-[10px] uppercase tracking-widest text-outline">Botanical Wellness</p>
        </div>
    </div>
    <!-- Navigation Tabs -->
    <nav class="flex flex-col gap-1">
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="{{ route('admin.dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label-md text-label-md">Dashboard</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="{{ route('admin.heroes.index') }}">
            <span class="material-symbols-outlined">stars</span>
            <span class="font-label-md text-label-md">Hero</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="{{ route('admin.benefits.index') }}">
            <span class="material-symbols-outlined">health_and_safety</span>
            <span class="font-label-md text-label-md">Benefits</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
            <span class="material-symbols-outlined">shopping_bag</span>
            <span class="font-label-md text-label-md">Products</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
            <span class="material-symbols-outlined">payments</span>
            <span class="font-label-md text-label-md">Product Pricing</span>
        </a>
        <!-- Active Tab: Gallery -->
        <a class="flex items-center gap-3 px-4 py-3 bg-secondary-fixed text-on-secondary-fixed-variant rounded-lg font-bold scale-[0.98] transition-transform" href="{{ route('admin.galleries.index') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">collections</span>
            <span class="font-label-md text-label-md">Gallery</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
            <span class="material-symbols-outlined">reviews</span>
            <span class="font-label-md text-label-md">Testimonials</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
            <span class="material-symbols-outlined">groups</span>
            <span class="font-label-md text-label-md">Team</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
            <span class="material-symbols-outlined">monitoring</span>
            <span class="font-label-md text-label-md">Sales</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label-md text-label-md">Business Settings</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
            <span class="material-symbols-outlined">handshake</span>
            <span class="font-label-md text-label-md">Partners</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed-dim/20 transition-all duration-200 rounded-lg" href="#">
            <span class="material-symbols-outlined">search_check</span>
            <span class="font-label-md text-label-md">SEO</span>
        </a>
    </nav>
    <!-- Footer Profile -->
    <div class="mt-auto pt-6 border-t border-outline-variant/20 flex items-center gap-3 px-2">
        <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_circle</span>
        </div>
        <div>
            <p class="font-label-md text-label-md text-on-surface">Admin User</p>
            <p class="text-[12px] text-on-surface-variant">Admin Manager</p>
        </div>
    </div>
</aside>

<!-- Main Content Canvas -->
<main class="ml-64 min-h-screen pb-32">
    <!-- Header -->
    <header class="h-20 bg-surface/80 backdrop-blur-xl sticky top-0 z-30 flex items-center justify-between px-margin-desktop border-b border-outline-variant/10">
        <div class="flex items-center gap-6">
            <a href="{{ route('admin.galleries.index') }}" class="group flex items-center gap-2 text-primary hover:translate-x-[-4px] transition-transform duration-200">
                <span class="material-symbols-outlined font-bold">arrow_back</span>
                <span class="font-label-md text-label-md">Back to List</span>
            </a>
            <h2 class="font-headline-md text-headline-md text-on-surface">Upload New Gallery</h2>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 rounded-full hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
            </button>
            <button class="p-2 rounded-full hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">help</span>
            </button>
        </div>
    </header>

    <!-- Form Content -->
    <div class="max-w-[1200px] mx-auto px-margin-desktop py-12">
        <form class="grid grid-cols-12 gap-gutter items-start" id="gallery-form"
              action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
            <div class="col-span-12 p-4 bg-error-container text-on-error-container rounded-xl font-label-md">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Left Column: Metadata -->
            <section class="col-span-12 lg:col-span-5 space-y-8">
                <div class="p-8 bg-surface-container-lowest rounded-lg custom-shadow space-y-8">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface-variant flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">edit_note</span>
                        Gallery Details
                    </h3>
                    <!-- Gallery Title -->
                    <div class="space-y-2">
                        <label class="block font-label-md text-label-md text-on-surface-variant px-1" for="title">Gallery Title</label>
                        <input id="title" name="title" value="{{ old('title') }}"
                               class="w-full h-[56px] px-6 rounded-xl bg-surface-container-low border-none focus:ring-2 focus:ring-primary/50 transition-all font-body-md text-on-surface placeholder:text-outline-variant"
                               placeholder="e.g. Summer Harvest Infusions" type="text"/>
                    </div>
                    <!-- Description -->
                    <div class="space-y-2">
                        <label class="block font-label-md text-label-md text-on-surface-variant px-1" for="description">Description</label>
                        <textarea id="description" name="description" rows="6"
                                  class="w-full p-6 rounded-xl bg-surface-container-low border-none focus:ring-2 focus:ring-primary/50 transition-all font-body-md text-on-surface placeholder:text-outline-variant resize-none"
                                  placeholder="Describe the story behind this gallery collection...">{{ old('description') }}</textarea>
                    </div>
                    <!-- Status Dropdown -->
                    <div class="space-y-2">
                        <label class="block font-label-md text-label-md text-on-surface-variant px-1" for="status">Publishing Status</label>
                        <div class="relative">
                            <select id="status" name="status"
                                    class="w-full h-[56px] px-6 rounded-xl bg-surface-container-low border-none focus:ring-2 focus:ring-primary/50 transition-all font-body-md text-on-surface appearance-none cursor-pointer">
                                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                <option value="scheduled" {{ old('status') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-outline">expand_more</span>
                        </div>
                    </div>
                </div>
                <!-- Organic Certification Badge -->
                <div class="flex items-center gap-3 p-4 bg-tertiary/5 rounded-xl border border-tertiary/10">
                    <span class="material-symbols-outlined text-tertiary" style="font-variation-settings: 'FILL' 1;">eco</span>
                    <p class="font-label-md text-label-md text-tertiary">All assets in this gallery will be tagged with 'Certified Organic' by default.</p>
                </div>
            </section>

            <!-- Right Column: Media -->
            <section class="col-span-12 lg:col-span-7">
                <div class="p-8 bg-surface-container-lowest rounded-lg custom-shadow">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface-variant flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">image</span>
                            Media Uploads
                        </h3>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full font-label-md text-[12px] font-bold">BATCH UPLOAD ENABLED</span>
                    </div>
                    <!-- Hidden file input -->
                    <input type="file" name="images[]" id="file-input" multiple accept="image/*" class="hidden"/>
                    <!-- Dropzone -->
                    <div class="dropzone-dashed min-h-[420px] rounded-lg flex flex-col items-center justify-center p-12 group hover:bg-primary-container/[0.02] transition-all cursor-pointer" id="dropzone">
                        <div class="w-20 h-20 rounded-full bg-secondary-fixed flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-primary text-[40px]">cloud_upload</span>
                        </div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface mb-2">Click to upload or drag and drop</h4>
                        <p class="font-body-md text-on-surface-variant text-center max-w-sm">
                            High-resolution botanical photography. Supports JPG, PNG, WEBP (Max 20MB per file).
                        </p>
                        <!-- Preview grid (hidden placeholders) -->
                        <div class="mt-10 grid grid-cols-3 gap-4 w-full opacity-30" id="preview-placeholder">
                            <div class="aspect-square bg-surface-container-high rounded-lg flex items-center justify-center">
                                <span class="material-symbols-outlined text-outline">add</span>
                            </div>
                            <div class="aspect-square bg-surface-container-high rounded-lg flex items-center justify-center">
                                <span class="material-symbols-outlined text-outline">add</span>
                            </div>
                            <div class="aspect-square bg-surface-container-high rounded-lg flex items-center justify-center">
                                <span class="material-symbols-outlined text-outline">add</span>
                            </div>
                        </div>
                        <!-- Image preview grid (shown after upload) -->
                        <div class="mt-10 grid grid-cols-3 gap-4 w-full hidden" id="preview-grid"></div>
                    </div>
                    <!-- Preview Hint -->
                    <div class="mt-8 pt-8 border-t border-outline-variant/20">
                        <div class="flex items-center gap-4 text-on-surface-variant">
                            <span class="material-symbols-outlined">info</span>
                            <p class="font-body-md">Uploaded images are automatically optimized with 20px backdrop blur infusion effects for the shop preview.</p>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <!-- Sticky Action Bar -->
    <footer class="fixed bottom-0 right-0 left-64 h-24 bg-surface/90 backdrop-blur-2xl border-t border-outline-variant/20 px-margin-desktop flex items-center justify-end gap-6 z-40">
        <a href="{{ route('admin.galleries.index') }}"
           class="px-8 py-3 rounded-full font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-high transition-colors">
            Cancel
        </a>
        <button class="px-10 py-4 rounded-full font-label-md text-label-md bg-primary-container text-white shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center gap-3"
                form="gallery-form" type="submit" id="save-btn">
            <span class="material-symbols-outlined">save</span>
            Save Gallery
        </button>
    </footer>
</main>

<script>
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('file-input');
    const previewGrid = document.getElementById('preview-grid');
    const previewPlaceholder = document.getElementById('preview-placeholder');

    dropzone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzone.classList.add('bg-primary-container/[0.05]');
    });

    dropzone.addEventListener('dragleave', () => {
        dropzone.classList.remove('bg-primary-container/[0.05]');
    });

    dropzone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzone.classList.remove('bg-primary-container/[0.05]');
        handleFiles(e.dataTransfer.files);
    });

    dropzone.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', () => {
        handleFiles(fileInput.files);
    });

    function handleFiles(files) {
        if (!files || files.length === 0) return;
        previewPlaceholder.classList.add('hidden');
        previewGrid.classList.remove('hidden');
        previewGrid.innerHTML = '';

        Array.from(files).forEach(file => {
            if (!file.type.startsWith('image/')) return;
            const reader = new FileReader();
            reader.onload = (e) => {
                const div = document.createElement('div');
                div.className = 'aspect-square bg-surface-container-high rounded-lg overflow-hidden';
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'w-full h-full object-cover';
                div.appendChild(img);
                previewGrid.appendChild(div);
            };
            reader.readAsDataURL(file);
        });
    }

    // Form submission feedback
    document.getElementById('gallery-form').addEventListener('submit', (e) => {
        const btn = document.getElementById('save-btn');
        btn.innerHTML = `<span class="material-symbols-outlined animate-spin">sync</span> Saving...`;
        btn.classList.add('opacity-80');
        btn.disabled = true;
    });
</script>
</body>
</html>
