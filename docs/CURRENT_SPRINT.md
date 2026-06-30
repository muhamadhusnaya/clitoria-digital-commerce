# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 3 — Configuration & Settings Development
* **Epic Aktif:** EPIC 07 — SETTINGS
* **Fitur Aktif:** FEATURE 07.01 — Business Settings
* **Tugas Aktif:** TASK 07.01.03 — Settings Service
 
---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk membangun *Service Layer* (`SettingsService`) yang akan memproses seluruh *business logic* terkait manajemen konfigurasi dan pengaturan platform. Karena pengaturan umumnya berbasis *key-value*, service ini harus bisa menangani pengambilan dan pembaruan nilai berdasarkan *key* secara efisien.

**Cakupan Pekerjaan:**
- Membangun berkas kelas `SettingsService` di dalam direktori `app/Services`.
- Menginjeksi `SettingsRepositoryInterface` ke dalam `SettingsService` melalui *constructor injection*.
- Mengimplementasikan fungsi untuk mengambil pengaturan (misal: `getSetting(string $key)`) dan fungsi untuk memperbarui atau menyimpan pengaturan baru (misal: `updateSetting(string $key, $value)`).
- Menyiapkan logika *caching* ringan (jika diizinkan oleh arsitektur) agar pengambilan konfigurasi global tidak membebani database setiap kali halaman dimuat, serta mendelegasikan kueri utama ke *Repository*.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Berkas `SettingsService.php` sukses terbuat di folder `app/Services`.
- [ ] Fungsi untuk *get* dan *update* pengaturan berbasis *key-value* sudah terimplementasi dan memanfaatkan metode dari *Repository Interface*.
- [ ] Kode bersih dari pemanggilan *query builder* secara langsung atau inisiasi model Eloquent tanpa melalui lapis abstraksi *Repository*.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 07.01.02 — Settings Repository (Assignee: Dev 2 - Tyas)
* **Hasil Kerja (Deliverables):**
    - `SettingsRepositoryInterface` dan `SettingsRepository` telah berhasil dibuat dan *binding* pada *Service Provider* telah dikonfigurasi dengan sempurna.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 07.01.04 — WhatsApp Number Setting (Assignee: Dev 2 - Tyas)