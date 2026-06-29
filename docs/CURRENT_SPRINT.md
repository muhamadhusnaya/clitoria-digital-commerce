# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 2 — CMS Module Development
* **Epic Aktif:** EPIC 04 — CMS
* **Fitur Aktif:** FEATURE 04.06 — Partner Management
* **Tugas Aktif:** TASK 04.06.03 — Partner Repository

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 2 — CMS Module Development
* **Epic Aktif:** EPIC 04 — CMS
* **Fitur Aktif:** FEATURE 04.06 — Partner Management
* **Tugas Aktif:** TASK 04.06.04 — Partner Service

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk membangun *Service Layer* (`PartnerService`) yang akan menangani seluruh alur *business logic* terkait manajemen data Partner. Lapis ini berfungsi memproses aturan bisnis sebelum data dilempar ke lapis penyimpanan.

**Cakupan Pekerjaan:**
- Membangun berkas kelas `PartnerService` di dalam direktori `app/Services`.
- Menginjeksi `PartnerRepositoryInterface` ke dalam `PartnerService` melalui *constructor injection*.
- Mengimplementasikan fungsi-fungsi logika bisnis utama untuk manajemen partner (seperti validasi status aktif, pengondisian data sebelum disimpan, atau manipulasi objek partner lainnya).
- Memastikan pemisahan tanggung jawab yang bersih, di mana seluruh operasi kueri database didelegasikan sepenuhnya ke *Repository*.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Berkas `PartnerService.php` berhasil dibuat di folder `app/Services`.
- [ ] Fungsi-fungsi penanganan logika bisnis untuk manajemen Partner tersedia dengan memanfaatkan metode dari *Repository Interface*.
- [ ] Kode bersih dari pemanggilan langsung model Eloquent atau kueri database mentah (*raw queries*).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.06.03 — Partner Repository (Assignee: Dev 2 - Tyas)
* **Hasil Kerja (Deliverables):**
    - `PartnerRepositoryInterface` dan `PartnerRepository` telah selesai dibuat serta berhasil terikat (*bound*) di dalam *Service Provider* proyek tanpa *error*.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.06.05 — Partner CRUD UI (Assignee: Dev 4 - Alwi)

Tugas ini bertujuan untuk membangun lapis abstraksi data (*Repository Pattern*) untuk entitas Partner. Langkah ini diambil guna memisahkan logika kueri database dari lapis bisnis (*Service*) maupun antarmuka (*Controller*).

**Cakupan Pekerjaan:**
- Membangun berkas kontrak `PartnerRepositoryInterface` di dalam direktori `app/Repositories/Contracts`.
- Membangun kelas implementasi `PartnerRepository` di dalam direktori `app/Repositories/Eloquent`.
- Memastikan `PartnerRepository` menginduk pada `BaseRepository` yang sudah ada di proyek untuk memanfaatkan fungsi CRUD standar.
- Melakukan registrasi atau *binding* antara `PartnerRepositoryInterface` dengan `PartnerRepository` di dalam `AppServiceProvider` atau `RepositoryServiceProvider`.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Berkas `PartnerRepositoryInterface.php` berhasil dibuat di folder kontrak yang tepat.
- [ ] Berkas `PartnerRepository.php` berhasil mengimplementasikan *interface* dan menginduk pada *Base Repository*.
- [ ] *Binding* di *Service Provider* berjalan sukses tanpa memicu insiden *binding error* saat kelas dieksekusi atau diinjeksi.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.06.02 — Partner Model (Assignee: Dev 2 - Tyas)
* **Hasil Kerja (Deliverables):**
    - Berkas Eloquent Model `Partner.php` telah selesai dibuat dengan konfigurasi `$fillable` dan pengaktifan proteksi data lewat `SoftDeletes`.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.06.04 — Partner Service (Assignee: Dev 2 - Tyas)