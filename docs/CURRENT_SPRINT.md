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
* **Fitur Aktif:** FEATURE 04.01 — Hero Management
* **Tugas Aktif:** TASK 04.01.05 — Hero CRUD UI

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk mengelola data Hero (Banner/Slider utama di halaman publik). Halaman ini akan menjadi tempat admin menambah, mengedit, melihat, dan menghapus konten Hero.

**Cakupan Pekerjaan:**
- Membuat halaman *Index* berupa tabel untuk menampilkan daftar konten Hero yang ada.
- Membuat halaman atau modal *form* untuk proses *Create* dan *Edit* data Hero (termasuk *field* untuk judul, deskripsi, tautan CTA, dan persiapan tombol unggah gambar).
- Membuat fitur *Delete* dengan konfirmasi modal untuk mencegah penghapusan data secara tidak sengaja.
- Mengintegrasikan form dan tabel ini dengan *Controller* yang memanggil logika dari *Hero Service*.
- Menggunakan komponen UI/Blade bawaan (*Design System*) yang sudah dibangun sebelumnya di Epic 02.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Tampilan halaman *Index*, *Create*, dan *Edit* sudah tersedia dan responsif sesuai dengan `docs/DESAIN.md`.
- [ ] Admin dapat melakukan operasi CRUD dasar melalui antarmuka tersebut dengan lancar.
- [ ] Terdapat notifikasi visual (*flash message* atau *alert*) saat aksi berhasil maupun gagal.
- [ ] Validasi *error* dari *backend* berhasil ditangkap dan ditampilkan dengan rapi di bawah *input form*.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.01.04 — Hero Service (Assignee: Dev 2 - Tyas)
* **Hasil Kerja (Deliverables):**
    - Sistem *backend* (`HeroService`) telah selesai dibuat dan siap menangani proses bisnis untuk operasi data Hero.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.01.06 — Hero Image Upload (Assignee: Dev 2 - Tyas)