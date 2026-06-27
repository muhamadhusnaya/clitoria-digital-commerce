# SOFTWARE REQUIREMENTS SPECIFICATION (SRS)

# Clitoria Digital Commerce Platform

Version 1.0

Prepared For:
Clitoria

Prepared By:
Software Engineering Team

---

# 1. Introduction

## 1.1 Purpose

Dokumen ini mendefinisikan kebutuhan perangkat lunak untuk Clitoria Digital Commerce Platform.

Sistem bertujuan untuk:

* Mengelola konten website secara dinamis
* Menampilkan katalog produk
* Mendukung pembelian melalui WhatsApp
* Menyediakan dashboard administrasi
* Menyediakan pencatatan penjualan dan analitik sederhana

---

## 1.2 Scope

Platform terdiri dari:

### Public Website

Digunakan oleh pengunjung untuk:

* Melihat informasi perusahaan
* Melihat produk
* Menambahkan produk ke keranjang
* Melakukan checkout melalui WhatsApp

### Admin Dashboard

Digunakan administrator untuk:

* Mengelola konten
* Mengelola produk
* Mengelola harga
* Mengelola penjualan
* Mengelola SEO

---

## 1.3 Definitions

| Term    | Description                               |
| ------- | ----------------------------------------- |
| Visitor | Pengunjung website                        |
| Admin   | Pengelola website                         |
| Cart    | Keranjang belanja berbasis session        |
| Sale    | Transaksi yang berhasil dan dicatat admin |
| Product | Produk Clitoria                           |
| CTA     | Call To Action                            |

---

# 2. Overall Description

## 2.1 Product Perspective

Sistem merupakan aplikasi web berbasis Laravel.

Arsitektur:

```text
Client Browser
↓
Laravel Application
↓
MySQL Database
↓
File Storage
```

---

## 2.2 User Classes

### Visitor

Hak akses:

* Read-only content
* Add To Cart
* Buy Now
* WhatsApp Checkout

---

### Administrator

Hak akses:

* Full CRUD Content
* Product Management
* Sales Management
* SEO Management

---

## 2.3 Operating Environment

### Server

* Linux Ubuntu
* Apache/Nginx
* PHP 8.3+
* MySQL 8+

### Client

* Chrome
* Firefox
* Edge
* Safari

---

# 3. Functional Requirements

# FR-01 Authentication

## Description

Sistem menyediakan autentikasi administrator.

### Input

* Email
* Password

### Process

* Validasi kredensial

### Output

* Redirect Dashboard

### Exception

* Invalid Credential

---

# FR-02 Dashboard

## Description

Menampilkan ringkasan sistem.

### Metrics

* Total Product
* Total Gallery
* Total Testimonial
* Total Team
* Total Sales
* Total Revenue

---

# FR-03 Hero Management

## Description

Admin dapat mengubah Hero Section.

### CRUD

* Update Hero

### Validation

Title wajib diisi.

---

# FR-04 Benefit Management

## Description

Admin dapat mengelola benefit.

### CRUD

* Create
* Read
* Update
* Delete

### Validation

Title wajib diisi.

---

# FR-05 Product Management

## Description

Admin dapat mengelola produk.

### CRUD

* Create Product
* Read Product
* Update Product
* Delete Product

### Validation

Nama produk wajib.

Image wajib.

Slug unik.

---

# FR-06 Product Pricing

## Description

Admin dapat mengelola harga produk.

### CRUD

* Create Price
* Update Price
* Delete Price

### Validation

Price > 0

---

# FR-07 Shopping Cart

## Description

Visitor dapat menyimpan produk sementara.

### Features

* Add Product
* Remove Product
* Update Quantity
* View Cart

### Storage

Laravel Session

### Session Structure

```json
{
  "product_id": 1,
  "name": "Travel Size Cup",
  "price": 8000,
  "qty": 2
}
```

---

# FR-08 Buy Now

## Description

Visitor dapat langsung membeli produk.

### Process

Product Selected
↓
Generate WhatsApp Message
↓
Redirect WhatsApp

---

# FR-09 WhatsApp Checkout

## Description

Sistem membuat pesan otomatis.

### Format

* Product Name
* Quantity
* Price
* Total

### Output

URL WhatsApp

```text
https://wa.me/{phone}?text={message}
```

---

# FR-10 Gallery Management

### CRUD

* Create
* Read
* Update
* Delete

---

# FR-11 Testimonial Management

### CRUD

* Create
* Read
* Update
* Delete

---

# FR-12 Team Management

### CRUD

* Create
* Read
* Update
* Delete

---

# FR-13 Business Settings

## Description

Admin dapat mengubah informasi bisnis.

### Data

* WhatsApp Number
* Business Email
* Address
* Instagram URL
* Google Maps Embed

---

# FR-14 Partner Management

### CRUD

* Create
* Read
* Update
* Delete

---

# FR-15 SEO Management

## Description

Admin dapat mengelola SEO.

### Data

* Meta Title
* Meta Description
* Meta Keywords
* OG Image

---

# FR-16 Sales Tracking

## Description

Admin dapat mencatat transaksi yang berhasil.

### Create Sale

Input:

* Transaction Date
* Customer Name
* Product
* Quantity
* Price

Output:

* Sale Record

### CRUD

* Create
* Read
* Update
* Delete

---

# FR-17 Sales Analytics

## Description

Dashboard menampilkan statistik penjualan.

### Reports

* Daily Sales
* Monthly Sales
* Revenue

### Product Analysis

* Best Selling Product
* Least Selling Product

---

# 4. Non Functional Requirements

# NFR-01 Security

### Requirements

* Password Hashing
* CSRF Protection
* XSS Protection
* Session Protection

---

# NFR-02 Performance

### Requirements

Homepage load time:

< 3 seconds

---

# NFR-03 Availability

### Requirements

System uptime:

99%

---

# NFR-04 Backup

### Requirements

Daily database backup

---

# NFR-05 Scalability

System harus mendukung:

* 500+ produk
* 10.000+ pengunjung per bulan

---

# NFR-06 Responsiveness

Support:

* Desktop
* Tablet
* Mobile

---

# 5. Database Requirements

## Main Tables

* users
* heroes
* benefits
* products
* product_prices
* galleries
* testimonials
* teams
* partners
* sales
* sales_items
* settings

---

# 6. Business Rules

## BR-01

Visitor tidak perlu login.

---

## BR-02

Checkout selalu melalui WhatsApp.

---

## BR-03

Cart disimpan menggunakan session.

---

## BR-04

Nomor WhatsApp dapat diubah melalui dashboard.

---

## BR-05

Sales dicatat manual oleh administrator.

---

## BR-06

Analytics hanya berdasarkan sales yang telah dicatat.

---

# 7. Acceptance Criteria

## Authentication

* Admin berhasil login.
* Admin berhasil logout.

## Product

* Produk dapat ditambah.
* Produk dapat diubah.
* Produk dapat dihapus.

## Cart

* Produk dapat masuk cart.
* Quantity dapat diubah.
* Cart dapat checkout ke WhatsApp.

## Sales

* Sales dapat dicatat.
* Analytics menampilkan data sesuai sales.

## SEO

* Meta data tampil pada source HTML.

---

# 8. Future Enhancements

## Phase 2

* Order Management
* Inventory Management
* Blog Management
* Customer Management

## Phase 3

* Midtrans Integration
* Xendit Integration
* Shipping Integration
* Full E-Commerce System
