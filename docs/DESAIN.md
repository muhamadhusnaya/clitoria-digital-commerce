# Clitoria Digital Commerce Platform - UI/UX Specification & Source of Truth

Dokumen ini merupakan panduan implementasi rekayasa antarmuka (UI/UX) resmi untuk platform Clitoria Digital Commerce. Panduan ini diekstraksi langsung dari desain terhubung dalam project Google Stitch dan ditujukan bagi AI Coding Agents, Laravel Developers, Frontend Engineers, serta QA Engineers untuk menjamin akurasi piksel dan keselarasan fungsionalitas sistem.

---

## DAFTAR ISI
1. [SISTEM DESAIN (DESIGN SYSTEM)](#1-sistem-desain-design-system)
   - [Palet Warna](#palet-warna)
   - [Tipografi](#tipografi)
   - [Sistem Spasi (Spacing System)](#sistem-spasi-spacing-system)
   - [Border Radius](#border-radius)
   - [Elevasi & Shadow](#elevasi--shadow)
2. [STRATEGI RESPONSIF (RESPONSIVE STRATEGY)](#2-strategi-responsif-responsive-strategy)
3. [INVENTARISASI HALAMAN (PAGE INVENTORY)](#3-inventarisasi-halaman-page-inventory)
4. [STRUKTUR HALAMAN (PAGE STRUCTURE & LAYOUT TREE)](#4-struktur-halaman-page-structure--layout-tree)
5. [REGISTRI KOMPONEN (COMPONENT REGISTRY)](#5-registri-komponen-component-registry)
6. [STRUKTUR NAVIGASI (SITEMAP)](#6-struktur-navigasi-sitemap)
7. [ALUR INTERAKSI (INTERACTION FLOWS)](#7-alur-interaksi-interaction-flows)
8. [STRUKTUR PANEL ADMIN (ADMIN PANEL STRUCTURE)](#8-struktur-panel-admin-admin-panel-structure)
9. [ATURAN IMPLEMENTASI ANTARMUKA (UI IMPLEMENTATION RULES)](#9-aturan-implementasi-antarmuka-ui-implementation-rules)
10. [SPESIFIKASI ANIMASI (ANIMATION SPECIFICATIONS)](#10-spesifikasi-animasi-animation-specifications)
11. [KONTRAK IMPLEMENTASI UI (UI CONTRACT)](#11-kontrak-implementasi-ui-ui-contract)

---

## 1. SISTEM DESAIN (DESIGN SYSTEM)

### Palet Warna
Sistem ini menggunakan palet warna bertema **Modern Minimalist dengan Tonal Depth** yang menggabungkan warna ungu pekat bunga telang (Butterfly Pea) dengan aksen hijau segar yang melambangkan keaslian organik produk.

| Nama Warna | Kode HEX | Variabel Tailwind / CSS | Penggunaan Utama |
| :--- | :--- | :--- | :--- |
| **Primary** | `#432B9F` | `bg-primary`, `text-primary` | Aksi utama, tombol penting, header penegas brand, indikator aktif sidebar. |
| **Primary Container** | `#5B46B8` | `bg-primary-container` | Latar belakang tombol utama publik, container hover state. |
| **Secondary** | `#614CBA` | `bg-secondary`, `text-secondary` | Gradient penyeimbang, state interaktif sekunder, teks subjudul. |
| **Secondary Container** | `#A28DFF` | `bg-secondary-container` | Isian hover sekunder, highlight teks terpilih, aksen bento grid. |
| **Tertiary** | `#224C00` | `text-tertiary` | Aksen label organik/alami, badge sertifikasi, ikon centang hijau. |
| **Tertiary Container** | `#306600` | `bg-tertiary-container` | Latar belakang badge organik, status delivered admin. |
| **Tertiary Fixed** | `#B3F582` | `bg-tertiary-fixed` | Badge delivered, highlight kesuksesan transaksi admin. |
| **Tertiary Fixed Dim**| `#98D869` | `bg-tertiary-fixed-dim` | Indikator grafis pertumbuhan positif di dashboard admin. |
| **Error** | `#BA1A1A` | `text-error`, `bg-error` | Pesan error, tombol delete/hapus, status gagal, notifikasi penting. |
| **Error Container** | `#FFDAD6` | `bg-error-container` | Latar belakang pesan peringatan atau error. |
| **Background** | `#FBF8FF` | `bg-background` | Latar belakang kanvas utama aplikasi (Public & Admin). |
| **Surface** | `#FBF8FF` | `bg-surface` | Latar belakang container utama, bar navigasi, footer. |
| **Surface Dim** | `#D5D7FE` | `bg-surface-dim` | Border divider, latar belakang area non-aktif. |
| **Surface Bright** | `#FBF8FF` | `bg-surface-bright` | Kontras area teraktif. |
| **Surface Container Lowest** | `#FFFFFF` | `bg-surface-container-lowest` | Latar belakang kartu item (Product Card, Benefit Card). |
| **Surface Container Low** | `#F4F2FF` | `bg-surface-container-low` | Latar belakang section sekunder, input field non-aktif. |
| **Surface Container** | `#EDECFF` | `bg-surface-container` | Latar belakang baris tabel ganjil, border tipis aksen. |
| **Surface Container High**| `#E6E6FF` | `bg-surface-container-high` | Divider antar kolom, latar belakang area dropzone. |
| **Surface Container Highest**| `#DFE0FF` | `bg-surface-container-highest` | Latar belakang menu overlay mobile, sidebar footer. |
| **On Surface** | `#151936` | `text-on-surface` | Teks judul utama, isi paragraf aktif, label form dominan. |
| **On Surface Variant** | `#484553` | `text-on-surface-variant` | Teks keterangan sekunder, deskripsi produk, ikon utility. |
| **Outline** | `#797584` | `border-outline` | Border input field terfokus, border pembatas area tabel. |
| **Outline Variant** | `#C9C4D5` | `border-outline-variant` | Divider halus, border pembatas kartu produk non-aktif. |

---

### Tipografi
Keluarga font utama adalah **Inter** secara eksklusif untuk seluruh elemen antarmuka guna menghadirkan estetika presisi sistematis modern. Untuk Admin Login, font branding pendukung **Poppins** diperbolehkan khusus untuk logo utama.

*   **display-lg (Headline Utama Desktop)**
    *   Font Family: `Inter`, sans-serif
    *   Size: `48px`
    *   Weight: `700` (Bold)
    *   Line Height: `56px`
    *   Letter Spacing: `-0.02em`
*   **display-lg-mobile (Headline Utama Mobile)**
    *   Font Family: `Inter`, sans-serif
    *   Size: `36px`
    *   Weight: `700` (Bold)
    *   Line Height: `42px`
    *   Letter Spacing: `-0.02em`
*   **headline-md (Sub-headline Menengah)**
    *   Font Family: `Inter`, sans-serif
    *   Size: `32px`
    *   Weight: `600` (Semi-Bold)
    *   Line Height: `40px`
    *   Letter Spacing: `-0.01em`
*   **headline-sm (Sub-headline Kecil & Nama Produk)**
    *   Font Family: `Inter`, sans-serif
    *   Size: `24px`
    *   Weight: `600` (Semi-Bold)
    *   Line Height: `32px`
    *   Letter Spacing: `0`
*   **body-lg (Paragraf Pengantar & Deskripsi Utama)**
    *   Font Family: `Inter`, sans-serif
    *   Size: `18px`
    *   Weight: `400` (Regular)
    *   Line Height: `28px`
    *   Letter Spacing: `0`
*   **body-md (Teks Paragraf Umum & Deskripsi Kartu)**
    *   Font Family: `Inter`, sans-serif
    *   Size: `16px`
    *   Weight: `400` (Regular)
    *   Line Height: `24px`
    *   Letter Spacing: `0`
*   **label-md (Teks Tombol & Input Label)**
    *   Font Family: `Inter`, sans-serif
    *   Size: `14px`
    *   Weight: `500` (Medium)
    *   Line Height: `20px`
    *   Letter Spacing: `0.02em`
*   **label-caps (Badge, Kategori & Tag Kapital)**
    *   Font Family: `Inter`, sans-serif
    *   Size: `12px`
    *   Weight: `600` (Semi-Bold)
    *   Line Height: `16px`
    *   Letter Spacing: `0.05em`
    *   Transform: `uppercase`

---

### Sistem Spasi (Spacing System)
Skala spasi linier berbasis 8px digunakan untuk menjaga konsistensi ritme layout.

*   **base (Unit Spasi Dasar):** `8px`
*   **gutter (Jarak Antar Kolom Grid):** `24px`
*   **margin-desktop (Margin Sisi Kiri-Kanan Desktop):** `64px`
*   **margin-mobile (Margin Sisi Kiri-Kanan Mobile):** `20px`
*   **section-gap (Jarak Antar Bagian Layout):** `120px` (Desktop) / `80px` (Mobile)
*   **container-max (Lebar Maksimal Konten):** `1280px`

---

### Border Radius
Radius sudut dirancang melengkung lembut (highly organic shape language) untuk memberikan kesan ramah namun elegan.

*   `rounded-sm` / `sm`: `0.5rem` (`8px`) - Digunakan untuk thumbnail kecil atau tombol aksi ikonik admin.
*   `rounded-DEFAULT` / `DEFAULT`: `1rem` (`16px`) - Digunakan untuk kartu review testimonial, tabel header, dan dropzone.
*   `rounded-md` / `md`: `1.5rem` (`24px`) - Digunakan untuk kartu produk (`Product Card`), kartu manfaat (`Benefit Card`), container bento, dan input form admin.
*   `rounded-lg` / `lg`: `2rem` (`32px`) - Digunakan untuk area visual dekoratif dan form login wrapper.
*   `rounded-xl` / `xl`: `3rem` (`48px`) - Digunakan untuk hero image container.
*   `rounded-full` / `full`: `9999px` - Digunakan untuk tombol utama publik, badge/chip status, avatar pengguna, dan floating action button.

---

### Elevasi & Shadow

*   **Soft Ambient Shadow (`soft-shadow`):**
    `box-shadow: 0 10px 30px -5px rgba(21, 25, 54, 0.04);`
    Pancaran bayangan halus transparan untuk membedakan kartu produk dan bento dari canvas background publik tanpa border kasar.
*   **Premium Admin Shadow (`shadow-premium`):**
    `box-shadow: 0 10px 30px rgba(31, 35, 64, 0.04);`
    Digunakan khusus di panel admin untuk kartu KPI dashboard, tabel inventaris, dan chart bento.
*   **Glassmorphic Overlay (`glass-effect`):**
    `background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);`
    Digunakan pada top header navigasi (shared component) dan modal overlay transparan.

---

## 2. STRATEGI RESPONSIF (RESPONSIVE STRATEGY)

Sistem mengadopsi pendekatan **Fluid-Fixed Hybrid** dengan dua target breakpoint utama:

### Desktop (Viewport Width >= 1024px)
*   **Lebar Grid:** Konten dikunci pada `max-w-[1280px]` terpusat (`mx-auto`) dengan padding margin kiri-kanan `px-16` (64px).
*   **Layout Navigasi:** Header horizontal penuh, navigasi link terlihat di tengah (`Shop`, `Benefits`, `Gallery`, `About`), tombol checkout `Cart (0)` permanen di sebelah kanan.
*   **Grid System:** Menggunakan grid 12 kolom standar. Kartu manfaat diposisikan 4 kolom per baris, kartu produk terpilih 4 kolom per baris.
*   **Adaptasi Komponen:** Galeri gaya masonry tersusun dalam 3 kolom seimbang.

### Mobile (Viewport Width < 1024px)
*   **Lebar Grid:** Lebar fluid penuh mengikuti lebar layar dengan margin sisi kiri-kanan `px-5` (20px). Jarak antar section disusutkan menjadi `section-gap` mobile (80px).
*   **Layout Navigasi:** Navigasi tengah disembunyikan. Header hanya menampilkan Hamburger Toggle di ujung kiri, Logo di tengah, Search & Shopping Bag di ujung kanan. Menu tautan dipindahkan ke **Mobile Menu Overlay** transparan yang bergeser masuk dari sisi kanan layar (`translate-x-full` ke `translate-x-0`).
*   **Grid System:** Grid disusutkan menjadi 4 kolom. Kartu manfaat ditumpuk vertikal (1 kolom per baris).
*   **Adaptasi Komponen:** Kartu produk dikonversi menjadi barisan slider horizontal yang dapat digeser (`overflow-x-auto no-scrollbar`). Galeri gaya masonry disederhanakan menjadi 2 kolom. Ditambahkan tombol melayang **Cart FAB** di pojok kanan bawah (`fixed bottom-6 right-6`).
*   **Navigasi Bawah (Sticky Bottom Nav):** Navigasi permanen 4 tombol (`Home`, `Products` [Active], `Saved`, `Account`) dengan ikon material.

---

## 3. INVENTARISASI HALAMAN (PAGE INVENTORY)

| Nama Halaman | Kegunaan Utama | Saran Rute (Laravel) | CTA Utama | CTA Sekunder |
| :--- | :--- | :--- | :--- | :--- |
| **Landing Page** | Memperkenalkan brand Clitoria, memaparkan nilai manfaat herbal telang, menyajikan pratinjau produk pilihan, galeri gaya hidup, testimonial konsumen, dan mengajak konversi. | `/` <br> `(route: home)` | "Shop Now" (Mengarahkan ke `/products`) | "Learn More" (Mengarahkan ke `/about`) |
| **Product Catalog** | Menampilkan seluruh inventaris produk telang dengan fitur filter kategori terpusat. | `/products` <br> `(route: products.index)` | "Buy Now" (Membuka rute WhatsApp) | "Add to Bag" (Menyimpan item ke keranjang lokal) |
| **Product Detail** | Memaparkan informasi detail bahan, sertifikasi organik, ritme penyeduhan, ulasan bintang, dan pemilihan bobot produk. | `/products/{slug}` <br> `(route: products.show)` | "Order via WhatsApp" (Checkout instan) | Weight Selector ("100g", "250g", "500g") |
| **Cart & Checkout** | Halaman tinjauan keranjang untuk menyesuaikan jumlah barang dan meneruskannya ke WhatsApp chat. | `/cart` <br> `(route: cart.index)` | "Order via WhatsApp" | Increment/Decrement Quantity (`+`/`–`) |
| **Admin Login** | Gerbang autentikasi aman bagi administrator sistem. | `/admin/login` <br> `(route: admin.login)` | "Access Console" | "Forgot?" (Pemulihan sandi) |
| **Dashboard Overview**| Panel utama pemantauan KPI bisnis (pendapatan, transaksi manual, total ulasan, statistik bar). | `/admin/dashboard` <br> `(route: admin.dashboard)` | "Visit Store" | Filter Waktu ("W", "M", "Y") |
| **Product CMS** | Kelola inventaris produk aktif, status terbit, data slug, dan gambar produk. | `/admin/products` <br> `(route: admin.products.index)`| "Create New Product" | "Edit" & "Delete" (Aksi Ikonik) |
| **Sales Manual Entry** | Form kasir internal untuk memasukkan data transaksi yang berasal secara manual dari WhatsApp. | `/admin/sales/create` <br> `(route: admin.sales.create)`| "Save Sale" | "Add Item" |
| **Unified Settings** | Halaman integrasi kontak WhatsApp bisnis, peta fisik, dan optimasi tag meta SEO (Meta Title/Description). | `/admin/settings` <br> `(route: admin.settings.edit)`| "Save Settings" | "Discard" |
| **CMS Benefits** | CRUD manfaat kesehatan (Mood booster, Antioxidants, 100% Organic, dll). | `/admin/benefits` <br> `(route: admin.benefits.index)`| "Create New Benefit" | "Edit" & "Delete" |
| **CMS Testimonials** | CRUD ulasan pelanggan yang ditampilkan di beranda publik. | `/admin/testimonials` <br> `(route: admin.testimonials.index)`| "Add Testimonial" | "Edit" & "Delete" |
| **CMS Gallery** | CRUD foto-foto gaya hidup komunitas penikmat teh Clitoria. | `/admin/gallery` <br> `(route: admin.gallery.index)`| "Upload Image" | "Edit" & "Delete" |
| **CMS Team** | CRUD anggota tim internal Clitoria. | `/admin/team` <br> `(route: admin.team.index)`| "Add Member" | "Edit" & "Delete" |
| **CMS Partners** | CRUD logo kolaborasi media pers (Vogue, Hypebeast, Wired, dll). | `/admin/partners` <br> `(route: admin.partners.index)`| "Add Partner" | "Edit" & "Delete" |
| **CMS Hero Section** | Panel khusus edit teks utama, subjudul, dan tautan gambar hero beranda. | `/admin/hero` <br> `(route: admin.hero.edit)`| "Save Changes" | "Discard" |

---

## 4. STRUKTUR HALAMAN (PAGE STRUCTURE & LAYOUT TREE)

### 1. Landing Page (Desktop View)
```text
Header Navigasi (fixed, glass-effect)
 ├── Logo Brand (SVG Icon + "Clitoria" text)
 ├── Tautan Navigasi (Shop, Benefits, Gallery, About)
 └── Tombol Utama (Cart (0))

Main Content
 ├── Hero Section (bg-gradient-to-br from-surface to-surface-container)
 │    ├── Konten Kiri: Teks Judul Utama ("Where Flavor Meets Innovation"), Deskripsi, Tombol Aksi (Shop Now, Learn More)
 │    └── Konten Kanan: Central Product Image (Frosted glass bottle sapphire blue), Decorative Floating Flowers, Blur SVG Pulse background
 ├── Benefits Section ("The Magic of Clitoria")
 │    ├── Section Header (Title, Subtitle)
 │    └── Grid Manfaat (4 Columns)
 │         └── Benefit Cards (Material Icon, Title, Description)
 ├── Featured Products Section ("Curated Selections")
 │    ├── Header Section (Title, Subtitle + "View All Products" Link with arrow icon)
 │    └── Grid Produk (4 Columns)
 │         └── Product Cards (Matte white container, Image with gradient, Name, Price)
 ├── Gallery Section ("The Clitoria Lifestyle")
 │    ├── Section Header (Title, Subtitle)
 │    └── Masonry Layout (3 Columns)
 │         └── Gallery Images (Hover-zoom scale-105 overlay)
 ├── Testimonials Section ("Loved by Thousands")
 │    ├── Section Header (Title, 5-Star rating icon indicator)
 │    └── Carousel Box (Quotation mark icon, Review Quote, Author Avatar, Name, Title)
 │         └── Navigation Buttons (Chevron Left, Chevron Right)
 ├── Partners Section (opacity-50 grayscale)
 │    └── Logo Cloud (VOGUE, Hypebeast, WIRED, Well+Good, Self)
 └── Contact Section
      ├── Konten Kiri: Teks Undangan Kolaborasi, Detail Kontak (Email, Physical Flagship Address)
      └── Konten Kanan: WhatsApp Checkout Card (WhatsApp SVG icon, Deskripsi, CTA "Chat via WhatsApp" green button)

Footer Section (bg-surface-container-highest)
 ├── Footer Links Grid (Product links, Company stories, Support FAQs)
 ├── Brand Column (Logo brand + Slogan)
 └── Bottom Footer Row (Copyright text, Privacy Policy link, Terms of Service link)
```

### 2. Product Catalog (Desktop View)
```text
Header Navigasi (fixed, bg-surface/80 blur)
 ├── Logo Brand & Tautan Navigasi (Benefits, Products [Active], Sustainability, Our Ritual)
 └── Tombol Utama (Order via WhatsApp, Search Icon, Shopping Bag Icon with badge)

Main Content
 ├── Breadcrumbs (Admin / Inventory / Products)
 ├── Hero Title Section (Title "The Blue Collection", Subtitle description)
 ├── Filter Sticky Bar (Category Buttons: All Collections, Teas, Powders, Extracts + Sort Dropdown)
 └── Product Grid (3 Columns)
      └── Catalog Product Cards
           ├── Image Container (Gradient backdrop, Bestseller badge, Hover zoom img)
           ├── Product Info (Title, Price, Organic badge, Description)
           └── Action Buttons (Pill button "Buy Now" + Icon button "Add to Bag")

Pagination Bar
 └── Navigation Buttons (Chevron Left, Page Numbers [1 is active], Chevron Right)

Footer Section (bg-surface)
```

### 3. Product Detail (Desktop View)
```text
Header Navigasi (fixed)
Main Content (pt-32 pb-section-gap Grid 12 Columns)
 ├── Sisi Kiri (7 Columns): Galeri Detail
 │    ├── Gambar Produk Utama (Organic certification badge overlay)
 │    └── Thumbnail Grid (4 buttons: Macro leaf, Teapot brewing, Color transition, Packaging)
 └── Sisi Kanan (5 Columns): Form Pemesanan
      ├── Badge Signature, Judul Produk ("Sacred Blue Butterfly Pea Tea"), Rating Bintang, Harga ($32.00)
      ├── Pemilihan Bobot (Grid 3 Buttons: 100g [Active], 250g, 500g)
      ├── Tombol Konversi Utama ("Order via WhatsApp")
      ├── Deskripsi Khasiat Teh & Centang Checklist (3 Khasiat Utama)
      └── Bento Details Grid (3 Columns: Ethically Sourced, The Ritual, Global Delivery)

Footer Section (bg-surface)
```

### 4. Cart & Checkout (Desktop View)
```text
Header Navigasi (fixed)
Main Content (Grid 12 Columns)
 ├── Sisi Kiri (8 Columns): Area Belanja
 │    ├── Judul Halaman ("Review Your Order", Subtitle)
 │    ├── Keranjang List (Cart Items: Product Img, Title, Weight, Qty Selector, Delete, Subtotal)
 │    └── Shipping Info (Complimentary Shipping indicator with delivery icon)
 └── Sisi Kanan (4 Columns): Summary Panel
      ├── Summary Card (Subtotal, Tax, Free Shipping, Grand Total, CTA "Order via WhatsApp", Security badges)
      └── Testimonial Widget (Verified member quote card)

Footer Section (bg-surface)
```

### 5. Admin Login Page
```text
Main Content (Split Screen 50% left, 50% right)
 ├── Sisi Kiri (Brand Visuals): Gradient Background
 │    ├── Logo Brand Clitoria, Headline ("Cultivating Digital Tranquility"), Subtitle
 │    └── Product Mockup (Frosted glass bottle with customer quote banner)
 └── Sisi Kanan (Login Form): Form Container
      ├── Form Header ("Admin Portal")
      ├── Email Input (Icon envelope prefix, input box)
      ├── Password Input (Icon lock prefix, input box, visibility toggle, forgot password link)
      ├── Remember Me Checkbox
      ├── Tombol Submit ("Access Console")
      └── Footer Credits ("Authorized Personnel Only" warning divider)
```

### 6. Admin Dashboard Overview
```text
Sidebar Navigasi (fixed, left)
 ├── Logo Brand & Slogan
 └── Tautan Menu (Dashboard [Active], Products, Pricing, Benefits, Gallery, Testimonials, Team, Sales, Partners, SEO, Settings)

Main Content (ml-64)
 ├── Top App Bar (Title "Overview", Subtitle, Search bar, Notification Bell, CTA "Visit Store")
 ├── KPI Grid (4 Columns)
 │    ├── KPI 1: Total Products (Value, trending pill green)
 │    ├── KPI 2: Sales This Month (Value, trending pill green)
 │    ├── KPI 3: Total Revenue (Value, trending pill green)
 │    └── KPI 4: Total Testimonials (Value, trending pill green)
 ├── Analytics Section (Grid 3 Columns)
 │    ├── Revenue Chart Card (2 Columns: Period Selector [W, M, Y], Simulated weekly bar chart)
 │    └── Sales Pulse Card (1 Column: Progress bars: Direct, Partner, Marketplace)
 └── Recent Sales Table Section (Table header + Table list)

Footer (bg-surface)
```

### 7. Admin Sales Entry (Manual Logging)
```text
Sidebar Navigasi (fixed, left)
Main Content (ml-64)
 ├── Page Header (Sales Title, CTA "Save Sale")
 └── Grid Form (12 Columns)
      ├── Sisi Kiri (8 Columns): Form Inputs
      │    ├── Customer & Date Form (Customer name input, Date picker, Notes textarea)
      │    └── Order Items CRUD Table (Add Item button, Dropdown product, Qty selector, Price input, Subtotal, Delete button)
      └── Sisi Kanan (4 Columns): Summary & Stats
           ├── Grand Total Card (Final Cost, Tax, Status pill)
           ├── WhatsApp Order Tip Card (Image banner, text tip)
           └── Daily Progress Widget (Micro progress bar chart)
```

### 8. Admin Unified Settings
```text
Sidebar Navigasi (fixed, left)
Main Content (ml-64)
 ├── Header (Breadcrumbs, Profile badge, Search)
 ├── Grid Konten (2 Columns)
 │    ├── Sisi Kiri: Business Identity Form (WhatsApp input, Email input, Instagram input, Address textarea, Map preview image)
 │    └── Sisi Kanan: SEO Form (Meta Title input + counter, Meta Description textarea + counter, Meta Keywords tag input, Open Graph Image dropzone preview)
 └── Sticky Bottom Action Bar (Discard button, Save Settings button)
```

---

## 5. COMPONENT REGISTRY (REGISTRI KOMPONEN)

Setiap komponen yang diimplementasikan wajib mematuhi arsitektur properti (Props), variasi (Variants), serta state antarmuka yang didefinisikan secara deterministik di bawah ini.

### 1. Navigasi Utama Publik (Navbar)
*   **Purpose:** Navigasi global untuk halaman customer, menampilkan status keranjang, pencarian, dan tautan belanja.
*   **Variants:**
    *   `Desktop`: Bar horizontal penuh, link teks terlihat di tengah.
    *   `Mobile`: Menggunakan menu burger di kiri, pencarian dan tas keranjang di kanan, menu tautan tersembunyi dalam drawer panel overlay.
*   **Props/Data Requirements:**
    *   `cartCount` (Integer): Jumlah item aktif di keranjang lokal.
    *   `activeLink` (String): Mengidentifikasi halaman aktif untuk styling border penanda.
*   **States:**
    *   `Default`: Transparan dengan efek glassmorphic backdrop-blur (`bg-surface/80`).
    *   `Scrolled`: Mengecil (`py-2` dari `py-0`), bayangan menyebar (`shadow-md`), pembatas bawah tajam (`border-b border-outline-variant`).
    *   `Drawer Open` (Mobile): Panel menu meluncur dari kanan (`translate-x-0`).

### 2. Kartu Manfaat (Benefit Card)
*   **Purpose:** Menampilkan keunggulan produk telang pada beranda utama publik.
*   **Variants:**
    *   `Standard`: Kartu grid putih bersih dengan icon lavender melingkar.
*   **Props/Data Requirements:**
    *   `iconName` (String): Nama ikon Material Symbols (e.g. `mood`, `shield`, `leaf`, `magic_button`).
    *   `title` (String): Judul manfaat.
    *   `description` (String): Penjelasan singkat manfaat kesehatan.
*   **States:**
    *   `Default`: Putih bersih, border tipis (`border-outline-variant`), bayangan tipis (`soft-shadow`).
    *   `Hover`: Border berganti ke primary (`border-primary`), bayangan membesar, ikon dalam lingkaran berganti warna latar belakang ke primary dan ikon menjadi putih (`bg-primary text-on-primary`), skala kartu terangkat (`scale-102`).

### 3. Kartu Produk (Product Card)
*   **Purpose:** Menampilkan daftar katalog produk di Landing Page dan Halaman Catalog.
*   **Variants:**
    *   `Catalog Grid`: Dilengkapi deskripsi panjang, tombol beli seketika ("Buy Now"), dan ikon add-to-cart terpisah.
    *   `Homepage Carousel`: Tampilan ringkas, gambar produk diutamakan dengan tombol add-to-bag di bawah.
*   **Props/Data Requirements:**
    *   `productName` (String): Nama produk.
    *   `imageUrl` (String): URL gambar resolusi tinggi produk.
    *   `category` (String): Kategori produk (Teas, Powders, Extracts).
    *   `price` (Decimal): Harga jual produk.
    *   `badgeText` (String/Nullable): Label promo ("Best Seller", "New Release", "Limited Edition").
    *   `organicCertified` (Boolean): Aksen ikon daun telang penegas sertifikasi organik.
*   **States:**
    *   `Default`: Latar belakang gradasi kartu lembut (`#E6E0FF` ke `#FFFFFF`), bayangan statis tipis.
    *   `Hover`: Bayangan melebar tajam (`shadow-xl`), gambar produk membesar perlahan (`scale-110`), border tombol buy now menyala.

### 4. Kartu Ulasan (Testimonial Card / Carousel)
*   **Purpose:** Menampilkan testimoni pelanggan pilihan untuk memperkuat kredibilitas produk.
*   **Variants:**
    *   `Public Homepage`: Kartu putih dengan quotation mark SVG ikon lavender.
    *   `Cart Widget`: Kartu mini di samping kolom checkout bertema `bg-primary-container`.
*   **Props/Data Requirements:**
    *   `ratingStars` (Integer, 1-5): Rating ulasan.
    *   `quoteContent` (String): Kutipan testimonial.
    *   `authorAvatar` (String): URL foto pengulas.
    *   `authorName` (String): Nama pengulas.
    *   `authorTitle` (String): Kredensial pengulas (e.g. "Wellness Blogger").
*   **States:**
    *   `Active`: Menampilkan data kutipan terpilih dengan transisi fade-in.
    *   `Next/Prev Click`: Efek geser halus horizontal.

### 5. Sidebar Navigasi Admin (SideNavBar)
*   **Purpose:** Pengontrol navigasi utama konsol administrasi backend.
*   **Variants:**
    *   `Desktop Only`: Panel samping kiri terkunci (`fixed left-0 w-64 h-full`).
*   **Props/Data Requirements:**
    *   `activeRoute` (String): Penentu menu aktif.
    *   `adminName` (String), `adminAvatar` (String): Data profil admin untuk widget footer logout.
*   **States:**
    *   `Active Link`: Latar belakang sewarna `bg-primary-container` (`#5b46b8` / `#edecff`), teks tebal berwarna kontras, indikator border kanan menyala.
    *   `Hover Link`: Pergeseran horizontal tipis (`hover:translate-x-1`), warna latar belakang berubah transparan tipis (`bg-surface-container-high`).

### 6. Kartu Indikator Bisnis (KPI Card)
*   **Purpose:** Menampilkan rangkuman angka metrik keuangan dan operasional admin.
*   **Variants:**
    *   `Standard`: Kartu bento indikator dashboard.
*   **Props/Data Requirements:**
    *   `title` (String): Judul metrik (e.g. "Total Revenue").
    *   `value` (String): Nilai angka terhitung (e.g. "$412.5k").
    *   `trendPercentage` (String): Persentase naik/turun (e.g. "+12%").
    *   `icon` (String): Ikon metrik terkait.
*   **States:**
    *   `Default`: Bayangan premium statis, border tipis.
    *   `Hover`: Kartu terangkat ke atas setinggi 4px (`translate-y-[-4px]`), warna icon berganti dominan.

---

## 6. STRUKTUR NAVIGASI (SITEMAP)

Berikut merupakan peta navigasi lengkap Clitoria Platform, mencakup bagian publik konsumen dan konsol administrasi internal.

```text
Clitoria Digital Commerce Platform
│
├── [Rute Publik (Customer Experience)]
│    ├── Landing Page (Beranda Utama) [Rute: / ]
│    │    ├── Section: Hero Slogan
│    │    ├── Section: Benefits (Magic of Clitoria)
│    │    ├── Section: Curated Selections (Featured)
│    │    ├── Section: Lifestyle Gallery
│    │    ├── Section: Testimonials
│    │    ├── Section: Partners (Press Cloud)
│    │    └── Section: Contact (WhatsApp Checkout Concierge)
│    │
│    ├── Product Catalog (Daftar Produk Lengkap) [Rute: /products ]
│    │    ├── Filter Kategori: All Collections
│    │    ├── Filter Kategori: Teas
│    │    ├── Filter Kategori: Powders
│    │    └── Filter Kategori: Extracts
│    │
│    ├── Product Detail (Detail Halaman Produk) [Rute: /products/{slug} ]
│    │    ├── Pilihan Varian: Berat 100g, 250g, 500g
│    │    └── Aksi: Beli Seketika / Keranjang
│    │
│    └── Shopping Cart & Checkout (Keranjang Belanja) [Rute: /cart ]
│         └── Aksi: Kirim Pesanan / Konversi WhatsApp Concierge
│
└── [Rute Manajemen Internal (Admin Console)]
     ├── Admin Login Gateway [Rute: /admin/login ]
     └── Admin Dashboard (Authenticated Workspace)
          ├── Overview Dashboard [Rute: /admin/dashboard ]
          │    ├── KPI Cards: Revenue, Sales, Products, Reviews
          │    ├── Analytics: Revenue Chart, Sales Pulse Progress
          │    └── Table: Recent Sales Table
          │
          ├── Product CMS (CRUD Inventory) [Rute: /admin/products ]
          ├── Sales Manual Entry (Kasir WhatsApp Log) [Rute: /admin/sales/create ]
          ├── General & SEO Settings (Business Identity) [Rute: /admin/settings ]
          ├── CMS Benefits [Rute: /admin/benefits ]
          ├── CMS Testimonials [Rute: /admin/testimonials ]
          ├── CMS Gallery [Rute: /admin/gallery ]
          ├── CMS Team [Rute: /admin/team ]
          └── CMS Partners [Rute: /admin/partners ]
```

---

## 7. ALUR INTERAKSI (INTERACTION FLOWS)

### Alur Pembelian Produk (Product Purchase Flow)
Proses pembelian dirancang terintegrasi erat dengan aplikasi perpesanan WhatsApp sebagai kasir akhir transaksi:

```text
Pelanggan berada di Beranda (Homepage)
  │
  ├──► Memilih menu "Shop" / klik "View All Products" di grid
  │      │
  │      └──► Masuk Halaman Katalog (Catalog Page)
  │             │
  │             ├──► Memilih kartu produk & klik detail
  │             │      │
  │             │      └──► Masuk Detail Produk (Product Detail Page)
  │             │             │
  │             │             ├──► Mengonfigurasi Varian Berat (e.g. 250g)
  │             │             ├──► Menyesuaikan Jumlah Item (e.g. 2 unit)
  │             │             └──► Klik "Add to Bag"
  │             │                    │
  │             │                    └──► Item tersimpan di Keranjang Lokal (Cart)
  │             │
  │             └──► Menekan ikon Keranjang di header
  │                    │
  │                    └──► Masuk Halaman Review Keranjang (Cart & Checkout Page)
  │                           │
  │                           ├──► Tinjau Item, Qty, dan Ongkos Kirim (Gratis)
  │                           └──► Menekan tombol utama "Order via WhatsApp"
  │                                  │
  │                                  └──► Sistem membuka Chat WhatsApp dengan Prefilled Message:
  │                                       "Halo Clitoria Concierge, saya ingin memesan:
  │                                        - 2x Sacred Blue Butterfly Pea Tea (250g)
  │                                        Total: $144.00. Mohon info pengiriman."
```

### Alur Pembelian Cepat (Buy Now Flow)
Digunakan bagi pengguna katalog yang ingin langsung bertransaksi tanpa melalui keranjang belanja:

```text
Pelanggan berada di Halaman Katalog (Catalog Page) atau Detail Produk
  │
  ├──► Menekan Tombol "Buy Now" pada salah satu kartu produk
  │      │
  │      └──► Sistem langsung memicu pembukaan tab baru mengarah ke API WhatsApp
  │             dengan format ringkasan 1 unit item terpilih seketika.
```

### Alur Kasir Manual Admin (Manual Sales Entry Flow)
Alur pencatatan pesanan manual oleh admin setelah menerima instruksi pengiriman via WhatsApp chat:

```text
Admin menerima pesan konfirmasi pembayaran pembeli di WhatsApp Chat
  │
  ├──► Membuka Admin Console -> Menu "Sales" -> "Manual Sales Entry"
  │      │
  │      ├──► Memasukkan Nama Pelanggan & Tanggal Transaksi
  │      ├──► Menuliskan Alamat Kirim di kolom internal notes
  │      ├──► Memilih jenis barang di Dropdown baris "Order Items"
  │      ├──► Menyesuaikan jumlah barang yang dibeli (Grand total terhitung otomatis)
  │      └──► Menekan tombol "Save Sale"
  │             │
  │             └──► Transaksi tercatat di Database dan grafik Metrik Dashboard langsung terupdate
```

---

## 8. STRUKTUR PANEL ADMIN (ADMIN PANEL STRUCTURE)

Seluruh halaman konsol admin Clitoria wajib mengikuti tata letak terstandar berikut demi menjaga kenyamanan operasional admin.

### Sidebar Hierarchy (Menu Samping)
Sidebar diposisikan statis di sisi kiri layar. Struktur hierarki elemen sidebar diurutkan sebagai berikut:
1.  **Header Brand:** Logo Spa SVG + Judul "Admin Console" + Subjudul "Premium Management".
2.  **Navigation Links:**
    *   Dashboard (`dashboard` icon)
    *   Products (`inventory_2` icon)
    *   Sales (`payments` icon)
    *   Gallery (`photo_library` icon)
    *   Settings (`settings` icon)
3.  **Utility Links:** Help Center (`help` icon), Log Out (`logout` icon).
4.  **Admin Profile Widget:** Menampilkan foto avatar admin, nama admin, serta tombol trigger keluar sistem.

### Dashboard Widgets (Widgets Utama)
Tampilan dashboard dihiasi kartu-kartu bento berikut:
*   **KPI Score Cards:** 4 kartu metrik (Total Produk, Total Transaksi Bulanan, Total Pendapatan, Total Ulasan).
*   **Revenue Analytics Chart:** Kartu bento ukuran 2-kolom menampilkan diagram grafik batang mingguan.
*   **Sales Pulse Widget:** Kartu bento ukuran 1-kolom menyajikan rasio presentasi persentase saluran penjualan (Direct, Partner, Marketplace).

### Table Structures (Tabel CMS)
Tabel pengelolaan produk dan ulasan harus menyertakan kolom:
*   *Image/Thumbnail Column:* Gambar mini produk dengan batas border bundar (`rounded-lg`).
*   *Main Identifier Column:* Nama produk/ulasan disertai tag sub-kategori kecil (e.g. `ORGANIC`, `ACCESSORY`).
*   *Code Column:* Nama URL unik (Slug) dengan tipe font monospace (`font-mono`).
*   *Status Column:* Badge pill status keterbitan (`Published` = green/tertiary, `Draft` = gray/surface-variant).
*   *Actions Column:* Tombol ikonik edit (`edit`) dan hapus (`delete`) berjarak seimbang di sisi paling kanan.

### Form Layouts & CRUD Patterns (Pola Form)
Tata letak formulir admin (seperti entri penjualan dan pengaturan SEO) terbagi atas 2 kolom berimbang:
*   *Kolom Kiri:* Formulir input berlabel mengambang. Input teks wajib menggunakan sudut rounded 16px (`rounded-xl`), tinggi input minimal 56px, dan latar belakang berwarna `bg-surface-container-low`.
*   *Kolom Kanan:* Peninjau visual dinamis seperti map preview Google Maps atau dropzone unggah berkas bertanda garis putus-putus (`border-dashed`).
*   *Sticky Footer Action Bar:* Bilah aksi bawah yang melayang mantap di dasar halaman admin settings, menampung tombol aksi batal ("Discard") di kiri dan simpan ("Save Settings") di kanan.

---

## 9. ATURAN IMPLEMENTASI ANTARMUKA (UI IMPLEMENTATION RULES)

### WAJIB DIIKUTI (Must Follow)
*   **Ketegasan Hierarki Layout:** Struktur navigasi bar publik wajib berposisi tetap (`fixed top-0 z-50`) di setiap halaman dan wajib mengimplementasikan efek glassmorphic backdrop-blur (`glass-effect`).
*   **Konsistensi Sudut Lengkung (Border Radius):** Tombol aksi publik harus menggunakan kelas `rounded-full` (pill shape). Area kartu dan modul input data wajib menggunakan kelas `rounded-md` atau `rounded-xl`. Area visual hero wajib menggunakan kelas `rounded-xl`. Jangan pernah mencampuradukkan tingkat sudut lengkung komponen.
*   **Symmetry Spacing:** Gunakan unit spasi 8px secara sistematis. Jarak antar section di desktop tidak boleh kurang dari 120px (`py-24`) dan di mobile tidak boleh kurang dari 80px (`py-16`).
*   **Akurasi Badge Status:** Badge status transaksi delivered wajib menggunakan skema warna tertiary (`bg-tertiary-fixed` / `#b3f582` dengan teks `#224c00`), bukan warna hijau murni generik Tailwind (`bg-green-500`).

### TIDAK BOLEH DILAKUKAN (Must Not)
*   **DILARANG Mengubah Susunan Bagian:** Jangan memindahkan urutan bagian layout landing page. Urutan wajib: Hero -> Benefits -> Curated Selections -> Gallery -> Testimonials -> Partners -> Contact -> Footer.
*   **DILARANG Menghapus Fungsionalitas WhatsApp:** Rantai konversi utama sistem adalah chat WhatsApp. Dilarang mengganti tombol "Order via WhatsApp" menjadi pembayaran otomatis Stripe/Paypal kecuali diperintahkan secara tertulis oleh user.
*   **DILARANG Menggunakan Warna Ad-Hoc:** Jangan membuat kelas warna Tailwind baru yang tidak tercantum dalam palet warna resmi di atas (e.g. `bg-red-500`, `bg-blue-600`). Seluruh rekayasa warna wajib merujuk pada palet warna sistem (`bg-primary`, `bg-secondary`, `bg-surface-container`, dll).
*   **DILARANG Menyembunyikan Navigasi Bawah Mobile:** Pada tampilan mobile publik, navigasi bar melayang bawah (`Mobile Bottom Nav`) wajib tampil di posisi paling depan (`z-50`) untuk kemudahan akses pengguna.

---

## 10. SPESIFIKASI ANIMASI (ANIMATION SPECIFICATIONS)

Untuk menghadirkan pengalaman antarmuka yang dinamis dan berkelas premium (premium user experience), pengembang wajib menyematkan beberapa animasi mikro berikut:

### 1. Scroll-Triggered Reveal (Efek Membuka Konten)
*   **Trigger:** Elemen antarmuka memasuki area viewport browser saat di-scroll (menggunakan JavaScript `IntersectionObserver`).
*   **Target CSS:** Kelas `.reveal` (keadaan awal) dan `.reveal.active` (keadaan terpicu).
*   **Durasi:** `800ms` (0.8 detik).
*   **Efek:**
    *   Keadaan Awal: `opacity: 0; transform: translateY(20px);`
    *   Keadaan Aktif: `opacity: 1; transform: translateY(0); transition: all 0.8s ease-out;`

### 2. Floating Composition Animation (Elemen Melayang)
*   **Trigger:** Berjalan otomatis terus-menerus sejak halaman dimuat (`infinite loop`).
*   **Target CSS:** Kelas `.floating-element`.
*   **Durasi:** `6000ms` (6 detik).
*   **Efek:** Keyframes animasi berupa pergeseran vertikal halus disertai rotasi kemiringan kecil.
    *   `0%`: `transform: translate(0, 0px) rotate(0deg);`
    *   `50%`: `transform: translate(5px, -15px) rotate(2deg);`
    *   `100%`: `transform: translate(0, 0px) rotate(0deg);`
*   *Catatan:* Sediakan variasi delay animasi (`animation-delay: -1s` & `-3s`) pada elemen dekoratif samping untuk memecah ritme gerakan agar tidak bergerak bersamaan.

### 3. Tactile Hover Lift (Umpan Balik Kartu)
*   **Trigger:** Kursor mouse berada di atas elemen (`hover`).
*   **Target CSS:** Kartu produk katalog, kartu metrik admin KPI.
*   **Durasi:** `300ms` atau `500ms`.
*   **Efek:** Skala elemen membesar tipis (`scale-[1.02]` atau `scale-[1.05]`), bayangan bertambah dalam (`shadow-xl`), dan posisi terangkat sedikit ke atas (`translate-y-[-4px]`).

### 4. Interactive Icon Rotate
*   **Trigger:** Kursor mouse berada di atas kartu manfaat publik.
*   **Target CSS:** Elemen `.material-symbols-outlined` di dalam kartu.
*   **Durasi:** `300ms`.
*   **Efek:** Ikon membesar setinggi 1.2x dan berputar miring sebesar 5 derajat (`scale(1.2) rotate(5deg)`).

---

## 11. UI CONTRACT (KONTRAK IMPLEMENTASI UI)

> [!IMPORTANT]
> Kontrak UI ini bersifat **MANDATORI** dan harus ditaati sepenuhnya oleh AI Coding Agents maupun pengembang manusia saat menulis atau memodifikasi file Blade views (`.blade.php`) dan Tailwind styling di lingkungan Laravel 12.

1.  **Dukungan Mode Terang/Gelap (Light/Dark Mode Alignment):**
    *   Seluruh markup HTML wajib diawali dengan pendefinisian class default pembungkus (`class="light"`) pada tag `<html>`.
    *   Warna permukaan admin wajib beradaptasi menggunakan prefix `dark:`. Contoh: `bg-surface-container-low dark:bg-surface-container-lowest`.
2.  **Akurasi Ikonografi (Material Symbols Outlined):**
    *   Ikon wajib dipanggil menggunakan stylesheet resmi Google Fonts Material Symbols Outlined.
    *   Elemen pemanggil wajib menggunakan tag `<span class="material-symbols-outlined" data-icon="[nama_ikon]">[nama_ikon]</span>`.
    *   Gunakan properti CSS `font-variation-settings: 'FILL' 1` secara inline khusus untuk ikon ulasan bintang (`star`) atau ikon centang status aktif untuk menegaskan warna penuh.
3.  **Struktur Nama Kelas Layout Tailwind:**
    *   Dilarang keras memecah properti tata letak dasar menjadi baris CSS ad-hoc.
    *   Gunakan variabel terdaftar Tailwind seperti `px-margin-mobile md:px-margin-desktop` untuk menyelaraskan padding sisi tepi di mobile (20px) dan desktop (64px).
    *   Seluruh bar navigasi atas wajib menyertakan kelas backdrop-blur (`backdrop-blur-xl` atau `backdrop-blur-md`) untuk menjamin transparansi premium di atas citra visual hero.
4.  **Form Input Focus Integrity:**
    *   Setiap elemen input teks, pilihan dropdown, maupun textarea wajib ditambahkan efek focus penegas warna primary.
    *   Aturan focus Tailwind: `focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none`.
5.  **Akurasi Prefilled WhatsApp URL:**
    *   Pengembang wajib memformulasikan data pesanan secara dinamis ke dalam format URL encoded pada tombol CTA konversi.
    *   Struktur URL dasar: `https://wa.me/{nomor_whatsapp}?text={encoded_text}`.
    *   Nomor WhatsApp dan tautan sosial wajib ditarik secara dinamis dari tabel pengaturan database (menghubungkan rute Laravel Controller dengan konfigurasi halaman `Unified Settings`).
6.  **Preservasi Kode Pendukung JavaScript:**
    *   Dilarang menghapus blok kode skrip `<script>` bawaan di bagian bawah halaman Stitch yang bertugas mengontrol transisi `.reveal` (Intersection Observer), menu burger toggle mobile, serta perhitungan aritmatika subtotal quantity selector di keranjang.
