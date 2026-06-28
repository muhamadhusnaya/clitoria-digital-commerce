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
*   **Fitur Aktif:** FEATURE 01.03 — Architecture Foundation
*   **Tugas Aktif:** TASK 01.03.01 — Create Domain Structure

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Membangun fondasi struktur direktori berlapis (*layered architecture*) di dalam aplikasi Laravel untuk memisahkan *domain logic* dari *framework infrastructure*.

**Cakupan Pekerjaan:**
- Membuat struktur direktori kustom seperti `app/Domains`, `app/Repositories`, `app/Services`, dll.
- Memastikan arsitektur ini terdaftar dan valid di *autoloader* Composer/Laravel.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Folder-folder struktur arsitektur baru telah terbuat.
- [ ] Aturan *namespace* PSR-4 untuk direktori baru tersebut sudah dipatuhi.
- [ ] Aplikasi Laravel masih bisa di-*boot* tanpa error (perintah `php artisan serve` atau pengecekan *class map* sukses).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.02.03 — Configure Frontend Build Pipeline
*   **Hasil Kerja (Deliverables):**
    - Proses build aset *frontend* Vite (JS & CSS) tervalidasi berjalan sukses tanpa error.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 01.03.02 — Create Base Service Layer
*   *(Catatan: Jangan dikerjakan dulu sebelum tugas aktif di atas selesai dan di-merge).*