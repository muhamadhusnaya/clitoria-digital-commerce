# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 3 — Configuration & Settings Development
* **Epic Aktif:** EPIC 07 — SETTINGS[cite: 1]
* **Fitur Aktif:** FEATURE 07.01 — Business Settings[cite: 1]
* **Tugas Aktif:** TASK 07.01.05 — Business Settings CRUD UI

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini berfokus pada pembuatan antarmuka pengguna (UI) di halaman Admin untuk mengelola seluruh pengaturan bisnis dasar (seperti Nomor WhatsApp, Email, Alamat, dan media sosial). Halaman ini merupakan pusat kontrol konfigurasi profil bisnis perusahaan.

**Cakupan Pekerjaan:**
- Membuat halaman form (bisa menggunakan *layout* tunggal dengan beberapa kategori atau *tabbed view*) untuk mengelola informasi bisnis.
- Menyiapkan elemen *input* teks untuk Email Bisnis, *input* angka/teks khusus untuk Nomor WhatsApp, dan *textarea* untuk Alamat.
- Menyambungkan form UI dengan *endpoint/Controller* yang memanggil logika dari *Settings Service*.
- Menggunakan komponen UI/Blade (*Input*, *Button*, *Card*, dll) yang sudah dikembangkan di Epic 02[cite: 1].

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Admin bisa melihat formulir pengaturan dengan kolom yang sudah terisi otomatis jika data sudah ada di database (*auto-fill*).
- [ ] Proses pembaruan data pengaturan berjalan lancar saat tombol simpan ditekan.
- [ ] Validasi *form* di sisi UI (seperti format email yang benar) dan respon *error* dari *backend* tertangani serta ditampilkan dengan jelas di bawah *input* terkait.
- [ ] Terdapat notifikasi visual (*flash message* sukses/gagal) setelah pengaturan disimpan.
- [ ] Tampilan responsif dan rapi sesuai dengan panduan *Design System* aplikasi (merujuk ke `docs/DESAIN.md`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 07.01.04 — WhatsApp Number Setting[cite: 1] (Assignee: Dev 2 - Tyas)[cite: 1]
* **Hasil Kerja (Deliverables):**
    - Logika *backend* dan *service* untuk menangani konfigurasi nomor WhatsApp bisnis sudah diselesaikan dan siap diintegrasikan dengan UI.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 07.01.06 — Address Setting[cite: 1] (Assignee: Dev 2 - Tyas)[cite: 1]