# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 3 — Commerce Module Development
* **Epic Aktif:** EPIC 05 — COMMERCE
* **Fitur Aktif:** FEATURE 05.02 — Product Pricing
* **Tugas Aktif:** TASK 05.02.01 — Product Price Migration

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini menjadi langkah pembuka bagi entitas `Product Price`. Harga produk tidak hanya bersifat absolut, namun bisa jadi memiliki varian, masa berlaku (harga diskon), maupun penyesuaian khusus. Oleh karena itu, entitas ini perlu dipisahkan atau ditambahkan sebagai ekstensi produk.

**Cakupan Pekerjaan:**
- Menginisiasi file *migration* untuk tabel harga (misal: `product_prices` atau sejenisnya) yang tertaut ke tabel `products`.
- Mendefinisikan skema kolom (termasuk referensi relasi) seperti `product_id`, `price`, `discount_price`, `currency`, dll.
- Mengeksekusi migrasi ke *database*.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Tersedia file *migration* untuk Product Price dengan skema sesuai kebutuhan `SCHEMA.md`.
- [ ] Kolom-kolom harga terbangun dan memiliki tipe data finansial yang akurat (seperti `decimal` atau `bigInteger`).
- [ ] Tabel berhasil terbentuk tanpa _error_ (telah di-_migrate_).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 05.01.06 — Product Image Upload
* **Hasil Kerja (Deliverables):**
    - `UploadTrait` selesai diciptakan dan berhasil diaplikasikan dalam `ProductService` untuk menyederhanakan *upload file*.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 05.02.02 — Product Price CRUD
* *(Catatan: Selesainya tugas penanganan file produk ini menandai rampungnya backend untuk Feature 05.01. Fokus akan berlanjut ke inisialisasi basis data untuk sistem harga).*