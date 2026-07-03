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
* **Fitur Aktif:** FEATURE 06.02 — Dashboard Analytics[cite: 1]
* **Tugas Aktif:** TASK 06.02.05 — Recent Sales Widget[cite: 1]

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka komponen (*widget*) "Penjualan Terbaru" (Recent Sales) yang akan dipajang di halaman *Dashboard Admin*. Widget ini bertujuan agar admin bisa langsung melihat sekilas transaksi-transaksi yang baru saja masuk tanpa harus membuka halaman rincian penjualan.

**Cakupan Pekerjaan:**
- Merancang komponen *widget* berbentuk tabel mini atau daftar (*list*) berdesain ringkas.
- Menampilkan informasi esensial dari transaksi terbaru (misalnya: ID Pesanan, Tanggal, Nama Pembeli/Produk, dan Total Harga).
- Menyiapkan elemen visual seperti *badge* status jika diperlukan.
- Mengintegrasikan *widget* ini ke dalam *layout* utama Dashboard Admin.
- Menggunakan komponen UI/Blade (*Card*, *Table*, *Badge*) yang sudah dibangun sebelumnya di Epic 02[cite: 1].

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] *Widget* Penjualan Terbaru berhasil dipasang dan tampil rapi di halaman *Dashboard*.
- [ ] Desain tabel atau daftar di dalam *widget* mudah dibaca dan ukurannya proporsional.
- [ ] UI sudah disiapkan untuk menerima data dinamis (berisi *dummy data* sementara yang siap diganti oleh data dari *Controller*).
- [ ] Tampilan responsif (tabel bisa di-*scroll* horizontal atau menyesuaikan diri dengan layar *mobile*) dan sesuai dengan `docs/DESAIN.md`.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 06.02.04 — Product Ranking[cite: 1] (Assignee: Dev 3 - Arum)[cite: 1]
* **Hasil Kerja (Deliverables):**
    - Logika *backend* untuk menghitung metrik peringkat produk (produk terlaris) telah diselesaikan oleh tim *backend*.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 06.03.01 — Daily Report[cite: 1] (Masuk ke FEATURE 06.03 — Reporting[cite: 1], Assignee: Dev 3 - Arum)[cite: 1]