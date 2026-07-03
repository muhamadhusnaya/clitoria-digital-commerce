# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **TUGAS FRONTEND** yang dikerjakan oleh Dev 4.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 2 — CMS Module Development
* **Epic Aktif:** EPIC 04 — CMS[cite: 1]
* **Fitur Aktif:** FEATURE 04.04 — Testimonial Management[cite: 1]
* **Tugas Aktif:** TASK 04.04.05 — Testimonial CRUD UI (Dev 4)[cite: 1]

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk membangun antarmuka pengguna (UI) panel admin untuk modul *Testimonial*, memungkinkan admin untuk mengelola ulasan atau testimoni pelanggan dengan mudah.

**Cakupan Pekerjaan:**
* Membuat berkas *Blade template* untuk halaman daftar data (`index`), form tambah (`create`), dan form ubah (`edit`) di dalam direktori `resources/views/admin/testimonials`.
* Mengimplementasikan elemen antarmuka form yang mencakup input teks (nama klien, jabatan/perusahaan), *textarea* (isi testimoni), dan unggah gambar (avatar/foto klien).
* Menghubungkan antarmuka dengan *Controller* terkait untuk memastikan data dapat ditampilkan, ditambahkan, diperbarui, dan dihapus dengan lancar.
* Memastikan seluruh tampilan tabel dan form menggunakan komponen UI yang sudah terstandarisasi dan responsif.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
* [ ] Seluruh halaman CRUD UI (Index, Create, Edit) untuk entitas *Testimonial* dapat dirender tanpa *error* dan sepenuhnya responsif di berbagai ukuran layar.
* [ ] Admin dapat melakukan operasi penambahan dan pengubahan data, termasuk mengunggah foto avatar klien melalui form UI.
* [ ] Validasi form (jika ada *error* dari *backend*) ditampilkan dengan benar pada antarmuka.
* [ ] Rute UI terlindungi oleh *middleware* autentikasi dan mematuhi standar desain yang telah ditetapkan.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.04.04 — Testimonial Service (Dev 2)[cite: 1]
* **Hasil Kerja (Deliverables):**
    * Tim Backend (Dev 2) telah menyelesaikan pembuatan Service, Repository, Model, dan Migration untuk entitas Testimonial[cite: 1].

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.04.06 — Featured Testimonial (Dev 2)[cite: 1]
* *(Catatan: Setelah antarmuka Testimonial CRUD UI selesai, alur kerja akan kembali ke Backend (Dev 2) untuk mengerjakan fitur Featured Testimonial).*