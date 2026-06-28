# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

*   **Fase Proyek:** PHASE 1 — Core Domain Implementation
*   **Epic Aktif:** EPIC 02 — USER MANAGEMENT & AUTHENTICATION
*   **Fitur Aktif:** FEATURE 02.01 — Authentication System
*   **Tugas Aktif:** TASK 02.01.01 — Configure User Authentication

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Menerapkan sistem autentikasi pengguna secara utuh, mulai dari pendaftaran (register) hingga validasi akses (_login/logout_) berdasarkan arsitektur _Service-Repository_.

**Cakupan Pekerjaan:**
- Mengonfigurasi tabel dan skema *database* untuk autentikasi jika belum tersinkronisasi.
- Membuat _Controller_, _Service_, dan _Repository_ yang menangani fungsi Login/Register.
- Merangkai *Routes* autentikasi di `web.php` (atau *endpoint* API jika diminta).

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Pengguna bisa mendepositkan data baru ke database (Register).
- [ ] Pengguna terautentikasi dan sesi berhasil disimpan saat otorisasi valid (Login).
- [ ] Implementasi tidak keluar dari jalur struktur arsitektur *Service/Repository*.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.03.05 — Configure Shared Helpers
*   **Hasil Kerja (Deliverables):**
    - File *helper* global `app/Helpers/helpers.php` telah dirancang dan di-_load_ secara otomatis via Composer.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 02.01.02 — Implement Role & Permission Management
*   *(Catatan: Jangan dikerjakan dulu sebelum tugas aktif di atas selesai dan di-merge).*