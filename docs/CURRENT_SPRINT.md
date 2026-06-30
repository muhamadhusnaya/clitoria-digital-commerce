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
* **Tugas Aktif:** TASK 07.02.02 — SEO Settings CRUD UI

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk mengelola pengaturan SEO (Search Engine Optimization) secara dinamis. Halaman ini akan menjadi tempat admin mengatur *Meta Title*, *Meta Description*, *Meta Keywords*, dan *Open Graph Image* tanpa perlu mengubah kode sumber.

**Cakupan Pekerjaan:**
- Membuat halaman *form* (bisa digabung dalam satu halaman Settings atau tab terpisah) untuk *input* pengaturan SEO.
- Menggunakan komponen UI yang sudah dibangun di Epic 02 (seperti *Input*, *Textarea*, *Card*, dan *Button*).
- Menyiapkan *field upload* gambar khusus untuk *Open Graph Image* (gambar yang muncul saat tautan dibagikan ke media sosial).
- Mengintegrasikan form ini dengan *endpoint/Controller* yang sudah disiapkan oleh tim *Backend*.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Admin dapat melihat nilai pengaturan SEO yang saat ini aktif (*auto-fill* pada form).
- [ ] Admin dapat mengubah dan menyimpan pengaturan SEO (teks dan gambar) dengan sukses.
- [ ] Terdapat notifikasi visual (*flash message*) jika pengaturan berhasil atau gagal disimpan.
- [ ] Tampilan UI responsif, rapi, dan sesuai dengan *Design System* aplikasi (`docs/DESAIN.md`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 07.02.01 — Meta Title (Backend SEO Settings)
* **Hasil Kerja (Deliverables):**
    - Sistem *backend* (Service dan Repository) untuk menyimpan dan mengambil data pengaturan SEO sudah berjalan dengan baik.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 07.02.03 — Meta Keywords (Assignee: Dev 2)