# PRODUCT REQUIREMENTS DOCUMENT (PRD)

# Clitoria Digital Commerce Platform

Version 1.0

---

# 1. Project Overview

## Project Name

Clitoria Digital Commerce Platform

## Project Type

Product Catalog & Lightweight Commerce Platform

## Background

Clitoria saat ini menggunakan website statis sebagai media promosi dan penjualan produk Butterfly Pea Flower.

Seluruh konten website masih bersifat hardcoded sehingga setiap perubahan memerlukan perubahan source code dan deployment ulang.

Website akan ditingkatkan menjadi platform dinamis berbasis Laravel yang memungkinkan pengelolaan konten melalui dashboard admin, mendukung pembelian produk melalui WhatsApp, serta menyediakan pencatatan penjualan untuk kebutuhan analisis bisnis.

---

# 2. Business Goals

## BG-001

Memungkinkan tim Clitoria mengelola seluruh konten website tanpa bantuan developer.

## BG-002

Meningkatkan konversi penjualan melalui pengalaman pembelian yang lebih sederhana.

## BG-003

Menyediakan katalog produk yang mudah diperbarui.

## BG-004

Menyediakan proses checkout berbasis WhatsApp.

## BG-005

Menyediakan dashboard analisis penjualan sederhana.

## BG-006

Menjadi fondasi untuk pengembangan e-commerce penuh di masa depan.

---

# 3. Product Vision

Membangun platform digital yang memungkinkan pengunjung:

* Mengenal brand Clitoria
* Melihat manfaat produk
* Melihat katalog produk
* Menambahkan produk ke keranjang
* Membeli produk secara langsung
* Checkout melalui WhatsApp

Serta memungkinkan administrator:

* Mengelola seluruh konten website
* Mengelola produk dan harga
* Mencatat penjualan
* Melihat analitik bisnis

---

# 4. User Roles

## Visitor

### Hak Akses

* Melihat seluruh halaman website
* Menambahkan produk ke keranjang
* Buy Now
* Checkout ke WhatsApp

---

## Administrator

### Hak Akses

* Login Dashboard
* Mengelola seluruh konten website
* Mengelola produk
* Mengelola harga
* Mengelola informasi bisnis
* Mencatat penjualan
* Melihat analitik

---

# 5. Functional Requirements

# Module A - Authentication

### FR-AUTH-001

Admin dapat login menggunakan email dan password.

### FR-AUTH-002

Admin dapat logout.

### FR-AUTH-003

Admin hanya dapat mengakses dashboard setelah login.

---

# Module B - Dashboard

Dashboard menampilkan ringkasan bisnis.

### Dashboard Metrics

* Total Produk
* Total Gallery
* Total Testimonial
* Total Team Member
* Total Penjualan Bulan Ini
* Total Omzet Bulan Ini

---

# Module C - Hero Management

Admin dapat mengelola Hero Section.

### Data

* title
* subtitle
* image
* button_text
* button_link

### Fitur

* Edit Hero
* Upload Hero Image
* Update CTA

---

# Module D - Benefits Management

### Data

* title
* icon
* status

### Fitur

* Create Benefit
* Update Benefit
* Delete Benefit

---

# Module E - Product Management

### Data

* name
* slug
* short_description
* description
* image
* status

### Fitur

* Tambah Produk
* Edit Produk
* Hapus Produk
* Nonaktifkan Produk

---

# Module F - Product Pricing Management

### Data

* product_id
* package_name
* type
* price

### Type

* single
* bundle

### Fitur

* Tambah Harga
* Edit Harga
* Hapus Harga

---

# Module G - Shopping Cart System

### Tujuan

Visitor dapat membeli beberapa produk sekaligus.

### Fitur

* Add To Cart
* Update Quantity
* Remove Item
* View Cart
* Checkout WhatsApp

### Technical Requirement

Menggunakan Laravel Session.

Tidak memerlukan login.

---

# Module H - Buy Now System

### Tujuan

Visitor dapat langsung membeli satu produk.

### Fitur

* Buy Now Button
* Generate WhatsApp Message
* Redirect ke WhatsApp

---

# Module I - WhatsApp Checkout

Sistem menghasilkan pesan otomatis berdasarkan produk yang dipilih.

### Contoh

Halo Clitoria,

Saya ingin memesan:

1. Travel Size Cup
   Qty: 2

2. Sachet
   Qty: 3

Total:
Rp 34.000

Mohon informasi pembayaran dan pengiriman.

Terima kasih.

---

# Module J - Gallery Management

### Data

* image
* title
* description
* status

