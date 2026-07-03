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
* **Fitur Aktif:** FEATURE 05.05 — WhatsApp Checkout
* **Tugas Aktif:** TASK 05.05.04 — Dynamic WhatsApp Redirect
* **Assignee:** Dev 5 (Cynthia)

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini merupakan tahap final dari alur transaksi WhatsApp Checkout. Objektif utamanya adalah membangun mekanisme pengalihan tautan (*redirect URL*) dinamis yang membawa payload string pesan pesanan dari aplikasi web menuju API WhatsApp resmi (`api.whatsapp.com` atau `wa.me`).

**Cakupan Pekerjaan:**
- Menyediakan rute atau interseptor frontend untuk menangani proses finalisasi redirect setelah teks pesanan sukses di-generate.
- Mengonstruksi tautan WhatsApp tujuan secara dinamis dengan melakukan enkoding teks (*URL Encoding*) pada payload pesan agar kompatibel dengan query parameter `text` di WhatsApp.
- Mengintegrasikan nomor WhatsApp tujuan (nomor admin) secara dinamis dari konfigurasi sistem/bisnis (tidak boleh di-*hardcode*).
- Menangani aksi pembukaan jendela/tab baru browser secara aman (*secure client-side redirection*) yang responsif baik di perangkat desktop maupun aplikasi mobile.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Pengguna otomatis dialihkan ke WhatsApp setelah menekan tombol konfirmasi checkout (baik dari jalur Cart maupun Buy Now).
- [ ] Tautan mengarah ke nomor WhatsApp admin yang terkonfigurasi dengan format kode negara yang valid (misal: `62xxx`).
- [ ] Teks pesanan yang terisi otomatis di kolom obrolan WhatsApp terformat secara rapi (karakter spasi, baris baru, dan tanda baca khusus tidak rusak akibat proses enkoding URL).
- [ ] Fitur pengalihan berfungsi lancar di peramban desktop (membuka tab baru / WhatsApp Web) maupun perangkat mobile (memicu pembukaan aplikasi WhatsApp/WhatsApp Business lokal).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 05.05.03 — Buy Now Checkout
* **Hasil Kerja (Deliverables):**
    - Menyelesaikan alur transaksi kilat langsung dari halaman detail produk tunggal tanpa mengganggu isi session keranjang belanja aktif pengguna.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 06.01.01 — Sales Migration 