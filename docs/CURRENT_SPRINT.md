# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

*   **Fase Proyek:** PHASE 0 — Project Foundation
*   **Epic Aktif:** EPIC 01 — FOUNDATION
*   **Fitur Aktif:** FEATURE 01.01 — Laravel Initialization
*   **Tugas Aktif:** TASK 01.01.04 — Configure Storage

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Mengonfigurasi sistem penyimpanan (*storage*) lokal untuk aplikasi Laravel dan membuat symlink ke folder publik.

**Cakupan Pekerjaan:**
- Memastikan konfigurasi `FILESYSTEM_DISK` di `.env` (umumnya `local` atau `public`).
- Menjalankan perintah `php artisan storage:link` agar file yang diunggah ke folder `storage/app/public` dapat diakses dari web (di direktori `public/storage`).

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Symlink `public/storage` berhasil dibuat dan mengarah ke `storage/app/public`.
- [ ] Tidak ada masalah permission saat membaca/menulis ke direktori storage.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.01.03 — Configure Database
*   **Hasil Kerja (Deliverables):**
    - Database `clitoria_digital_commerce` telah dibuat.
    - Tabel-tabel default Laravel berhasil di-*migrate*.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 01.01.05 — Configure Vite
*   *(Catatan: Jangan dikerjakan dulu sebelum tugas aktif di atas selesai dan di-merge).*