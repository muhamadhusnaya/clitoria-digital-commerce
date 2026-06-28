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
*   **Fitur Aktif:** FEATURE 04.01 — Hero Management
*   **Tugas Aktif:** TASK 04.01.03 — Hero Repository

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk membuat lapisan repositori bagi model `Hero` yang akan menengahi operasi database (*query*) dan mengisolasi logika data dari *controller* atau layanan (*service*).

**Cakupan Pekerjaan:**
- Membuat antarmuka (Interface) `HeroRepositoryInterface`yang meng-extend `BaseRepositoryInterface`.
- Membuat kelas implementasi `HeroRepository`yang meng-extend `BaseRepository` dan mengimplementasikan `HeroRepositoryInterface`.
- Menginjeksi model Hero ke dalam konstruktor repositori.
- Mengonfigurasi `RepositoryServiceProvider` (atau *service provider* terkait) agar melakukan proses *binding* pada repositori ini.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] `HeroRepositoryInterface` dan `HeroRepository` berhasil dibuat di direktori yang tepat dan mewarisi *Base Contract/Class*.
- [ ] Model *Hero* terhubung dengan benar ke repositori melalui konstruktor.
- [ ] Repositori telah terdaftar pada mekanisme *Dependency* Injection Laravel di dalam *Service Provider*.
- [ ] Pengecekan sintaksis berhasil tanpa error.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 04.01.02 — Hero Model
*   **Hasil Kerja (Deliverables):**
    - File model `app/Models/Hero.php` dengan *fillable attributes* yang dipetakan sesuai struktur kolom pada skema dasar berhasil diciptakan.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 04.01.04 — Hero Service
