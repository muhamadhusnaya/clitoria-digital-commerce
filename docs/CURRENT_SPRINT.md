# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

*   **Fase Proyek:** PHASE 2 — CMS Module Development
*   **Epic Aktif:** EPIC 04 — CMS
*   **Fitur Aktif:** Integrasi Fitur 04.01 - 04.06
*   **Tugas Aktif:** Backend Integration & Fixes

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS
Sprint ini merupakan **Sprint Integrasi (Fix)** yang bertujuan untuk menggabungkan, menstandardisasi, dan memperbaiki seluruh kode *Backend* dari Epic 04 (CMS) yang dikerjakan pada fitur 04.01 hingga 04.06. Sprint ini berfokus murni pada stabilitas Arsitektur dan Data, **bukan** pada pembuatan UI/Blade baru.

**Cakupan Pekerjaan:**
- Menggabungkan (*cherry-pick* / *merge*) logika Backend (Migration, Model, Repository, Service, Request, Controller) dari branch `feature/04.01` hingga `feature/04.06` ke dalam satu branch integrasi baru.
- **Standarisasi Arsitektur:** Memastikan semua *Repository* di Epic 04 wajib menge-extend `BaseRepository` dan semua *binding interface* wajib dipindahkan ke `RepositoryServiceProvider.php` (menghapus yang ada di `AppServiceProvider`).
- **Penyelesaian Bug Fatal:**
  - Memperbaiki `GalleryService` yang memanggil `parent::create` (menyebabkan crash).
  - Menambahkan `UploadTrait` pada `PartnerService` agar file gambar benar-benar ter-upload ke sistem.
  - Memperbaiki `TeamService` agar menggunakan `UploadTrait` secara konsisten.
- **Melengkapi Fitur Terlewat:** Membangun `TestimonialRepository` dan `TestimonialService` beserta logika *Featured Testimonial* yang sebelumnya bolos dikerjakan oleh Dev 2.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)
Tugas ini dianggap selesai jika:
- [ ] Seluruh tabel database dari Epic 04 (Hero, Benefit, Gallery, Testimonial, Team, Partner) berhasil di-migrate tanpa error.
- [ ] Semua Repository di Epic 04 sudah berada di folder `app/Repositories/Eloquent/` dan terikat (bound) secara terpusat di `RepositoryServiceProvider.php`.
- [ ] Tidak ada lagi *Fatal Error* atau masalah penyimpanan gambar pada fitur Gallery, Team, maupun Partner.
- [ ] File *Controller* tetap dibuat dan berfungsi mengirim data ke *View*, meskipun file `blade.php`-nya dibiarkan kosong/dummy.
- [ ] Tidak ada perubahan/pembuatan antarmuka (UI) frontend yang dilakukan di luar dari yang sudah ada, guna mencegah konflik di Epic 02 nantinya.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** Audit Keseluruhan Epics (Epic 04 - Epic 07)
*   **Hasil Kerja (Deliverables):**
    - Mendokumentasikan status dan bug pada semua implementation branches.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** Epic 05 Commerce Integration & Fixes
