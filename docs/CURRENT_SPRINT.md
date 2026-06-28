# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

<<<<<<< HEAD
*   **Fase Proyek:** PHASE 0 — Project Foundation
*   **Epic Aktif:** EPIC 01 — FOUNDATION
*   **Fitur Aktif:** FEATURE 01.03 — Architecture Foundation
*   **Tugas Aktif:** TASK 01.03.01 — Create Domain Structure
=======
*   **Fase Proyek:** PHASE 1 — Core Domain Implementation
*   **Epic Aktif:** EPIC 03 — AUTHENTICATION
*   **Fitur Aktif:** FEATURE 03.01 — Admin Authentication
*   **Tugas Aktif:** TASK 03.01.01 — Install & Configure Laravel Breeze (Backend)
>>>>>>> feature/01.03-architecture-foundation

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Menginstalasi dan mengonfigurasi Laravel Breeze di sisi backend untuk mengamankan akses halaman administrator.

**Cakupan Pekerjaan:**
- Menginstal paket Laravel Breeze via Composer.
- Menjalankan instalasi Breeze (menggunakan opsi Blade).
- Mengonfigurasi rute login dan logout di bawah prefix `/admin`.
- Menyiapkan middleware auth dan session protection untuk rute-rute admin.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Laravel Breeze berhasil terpasang di sistem.
- [ ] Rute otentikasi login/logout terproteksi dan diarahkan di bawah prefix `/admin`.
- [ ] Middleware auth berhasil memblokir akses ke dashboard admin jika user belum login.
- [ ] Unit test autentikasi bawaan Laravel Breeze berjalan sukses tanpa kegagalan.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.03.05 — Configure Shared Helpers
*   **Hasil Kerja (Deliverables):**
    - File helper global `app/Helpers/helpers.php` telah dirancang dan di-autoload secara otomatis via Composer.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 03.01.03 — Configure Forgot Password (Backend)
*   *(Catatan: Tugas TASK 03.01.02 Customize Login UI dilewati terlebih dahulu karena merupakan porsi Frontend/Dev 4).*
