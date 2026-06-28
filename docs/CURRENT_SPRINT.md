# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **DUA (2) TUGAS FRONTEND** yang digabungkan secara khusus untuk efisiensi pengerjaan oleh Dev 4.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 2 — CMS Module Development
* **Epic Aktif:** EPIC 04 — CMS
* **Fitur Aktif:** FEATURE 04.03 — Gallery Management
* **Tugas Aktif:** - TASK 04.03.05 — Gallery CRUD UI (Dev 4)
  - TASK 04.03.07 — Gallery Preview (Dev 4)

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk merampungkan seluruh antarmuka pengguna (UI) panel admin untuk modul *Gallery*, sekaligus mengintegrasikan fitur *Preview* agar admin dapat meninjau tata letak dan gambar galeri sebelum dipublikasikan.

**Cakupan Pekerjaan:**
- Membuat berkas *Blade template* untuk halaman daftar data (`index`), form tambah (`create`), dan form ubah (`edit`) di dalam `resources/views/admin/galleries`.
- Mengimplementasikan elemen antarmuka untuk unggah gambar yang terhubung dengan `GalleryService` (buatan tim Backend).
- Membangun komponen antarmuka *Preview* (bisa berupa *modal pop-up* atau halaman terpisah) untuk menampilkan representasi visual galeri secara langsung (*real-time* atau berdasarkan data tersimpan).
- Menghubungkan *Controller* terkait untuk merender *view* tersebut.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Seluruh halaman CRUD UI (Index, Create, Edit) untuk entitas *Gallery* dapat dirender tanpa *error* dan responsif.
- [ ] Admin dapat melakukan operasi penambahan dan pengubahan data (termasuk unggah gambar) melalui form UI.
- [ ] Fitur *Gallery Preview* beroperasi dengan baik, menampilkan *thumbnail* atau tata letak gambar sesuai dengan desain yang diharapkan.
- [ ] Rute UI terlindungi oleh *middleware* autentikasi.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.03.06 — Gallery Image Upload (Backend)
* **Hasil Kerja (Deliverables):**
    - Tim Backend (Dev 1) telah menyelesaikan logika penanganan *file* (simpan dan hapus menggunakan `UploadTrait`) secara sempurna di `GalleryService`.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.04.01 — Testimonial Migration
* *(Catatan: Setelah antarmuka Gallery selesai, alur kerja akan kembali ke Backend (Dev 1) untuk memulai inisialisasi basis data modul Testimonial).*