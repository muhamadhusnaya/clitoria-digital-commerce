# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 3 — Commerce Development
* **Epic Aktif:** EPIC 05 — COMMERCE
* **Fitur Aktif:** FEATURE 05.04 — Shopping Cart
* **Tugas Aktif:** TASK 05.04.04 — Update Quantity
* **Assignee:** Dev 5 (Cynthia)

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk membangun fungsionalitas pembaruan kuantitas produk (Update Quantity) secara langsung dari halaman/modal keranjang belanja publik. Pengguna dapat menambah atau mengurangi jumlah item sebelum melanjutkan ke proses pemesanan.

**Cakupan Pekerjaan:**
- Menyediakan rute PUT/POST internal untuk memproses perubahan jumlah item keranjang belanja (misal: `/cart/update`).
- Menyediakan elemen input numerik beserta tombol penambah (`+`) dan pengurang (`-`) kuantitas pada baris item keranjang belanja (`cart-item.blade.php`).
- Memanfaatkan AlpineJS atau AJAX request untuk mengirim data kuantitas baru beserta pengidentifikasi unik item ke backend sesaat setelah input berubah.
- Memanggil method pembaruan kuantitas (`updateQuantity`) pada `SessionCartService` di Controller untuk memperbarui data session Laravel.
- Melakukan pembaruan visual harga subtotal per item, kalkulasi total belanja keseluruhan, serta indikator jumlah item (*item counter*) global secara *real-time*.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Tombol pengubah kuantitas (`+` / `-`) atau input angka berfungsi dengan baik dan mengirimkan payload kuantitas terbaru ke backend.
- [ ] Kuantitas item berhasil diperbarui di dalam struktur data *session* keranjang belanja.
- [ ] Subtotal harga item tersebut dan total harga ringkasan belanja otomatis terkalkulasi ulang serta berubah secara *real-time* tanpa memuat ulang halaman (*page refresh*).
- [ ] Indikator jumlah item keranjang belanja pada `<x-public-header />` dan `<x-mobile-bottom-nav />` sinkron secara dinamis mengikuti akumulasi kuantitas yang baru.
- [ ] Sistem membatasi batas minimum kuantitas (minimal 1) atau otomatis memicu fungsi hapus jika kuantitas dikurangi hingga angka 0 (sesuai spesifikasi UX).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 05.04.03 — Remove Item
* **Hasil Kerja (Deliverables):**
    - Menyelesaikan interaksi penghapusan item dari keranjang berbasis sesi, lengkap dengan pembaruan data *session* serta pembaruan komponen visual secara *real-time*.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 05.04.05 — Cart Summary Page / Component