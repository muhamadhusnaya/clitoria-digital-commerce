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
*   **Tugas Aktif:** TASK 04.01.02 — Hero Model

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini difokuskan untuk membuat dan mengonfigurasi Model Eloquent untuk entitas `Hero`. Model ini akan menjadi jembatan antara aplikasi dan tabel `heroes` yang skemanya telah dirancang pada tugas sebelumnya.

**Cakupan Pekerjaan:**
- Membuat Model `Hero`.
- Mendefinisikan *fillable properties* sesuai dengan spesifikasi kolom di `SCHEMA.md`.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Model `app/Models/Hero.php` berhasil dibuat.
- [ ] Atribut `$fillable` dikonfigurasi dengan benar (termasuk `title`, `subtitle`, `image`, `button_text`, `button_link`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 04.01.01 — Hero Migration
*   **Hasil Kerja (Deliverables):**
    - File migration `create_heroes_table` telah berhasil di-*generate* dan didefinisikan dengan skema kolom yang tepat.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 04.01.03 — Hero Repository
