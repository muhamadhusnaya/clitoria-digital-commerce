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
* **Fitur Aktif:** FEATURE 04.03 — Gallery Management
* **Tugas Aktif:** TASK 04.03.05 — Gallery CRUD UI

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk mengelola data Gallery. Halaman ini akan menjadi tempat admin mengunggah, melihat, mengedit metadata, dan menghapus gambar/foto yang akan ditampilkan di halaman publik.

**Cakupan Pekerjaan:**
- Membuat halaman *Index* untuk menampilkan daftar galeri (bisa menggunakan bentuk tabel atau *grid layout* agar visual gambar lebih jelas).
- Membuat form *Create* dan *Edit* (mencakup *field* untuk judul/caption gambar, urutan, dan persiapan *field upload*).
- Membuat fitur *Delete* dengan konfirmasi modal untuk mencegah penghapusan data secara tidak sengaja.
- Mengintegrasikan antarmuka ini dengan *Controller* yang memanggil logika dari *Gallery Service*.
- Menggunakan komponen UI bawaan (*Design System*) yang sudah dibangun pada Epic 02.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Tampilan halaman *Index*, *Create*, dan *Edit* sudah tersedia, berfungsi dengan baik, dan responsif.
- [ ] Admin dapat melakukan interaksi pada form (tambah, ubah, hapus) dengan lancar.
- [ ] Terdapat notifikasi visual (*flash message*) saat aksi penyimpanan atau penghapusan berhasil maupun gagal.
- [ ] Tampilan UI sesuai dengan panduan visual pada `docs/DESAIN.md`.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.03.04 — Gallery Service (Assignee: Dev 2 - Tyas)
* **Hasil Kerja (Deliverables):**
    - Sistem *backend* (`GalleryService`) telah selesai dibangun dan siap menangani operasi data untuk modul Gallery.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.03.06 — Gallery Upload (Assignee: Dev 2 - Tyas)