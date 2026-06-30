# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 3 — Configuration & Settings Development
* **Epic Aktif:** EPIC 07 — SETTINGS
* **Fitur Aktif:** FEATURE 07.02 — SEO Settings
* **Tugas Aktif:** TASK 07.02.01 — SEO Settings Backend

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini merupakan langkah pertama dalam pengembangan fitur SEO di sisi *backend*. Objektifnya adalah mengelola penyimpanan konfigurasi SEO menggunakan struktur *Settings* yang sudah dibangun sebelumnya.

**Cakupan Pekerjaan:**
- Menyiapkan *key* khusus (`seo_meta_title`, `seo_meta_description`, dll) di dalam sistem *Settings*.
- Memastikan `SettingsService` dapat memproses penyimpanan dan pengambilan nilai SEO ini dengan benar.
- Menambahkan validasi pembatasan karakter agar sesuai dengan standar praktik terbaik SEO.
- Menyiapkan *seeder* nilai *default* untuk SEO jika database baru di-reset.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] *Key* SEO berhasil di-set dan dipanggil.
- [ ] Validasi panjang karakter pada *request* berjalan sukses.
- [ ] Tidak ada konflik dengan pengaturan bisnis (Feature 07.01) yang sudah ada di dalam tabel yang sama.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 07.01.04 — Business Settings Backend (Assignee: Dev 2 - Tyas)
* **Hasil Kerja (Deliverables):**
    - Seluruh *backend* untuk pengaturan bisnis (termasuk sosial media, email, dan alamat) telah berhasil diintegrasikan ke dalam basis data pengaturan.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 07.02.02 — SEO Settings CRUD UI (Assignee: Dev 4)
