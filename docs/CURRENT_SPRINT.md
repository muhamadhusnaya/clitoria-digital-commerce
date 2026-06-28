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
* **Tugas Aktif:** TASK 04.02.05 — Benefit CRUD UI

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk membangun antarmuka pengguna (UI) dan pengontrol (Controller) yang akan menangani interaksi admin untuk modul Benefit. Tugas ini akan menghubungkan tampilan visual dengan logika bisnis di `BenefitService` yang telah diselesaikan sebelumnya.

**Cakupan Pekerjaan:**
- Membuat `BenefitController` di dalam direktori `app/Http/Controllers/Admin`.
- Menghubungkan *routing* CRUD Benefit di dalam `routes/admin.php`.
- Membuat berkas *Blade template* untuk halaman daftar data (`index`), form tambah (`create`), dan form ubah (`edit`) di dalam direktori `resources/views/admin/benefits`.
- Mengintegrasikan form dengan fungsionalitas *upload* gambar/ikon dan sistem pengurutan data (*ordering*).

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] `BenefitController` berhasil dibuat dan menggunakan `BenefitService` melalui *Dependency Injection*.
- [ ] Rute CRUD terdaftar dengan benar di `routes/admin.php` dan dilindungi oleh *middleware* autentikasi admin.
- [ ] Antarmuka visual (tabel data dan form) dapat dirender tanpa *error* dan *responsive* di panel admin.
- [ ] Admin dapat melakukan operasi Tambah, Lihat, Ubah, dan Hapus (termasuk *upload* file) langsung melalui *browser* dengan notifikasi sukses/gagal yang sesuai.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.02.06 — Benefit Ordering
* **Hasil Kerja (Deliverables):**
    - Lapisan *backend* (Service & Repository) untuk modul Benefit telah sepenuhnya selesai, termasuk logika manipulasi *file upload* dan pengaturan nomor urut data.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.03.01 — Gallery Migration
* *(Catatan: Setelah integrasi UI Benefit selesai, fokus akan kembali ke tim Backend untuk memulai inisialisasi skema basis data modul Gallery).*