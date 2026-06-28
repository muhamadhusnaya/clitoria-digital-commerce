# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

*   **Fase Proyek:** PHASE 2 — CMS Module Development
*   **Epic Aktif:** EPIC 04 — CMS
*   **Fitur Aktif:** FEATURE 04.01 — Hero Management
*   **Tugas Aktif:** TASK 04.01.04 — Hero Service

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini ditujukan untuk membangun lapisan _Service_ yang akan merangkum seluruh logika bisnis (seperti validasi khusus, manipulasi file *image*, dll.) dari fitur Hero.

**Cakupan Pekerjaan:**
- Membuat kelas `HeroService` di `app/Services`.
- Menghubungkan (menginjeksi) `HeroRepositoryInterface` ke dalam layanan ini.
- Merancang *method* pemrosesan data untuk `createHero`, `updateHero`, dan delegasi logika pengundian data.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] File `app/Services/HeroService.php` tercipta.
- [ ] Repositori diinjeksikan secara presisi lewat konstraktor (DI).
- [ ] _Logic_ dasar CRUD disiapkan sebagai persiapan sebelum diakses _controller_.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

*   **Tugas:** TASK 04.01.03 — Hero Repository
*   **Hasil Kerja (Deliverables):**
    - Mendefinisikan kontrak interface dan implementasi repositori untuk model `Hero`.
    - Mendaftarkan *binding* di `RepositoryServiceProvider`.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

*   **Tugas:** TASK 04.01.05 — Hero Controller
