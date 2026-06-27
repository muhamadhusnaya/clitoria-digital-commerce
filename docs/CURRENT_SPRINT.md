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
*   **Tugas Aktif:** TASK 01.01.03 — Configure Database

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Mengonfigurasi database MySQL, memastikan koneksi berhasil, dan menjalankan migrasi awal untuk proyek Laravel.

**Cakupan Pekerjaan:**
- Memastikan server lokal (MySQL) siap menerima koneksi (tugas developer, AI asumsikan siap).
- Membuat database MySQL bernama `clitoria_digital_commerce` (jika belum ada).
- Menjalankan perintah `php artisan migrate` untuk menginisialisasi tabel default bawaan Laravel (seperti `users`, `jobs`, `cache`, dll).

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Database `clitoria_digital_commerce` berhasil dibuat di server MySQL.
- [ ] Koneksi dari `.env` berhasil tersambung ke database.
- [ ] Perintah `php artisan migrate` berjalan sukses tanpa error.
- [ ] Tabel-tabel default Laravel (misal `users`, `sessions`) terbentuk di database.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.01.02 — Configure Environment
*   **Hasil Kerja (Deliverables):**
    - File `.env` sudah dikonfigurasi (`APP_NAME`, `APP_URL`, `APP_LOCALE`).
    - Kredensial database di-set ke MySQL dengan nama DB `clitoria_digital_commerce`.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 01.01.04 — Configure Storage
*   *(Catatan: Jangan dikerjakan dulu sebelum tugas aktif di atas selesai dan di-merge).*