# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 2 — CMS Module Development
* **Epic Aktif:** EPIC 04 — CMS
* **Fitur Aktif:** FEATURE 04.02 — Benefit Management
* **Tugas Aktif:** TASK 04.02.01 — Benefit Migration

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini menandai dimulainya modul *Benefit Management*. Tujuannya adalah merancang dan membuat skema tabel `benefits` di database.

**Cakupan Pekerjaan:**
- Menghasilkan *file migration* melalui perintah Artisan.
- Mendefinisikan kolom-kolom yang diperlukan sesuai rancangan di `SCHEMA.md` (misalnya: ikon/gambar, judul benefit, deskripsi).

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] *File migration* untuk tabel `benefits` telah dibuat di direktori `database/migrations`.
- [ ] Struktur kolom di dalam *migration* secara presisi mengikuti skema data yang telah disepakati.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.01.06 — Hero Image Upload
* **Hasil Kerja (Deliverables):**
    - `UploadTrait` sukses dibuat dan diintegrasikan ke `HeroService` untuk menangani logika manipulasi *file*.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.02.02 — Benefit Model