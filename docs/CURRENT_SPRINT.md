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
*   **Tugas Aktif:** TASK 01.02.03 — Configure Frontend Build Pipeline

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Memastikan pengaturan *frontend build pipeline* telah berjalan menyeluruh. 

**Cakupan Pekerjaan:**
- Memverifikasi skrip build di package.json untuk mode pengembangan (npm run dev) dan produksi (npm run build).

- Memastikan integrasi pemrosesan CSS (PostCSS/Autoprefixer) berjalan otomatis di dalam pipeline Vite bersama Tailwind v4.

- Menguji pemuatan aset menggunakan direktif @vite di halaman welcome default Laravel untuk memastikan tidak ada broken links.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Perintah npm run dev dapat berjalan lancar untuk Hot Module Replacement (HMR) tanpa kegagalan pemuatan modul.

- [ ] Perintah npm run build berhasil melakukan minifikasi aset tanpa memicu error pada kompilasi PostCSS atau Tailwind.

- [ ] File Blade utama berhasil merender halaman dengan memuat aset melalui direktif @vite(['resources/css/app.css', 'resources/js/app.js']).

- [ ] Konsol browser bersih dari error integrasi terkait pemuatan skrip Vite atau Alpine.js.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.02.02 — Install AlpineJS
*   **Hasil Kerja (Deliverables):**
    - Paket NPM Alpine.js ter-*install*.
    - Alpine.js terinisialisasi di `app.js` dan ter-bundle oleh Vite.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 01.03.01 — Create Domain Structure
*   *(Catatan: Jangan dikerjakan dulu sebelum tugas aktif di atas selesai dan di-merge).*