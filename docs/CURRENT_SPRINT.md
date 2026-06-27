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
*   **Fitur Aktif:** FEATURE 01.02 — Frontend Foundation
*   **Tugas Aktif:** TASK 01.02.02 — Install AlpineJS

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Mengeksekusi instalasi dan konfigurasi awal Alpine.js di dalam proyek Laravel.

**Cakupan Pekerjaan:**
- Menginstal Alpine.js via NPM.
- Menginisialisasi Alpine.js di file `resources/js/app.js` dan mendaftarkannya ke objek global `window`.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Alpine.js ada dalam daftar `package.json`.
- [ ] Script inisialisasi Alpine.js telah ditambahkan ke `resources/js/app.js`.
- [ ] Kompilasi Vite berjalan sukses dan atribut `x-data` dapat dikenali di _view_.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.02.01 — Install Tailwind CSS
*   **Hasil Kerja (Deliverables):**
    - Tailwind CSS v4 telah tervalidasi berjalan sebagai bawaan dari struktur awal proyek Laravel 13.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 01.02.03 — Setup Livewire
*   *(Catatan: Jangan dikerjakan dulu sebelum tugas aktif di atas selesai dan di-merge).*