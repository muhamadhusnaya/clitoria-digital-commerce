# PROJECT_STRUCTURE.md

# Clitoria Digital Commerce Platform

Version: 1.0

Architecture Style: MVC + Service-Repository Pattern
Framework: Laravel 12

---

# 1. Purpose

Dokumen ini mendefinisikan struktur proyek, organisasi source code, pemisahan modul bisnis secara logis, serta standar pengembangan untuk Clitoria Digital Commerce Platform.

Tujuan utama:

* Menjaga maintainability
* Mempermudah scaling fitur
* Mengurangi coupling antar module menggunakan lapisan Service & Repository
* Mempermudah onboarding developer baru
* Menjadi pedoman implementasi Laravel

---

# 2. Architecture Overview

Clitoria menggunakan pendekatan **Standard Laravel MVC dengan tambahan Service & Repository Layer**. Pemisahan modul dilakukan secara **logis** pada namespace dan penamaan file, bukan menggunakan folder fisik `app/Domains`.

Domain bisnis yang dipisahkan secara logis meliputi:

* **Authentication:** Pengelolaan sesi login, registrasi, password reset admin.
* **CMS (Content Management System):** Pengelolaan konten dinamis seperti Hero, Benefit, Gallery, Testimonial, Team, dan Partner.
* **Commerce:** Pengelolaan katalog produk, penentuan harga, keranjang belanja (cart), dan WhatsApp checkout redirect.
* **Analytics:** Dashboard monitoring, pencatatan transaksi manual, dan laporan penjualan.
* **Settings:** Konfigurasi informasi bisnis utama dan manajemen SEO.

---

# 3. High Level Architecture

```text
┌───────────────────────────┐
│      Presentation Layer   │
│  Blade + Tailwind + Alpine│
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│       Controller Layer    │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│        Service Layer      │
│  (Business Logic & Files) │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│      Repository Layer     │
│  (DB Query & Data Access) │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│        Eloquent ORM       │
│        (Model Layer)      │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│        MySQL Database     │
└───────────────────────────┘
```

---

# 4. Root Directory Structure

```text
clitoria/
├── app/                  # Logika aplikasi (Model, Controller, Service, Repository, dll)
├── bootstrap/            # Inisialisasi framework & providers
├── config/               # Konfigurasi sistem Laravel
├── database/             # Migrasi, Seeders, dan Factories
├── docs/                 # Dokumentasi proyek (Source of Truth)
├── public/               # File aset publik hasil kompilasi
├── resources/            # views (Blade), css (Tailwind), js (AlpineJS)
├── routes/               # Routing aplikasi (web, console, dll)
├── storage/              # Berkas upload lokal & log sistem
├── tests/                # Unit & Feature Testing
├── artisan               # CLI Laravel
├── composer.json         # Dependensi PHP
├── package.json          # Dependensi JS/CSS
└── README.md
```

---

# 5. Application Structure (app/)

File aplikasi disusun menggunakan folder standar Laravel demi kemudahan kurva belajar developer baru, namun dipisahkan fungsinya secara modular:

```text
app/
├── Contracts/            # Abstraksi Interface Repositori
│   ├── BaseRepositoryInterface.php
│   ├── HeroRepositoryInterface.php
│   ├── ProductRepositoryInterface.php
│   └── ...
│
├── Helpers/              # Fungsi bantuan standar global
│   └── helpers.php
│
├── Http/
│   ├── Controllers/
│   │   ├── Admin/        # Controller CMS & Management untuk Dashboard Admin
│   │   │   ├── HeroController.php
│   │   │   ├── TeamController.php
│   │   │   └── ...
│   │   ├── Auth/         # Controller Autentikasi Admin (Laravel Breeze)
│   │   └── ProfileController.php
│   └── Requests/         # Form Request Validation (satu kelas per operasi form)
│
├── Models/               # Representasi data / Eloquent Model
│   ├── User.php
│   ├── Hero.php
│   ├── Product.php
│   └── ...
│
├── Providers/            # Konfigurasi bootstrap Laravel
│   ├── AppServiceProvider.php       # Registrasi bindings Repositori
│   └── ...
│
├── Repositories/         # Lapisan akses data (Query Builder / Eloquent)
│   ├── BaseRepository.php           # Implementasi query dasar
│   └── Eloquent/
│       ├── HeroRepository.php
│       ├── ProductRepository.php
│       └── ...
│
├── Services/             # Lapisan logika bisnis (Business Logic & Uploads)
│   ├── BaseService.php              # Kerangka service dasar
│   ├── HeroService.php
│   ├── ProductService.php
│   └── ...
│
└── Traits/               # Fungsi pembantu reusable (seperti UploadTrait)
    └── UploadTrait.php
```