### Fitur

* Upload Gallery
* Edit Gallery
* Delete Gallery

---

# Module K - Testimonial Management

### Data

* customer_name
* occupation
* rating
* review
* photo
* featured

### Fitur

* Tambah Testimonial
* Edit Testimonial
* Hapus Testimonial

---

# Module L - Team Management

### Data

* name
* position
* photo
* instagram
* linkedin

### Fitur

* Tambah Member
* Edit Member
* Hapus Member

---

# Module M - Contact & Business Information Settings

### Data

* business_email
* whatsapp_number
* instagram_url
* address
* google_maps_embed

### Fitur

* Update WhatsApp
* Update Email Bisnis
* Update Instagram
* Update Alamat
* Update Google Maps

### Catatan

Email digunakan untuk:

* Partnership
* Sponsorship
* Investor
* Media
* Kolaborasi

---

# Module N - Partner Management

### Data

* name
* logo
* website

### Fitur

* Tambah Partner
* Edit Partner
* Hapus Partner

---

# Module O - SEO Management

### Data

* meta_title
* meta_description
* meta_keywords
* og_image

### Fitur

* Update SEO Homepage
* Update Open Graph

---

# Module P - Sales Tracking

### Tujuan

Mencatat transaksi yang telah berhasil dilakukan melalui WhatsApp.

### Data

* transaction_date
* customer_name
* notes
* total_amount

### Fitur

* Tambah Penjualan
* Edit Penjualan
* Hapus Penjualan
* Lihat Riwayat Penjualan

### Catatan

Penjualan dicatat secara manual oleh admin setelah transaksi berhasil.

---

# Module Q - Sales Analytics

### Dashboard Analytics

* Total Omzet
* Jumlah Transaksi
* Penjualan Hari Ini
* Penjualan Bulan Ini

### Reporting

* Grafik Penjualan Harian
* Grafik Penjualan Bulanan

### Product Insights

* Produk Terlaris
* Produk Paling Jarang Terjual

---

# 6. Navigation Structure

## Public Navigation

* Home
* Benefits
* Products
* Gallery
* Testimonials
* Team
* Contact
* Cart

---

## Admin Navigation

* Dashboard
* Hero
* Benefits
* Products
* Product Pricing
* Gallery
* Testimonials
* Team
* Sales
* Business Settings
* Partners
* SEO

---

# 7. Database Design

## users

* id
* name
* email
* password

## heroes

* id
* title
* subtitle
* image
* button_text
* button_link

## benefits

* id
* title
* icon
* status

## products

* id
* name
* slug
* short_description
* description
* image
* status

## product_prices

* id
* product_id
* package_name
* type
* price

## galleries

* id
* title
* image
* description
* status

## testimonials

* id
* customer_name
* occupation
* rating
* review
* photo
* featured

## teams

* id
* name
* position
* photo
* instagram
* linkedin

## partners

* id
* name
* logo
* website

## sales

* id
* transaction_date
* customer_name
* total_amount
* notes
* created_by

## sales_items

* id
* sale_id
* product_id
* product_name
* qty
* price
* subtotal

## settings

* id
* key
* value

---

# 8. Non Functional Requirements

## Security

* Authentication Middleware
* Password Hashing
* CSRF Protection
* XSS Protection
* File Upload Validation

## Performance

* Image Optimization
* Lazy Loading
* Caching

## Reliability

* Daily Database Backup
* Error Logging

## Compatibility

* Desktop Responsive
* Tablet Responsive
* Mobile Responsive

---

# 9. Technology Stack

## Backend

Laravel 12

## Frontend

Blade Template Engine
Tailwind CSS
AlpineJS

## Database

MySQL 8

## Authentication

Laravel Breeze

## Storage

Laravel Storage

---

# 10. Future Roadmap

## Phase 2

* Order Management
* Customer Management
* Inventory Management
* Blog System
* Advanced Analytics

## Phase 3

* Midtrans Integration
* Xendit Integration
* Shipping Integration
* Promo System
* Voucher System
* Full E-Commerce Platform

---

# 11. Success Metrics

* Admin dapat mengelola seluruh konten tanpa coding.
* Visitor dapat menggunakan Buy Now.
* Visitor dapat menggunakan Cart.
* Visitor dapat checkout ke WhatsApp.
* Nomor WhatsApp dapat diubah tanpa perubahan source code.
* Penjualan dapat dicatat dan dianalisis.
* Website mobile responsive.
* Page load kurang dari 3 detik.
* Seluruh konten website dapat dikelola dari dashboard admin.
