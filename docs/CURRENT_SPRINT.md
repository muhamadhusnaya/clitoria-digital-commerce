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
*   **Tugas Aktif:** TASK 04.01.01 — Hero Migration

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini menandai dimulainya Epic CMS, khususnya pada fitur pengaturan Hero (komponen visual utama di halaman publik). Tugas pertama ini bertujuan untuk membuat skema database dan file migration.

**Cakupan Pekerjaan:**
- Membuat *migration* untuk tabel `heroes` sesuai definisi di `SCHEMA.md`.
- Memastikan struktur kolom dan tipe data tepat.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] File *migration* untuk tabel `heroes` berhasil dibuat.
- [ ] Menjalankan `php artisan migrate` mengeksekusi migrasi tanpa *error*.
- [ ] Struktur tabel database sesuai dengan referensi.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 03.01.05 — Profile Management (Backend)
*   **Hasil Kerja (Deliverables):**
    - Menyelesaikan fungsionalitas manajemen profil admin dan menuntaskan EPIC 03.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 04.01.02 — Hero Model