---

# 6. Service & Repository Layer Rules

Untuk menjaga agar kode tetap bersih dan modular:

1. **Controller Cleanliness:**
   Controller hanya bertugas menerima *HTTP Request*, melakukan validasi (lewat Form Request), memanggil satu atau lebih *Service*, lalu merender *View* atau mengembalikan *Response/Redirect*. Controller **tidak boleh** memuat logika database atau pengolahan file secara langsung.
2. **Service Layer Mandatory:**
   Seluruh logika bisnis (seperti pemrosesan unggahan file, penghapusan berkas usang, formatting data sebelum disimpan, atau logika WhatsApp checkout) wajib ditempatkan di dalam kelas **Service**.
3. **Repository Layer Priority:**
   Seluruh kueri basis data (Eloquent) harus diisolasi di dalam kelas **Repository**. Model Eloquent tidak boleh di-query secara langsung dari Controller atau Service, melainkan harus diakses melalui implementasi antarmuka Repositori (`*RepositoryInterface`).
4. **Dependency Injection:**
   Service harus menyuntikkan *Repository Interface* di konstruktornya untuk memanfaatkan Dependency Injection Laravel yang didaftarkan pada `AppServiceProvider`.

---

# 7. Naming Conventions

* **Model:** PascalCase (`Product`, `Testimonial`)
* **Controller:** PascalCaseController (`ProductController`, `TeamController`)
* **Service:** PascalCaseService (`ProductService`, `TeamService`)
* **Repository Interface:** PascalCaseRepositoryInterface (`ProductRepositoryInterface`)
* **Repository Implementation:** PascalCaseRepository (`ProductRepository`)
* **Form Request:** Store[Entity]Request atau Update[Entity]Request (`StoreProductRequest`)
* **Migration File:** prefix timestamp + snake_case nama tabel (`create_products_table`)
* **Database Table:** snake_case jamak (plural) (`products`, `testimonials`)
* **Database Column:** snake_case (`short_description`, `order_number`)
* **Route URL:** kebab-case (`/admin/product-pricing`)

---

# 8. Storage Structure

File yang diunggah dikelompokkan berdasarkan foldernya di dalam disk `public` (`storage/app/public/`):

* `heroes/` - Gambar banner/hero section
* `products/` - Gambar produk
* `galleries/` - Foto-foto galeri kegiatan/produk
* `testimonials/` - Foto pemberi ulasan/mitra
* `teams/` - Foto anggota tim
* `partners/` - Logo partner/mitra kerjasama
* `seo/` - Gambar meta Open Graph

---

# 9. MVP Scope Modules

Modul yang diimplementasikan pada fase MVP:

1. **Authentication:** Proteksi admin panel.
2. **Hero CMS:** Pengelolaan spanduk/slide promo utama halaman depan.
3. **Benefits CMS:** Fitur keunggulan produk.
4. **Products Catalog:** Daftar katalog produk.
5. **Product Pricing:** Pengaturan harga dan diskon produk.
6. **Cart (Session):** Penampung pilihan belanjaan sementara.
7. **WhatsApp Checkout:** Konverter data belanja menjadi format pesan teks WhatsApp + tautan API WhatsApp.
8. **Gallery CMS:** Repositori foto publik.
9. **Testimonials CMS:** Kelola review pelanggan/mitra.
10. **Team CMS:** Kelola profil pengurus Clitoria.
11. **Partners CMS:** Kelola logo kemitraan.
12. **Business Settings:** Pengaturan kontak WhatsApp, sosial media, dan alamat bisnis.
13. **SEO Settings:** Manajemen Meta Tag & Open Graph.
14. **Sales Tracking:** Halaman pencatatan data penjualan manual oleh admin.
15. **Analytics Dashboard:** Visualisasi grafik laba dan statistik performa produk terlaris.
