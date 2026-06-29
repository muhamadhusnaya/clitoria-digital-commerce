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
* **Fitur Aktif:** FEATURE 04.04 — Testimonial Management
* **Tugas Aktif:** TASK 04.04.05 — Testimonial CRUD UI

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk mengelola data Testimonial. Bagian ini akan mengkonsumsi logika *backend* yang sudah disiapkan sebelumnya.

**Cakupan Pekerjaan:**
- Membuat halaman *Index* (tabel/list) untuk menampilkan semua data testimonial beserta fitur *pagination*.
- Membuat form *Create* dan *Edit* (termasuk *upload* foto avatar/profil pengirim testimonial jika ada di spesifikasi desain).
- Membuat fitur *Delete* dengan konfirmasi modal yang aman.
- Menyambungkan form dan tombol aksi UI dengan *Controller* dan *Service* terkait.
- Menggunakan komponen UI/Blade (seperti *Input*, *Button*, *Table*, *Modal*) yang sudah dikembangkan di Epic 02.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Admin bisa melihat daftar testimonial yang ada.
- [ ] Admin bisa menambah, mengubah, dan menghapus testimonial dengan lancar.
- [ ] Validasi *form* di sisi UI dan respon *error* dari *backend* tertangani dan ditampilkan dengan rapi (misal: notifikasi *flash message* sukses/gagal).
- [ ] Tampilan responsif dan sesuai dengan *Design System* (merujuk ke `docs/DESAIN.md`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.04.04 — Testimonial Service (Assignee: Dev 2 - Tyas)
* **Hasil Kerja (Deliverables):**
    - `TestimonialService` sudah siap digunakan sebagai jembatan untuk operasi CRUD ke *database* via *Repository*.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.04.06 — Featured Testimonial (Assignee: Dev 2 - Tyas)