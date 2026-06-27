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
*   **Tugas Aktif:** TASK 01.01.05 — Configure Vite

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Mengonfigurasi pengaturan build frontend awal menggunakan Vite.

**Cakupan Pekerjaan:**
- Memastikan `vite.config.js` memiliki alias dan konfigurasi dasar Laravel.
- Memastikan instalasi dependency npm bisa berjalan (`npm install`).
- Memastikan build proses Vite bisa dijalankan tanpa error (`npm run build`).

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Dependencies NPM telah di-*install* (folder `node_modules` ada).
- [ ] Konfigurasi Vite valid dan dapat membaca path `resources/js/app.js` dan `resources/css/app.css`.
- [ ] Perintah `npm run build` berhasil meng-kompilasi asset ke dalam direktori `public/build/`.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.01.04 — Configure Storage
*   **Hasil Kerja (Deliverables):**
    - Konfigurasi file system diset ke `public`.
    - Symlink `storage` sukses dibuat di folder `public/`.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 01.02.01 — Install Tailwind CSS
*   *(Catatan: Jangan dikerjakan dulu sebelum tugas aktif di atas selesai dan di-merge).*