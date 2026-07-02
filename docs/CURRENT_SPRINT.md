# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 4 — Commerce Development
* **Epic Aktif:** EPIC 05 — COMMERCE[cite: 1]
* **Fitur Aktif:** FEATURE 05.01 — Product Management[cite: 1]
* **Tugas Aktif:** TASK 05.01.05 — Product CRUD UI[cite: 1]

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk mengelola data Produk. Halaman ini sangat krusial karena akan menjadi pusat kendali admin dalam menambah, mengubah, melihat, dan menghapus katalog produk yang dijual.

**Cakupan Pekerjaan:**
- Membuat halaman *Index* (tabel atau *grid*) untuk menampilkan daftar Produk beserta informasi dasar (seperti nama, harga, dan stok jika ada).
- Membuat form *Create* dan *Edit* (mencakup isian kompleks seperti nama produk, deskripsi lengkap, harga, dan persiapan *field upload* gambar).
- Membuat fitur *Delete* dengan konfirmasi modal untuk mencegah penghapusan data produk secara tidak sengaja.
- Menyambungkan form dan tombol aksi UI dengan *Controller* yang memanggil logika dari *Product Service*.
- Menggunakan komponen UI/Blade (*Input*, *Textarea*, *Button*, *Table*, *Modal*, dll) yang sudah dikembangkan di Epic 02.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Admin bisa melihat daftar Produk dengan rapi.
- [ ] Admin bisa melakukan operasi CRUD dasar pada data Produk dengan lancar.
- [ ] Validasi *form* di sisi UI (seperti keharusan mengisi nama dan harga) dan respon *error* dari *backend* tertangani serta ditampilkan dengan jelas.
- [ ] Terdapat notifikasi visual (*flash message* sukses/gagal).
- [ ] Tampilan responsif dan sesuai dengan *Design System* aplikasi (merujuk ke `docs/DESAIN.md`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 05.01.04 — Product Service[cite: 1] (Assignee: Dev 3 - Arum)[cite: 1]
* **Hasil Kerja (Deliverables):**
    - Sistem *backend* (`ProductService`) telah selesai dibangun dan siap digunakan untuk menangani alur bisnis data Produk.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 05.01.06 — Product Image Upload[cite: 1] (Assignee: Dev 3 - Arum)[cite: 1]