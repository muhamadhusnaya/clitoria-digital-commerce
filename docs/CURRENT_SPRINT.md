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
* **Fitur Aktif:** FEATURE 04.05 — Team Management
* **Tugas Aktif:** TASK 04.05.05 — Team CRUD UI

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini menjadi etalase akhir dari keseluruhan pengembangan *Backend* modul ini. Berhubung rekan *Frontend A* (Dev 4) mungkin mengerjakan hal lain, Anda diizinkan untuk membangun rute (*Route*), *Controller*, dan antarmuka *Blade* untuk administrasi (CRUD) dari `Team`.

**Cakupan Pekerjaan:**
- Menginisiasi `TeamController` yang akan menggunakan `TeamService`.
- Membuat fail-fail *view* (seperti `index.blade.php`, `create.blade.php`, `edit.blade.php`) di dalam folder `resources/views/admin/teams`.
- Mendaftarkan sekumpulan rute *resource* untuk administrasi entitas `Team` di fail *routes/web.php*.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Controller `TeamController` tersedia dan seluruh fungsinya terhubung ke lapisan _Service_.
- [ ] Folder _views_ untuk entitas tim (`admin/teams`) tersedia dan mampu menampilkan elemen antarmuka yang kohesif dengan desain sistem.
- [ ] Rute CRUD sukses terdaftar dan tidak *conflict* dengan jalur URL yang lain.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.05.04 — Team Service
* **Hasil Kerja (Deliverables):**
    - Abstraksi logika *Service* siap pakai (`TeamService`) yang membalut interaksi file `photo` serta mendelegasikan tugas ke repositori.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** EPIC 04.06 — Partner Management (TASK 04.06.01 - Partner Migration)