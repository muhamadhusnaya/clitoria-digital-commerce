# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 3 — Configuration & Settings Development
* **Epic Aktif:** EPIC 07 — SETTINGS[cite: 1]
* **Fitur Aktif:** FEATURE 07.02 — SEO Settings[cite: 1]
* **Tugas Aktif:** TASK 07.02.02 — SEO Settings CRUD UI

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk mengelola pengaturan SEO (*Search Engine Optimization*) secara dinamis. Halaman ini akan menjadi tempat admin mengatur *Meta Title*, *Meta Description*, *Meta Keywords*, dan *Open Graph Image* tanpa perlu mengubah kode sumber.

**Cakupan Pekerjaan:**
- Membuat halaman *form* (bisa digabung dalam satu halaman *Settings* atau menggunakan tab terpisah) untuk *input* pengaturan SEO.
- Menggunakan komponen UI/Blade yang sudah dibangun di Epic 02[cite: 1] (seperti *Input*, *Textarea*, *Card*, dan *Button*).
- Menyiapkan *field upload* gambar khusus untuk *Open Graph Image* (gambar yang muncul saat tautan dibagikan ke media sosial).
- Mengintegrasikan form ini dengan *endpoint/Controller* yang terhubung dengan logika *Settings Service*.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Admin dapat melihat nilai pengaturan SEO yang saat ini aktif (*auto-fill* pada form).
- [ ] Admin dapat mengubah dan menyimpan pengaturan SEO (baik berupa teks maupun unggahan gambar) dengan sukses.
- [ ] Terdapat notifikasi visual (*flash message*) jika pengaturan berhasil atau gagal disimpan.
- [ ] Tampilan UI responsif, rapi, dan sesuai dengan panduan *Design System* aplikasi (merujuk ke `docs/DESAIN.md`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 07.02.01 — Meta Title[cite: 1] (Assignee: Dev 2 - Tyas)[cite: 1]
* **Hasil Kerja (Deliverables):**
    - Sistem *backend* untuk menangani penyimpanan dan pengambilan data *Meta Title* sudah diselesaikan dan siap diintegrasikan.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 07.02.03 — Meta Keywords[cite: 1] (Assignee: Dev 2 - Tyas)[cite: 1]