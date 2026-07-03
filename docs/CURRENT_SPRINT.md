# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 5 — Analytics & Reporting
* **Epic Aktif:** EPIC 06 — ANALYTICS[cite: 1]
* **Fitur Aktif:** FEATURE 06.01 — Sales Tracking[cite: 1]
* **Tugas Aktif:** TASK 06.01.06 — Sales Detail View[cite: 1]

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk melihat detail spesifik dari suatu transaksi penjualan. Halaman ini berfungsi sebagai struk atau laporan rincian dari data penjualan yang telah tercatat.

**Cakupan Pekerjaan:**
- Membuat halaman *Show/Detail* untuk menampilkan informasi lengkap dari sebuah ID transaksi.
- Menampilkan informasi ringkas transaksi (seperti tanggal penjualan, status, dan informasi pembeli jika ada).
- Menampilkan tabel rincian item produk yang terjual dalam transaksi tersebut (nama produk, harga satuan, kuantitas, dan subtotal).
- Menampilkan total akhir pendapatan dari transaksi tersebut.
- Menggunakan komponen UI/Blade (*Card*, *Table*, *Badge*, dll) yang sudah dikembangkan di Epic 02[cite: 1].

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Admin bisa membuka halaman detail dari daftar penjualan dan melihat rincian datanya dengan jelas.
- [ ] Tabel rincian produk yang dibeli tampil rapi dan perhitungannya (subtotal/total) tertata dengan baik.
- [ ] Tata letak informasi terstruktur secara visual dan mudah dibaca.
- [ ] Tampilan responsif dan sesuai dengan *Design System* aplikasi (merujuk ke `docs/DESAIN.md`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 06.01.05 — Sales Entry UI[cite: 1] (Assignee: Dev 4 - Alwi)[cite: 1]
* **Hasil Kerja (Deliverables):**
    - Halaman atau form untuk memasukkan/mencatat data penjualan baru telah selesai dikerjakan beserta antarmukanya.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 06.02.01 — KPI Cards[cite: 1] (Masuk ke FEATURE 06.02 — Dashboard Analytics[cite: 1], Assignee: Dev 4 - Alwi)[cite: 1]