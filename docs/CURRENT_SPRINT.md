# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 2 — CMS Module Development
* **Epic Aktif:** EPIC 04 — CMS[cite: 1]
* **Fitur Aktif:** FEATURE 04.06 — Partner Management[cite: 1]
* **Tugas Aktif:** TASK 04.06.05 — Partner CRUD UI[cite: 1]

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk mengelola data Partner (Mitra Kerja/Sponsor). Halaman ini akan menjadi tempat admin menambah, mengedit, melihat, dan menghapus profil mitra yang akan ditampilkan di halaman publik.

**Cakupan Pekerjaan:**
- Membuat halaman *Index* (tabel atau *grid*) untuk menampilkan daftar Partner yang terdaftar.
- Membuat form *Create* dan *Edit* (mencakup isian untuk nama partner, tautan *website/URL*, status aktif, dan *upload* logo partner).
- Membuat fitur *Delete* dengan konfirmasi modal untuk mencegah penghapusan data secara tidak sengaja.
- Menyambungkan form dan tombol aksi UI dengan *Controller* yang memanggil logika dari *Partner Service*.
- Menggunakan komponen UI/Blade (*Input*, *Button*, *Table*, *Modal*, dll) yang sudah dikembangkan di Epic 02.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Admin bisa melihat daftar Partner dengan rapi beserta logonya.
- [ ] Admin bisa menambah, mengubah, dan menghapus data Partner dengan lancar.
- [ ] Validasi *form* di sisi UI (seperti keharusan mengunggah gambar) dan respon *error* dari *backend* tertangani serta ditampilkan dengan jelas.
- [ ] Terdapat notifikasi visual (*flash message* sukses/gagal).
- [ ] Tampilan responsif dan sesuai dengan *Design System* aplikasi (merujuk ke `docs/DESAIN.md`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.06.04 — Partner Service[cite: 1] (Assignee: Dev 2 - Tyas)[cite: 1]
* **Hasil Kerja (Deliverables):**
    - Sistem *backend* (`PartnerService`) telah selesai dibangun dan siap digunakan untuk menangani alur bisnis data Partner.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 05.01.01 — Product Migration[cite: 1] (Masuk ke EPIC 05 — COMMERCE, Assignee: Dev 3 - Arum)[cite: 1]