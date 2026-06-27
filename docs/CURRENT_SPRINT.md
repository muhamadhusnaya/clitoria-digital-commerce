# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

*   **Fase Proyek:** PHASE 0 — Project Foundation
*   **Epic Aktif:** EPIC 01 — FOUNDATION
*   **Fitur Aktif:** FEATURE 01.03 — Architecture Foundation
*   **Tugas Aktif:** TASK 01.03.03 — Create Base Repository Layer

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Menyiapkan fondasi untuk pola arsitektur repositori (*Repository Pattern*) dengan merumuskan kelas antar muka (*Interface*) maupun kelas abstrak dasarnya.

**Cakupan Pekerjaan:**
- Membuat file `app/Contracts/BaseRepositoryInterface.php` (opsional namun sangat disarankan untuk standarisasi kontrak).
- Membuat file `app/Repositories/BaseRepository.php` yang mengimplementasikan _interface_ tersebut.
- Menyediakan kerangka dasar *method* standar untuk interaksi *database* seperti `all()`, `find()`, `create()`, `update()`, dan `delete()`.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Berkas `BaseRepository` atau kontrak *interface*-nya ada di dalam sistem.
- [ ] *Syntax* PHP tervalidasi benar dan _namespace_ terdaftarkan.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 01.03.02 — Create Base Service Layer
*   **Hasil Kerja (Deliverables):**
    - Kelas abstrak `BaseService.php` telah terbuat dan di-*assign* ke *namespace* `App\Services`.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 01.03.04 — Configure Route Structure
*   *(Catatan: Jangan dikerjakan dulu sebelum tugas aktif di atas selesai dan di-merge).*