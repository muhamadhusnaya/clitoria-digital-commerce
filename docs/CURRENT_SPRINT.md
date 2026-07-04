# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

*   **Fase Proyek:** PHASE 2 — CMS Module Development (Commerce)
*   **Epic Aktif:** EPIC 05 — Commerce
*   **Fitur Aktif:** Integrasi Fitur 05.01 - 05.05
*   **Tugas Aktif:** Backend Integration & Fixes

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS
Sprint ini merupakan **Sprint Integrasi (Fix)** yang bertujuan untuk menggabungkan, menstandardisasi, dan memperbaiki seluruh kode *Backend* dari Epic 05 (Commerce) yang dikerjakan pada fitur 05.01 hingga 05.05. Sprint ini berfokus murni pada stabilitas Arsitektur dan Data, **bukan** pada pembuatan UI/Blade baru (UI akan dibuat dummy/kosong).

**Cakupan Pekerjaan:**
- Menggabungkan (*merge*) logika Backend (Migration, Model, Repository, Service, Request, Controller) secara berurutan dari branch `feature/05.01` hingga `feature/05.05` ke dalam branch `fix/epic-05-commerce-integration`.
- **Standarisasi Arsitektur:** Memastikan semua *Repository* di Epic 05 wajib menge-extend `BaseRepository` dan semua *binding interface* wajib dipindahkan ke `RepositoryServiceProvider.php`.
- **Penyelesaian Bug Fatal:**
  - Memperbaiki pelanggaran arsitektur di `ProductPriceRepository`.
  - Mengembalikan rute dan controller yang hilang untuk Product Catalog.
  - Memperbaiki Fatal Syntax Bug (class duplikat 7 kali) di `CartController`.
  - Mendaftarkan rute `CheckoutController` dan `BuyNowController`.
- **Dummy Views:** Membuat *blade views* kosong agar aplikasi tidak *crash* karena View tidak ditemukan.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)
Tugas ini dianggap selesai jika:
- [ ] Seluruh tabel database dari Epic 05 berhasil di-migrate tanpa error.
- [ ] Semua Repository di Epic 05 sudah berada di folder `app/Repositories/Eloquent/` dan terikat (bound) secara terpusat di `RepositoryServiceProvider.php`.
- [ ] Fitur Backend untuk Product, Pricing, Catalog, Cart, dan Checkout terintegrasi penuh tanpa Error Syntax atau Error 500.
- [ ] Tidak ada perubahan antarmuka frontend yang dikerjakan sepenuhnya, cukup *views placeholder* yang kosong.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** Epic 04 CMS Management Integration
*   **Hasil Kerja (Deliverables):**
    - Integrasi Backend CMS (Hero, Benefit, Gallery, Testimonial, Team, Partner) berhasil.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** Epic 06 Analytics & Reporting Integration
