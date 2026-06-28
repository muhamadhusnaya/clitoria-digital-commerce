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
* **Fitur Aktif:** FEATURE 04.04 — Testimonial Management
* **Tugas Aktif:** TASK 04.04.03 — Testimonial Repository

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertindak sebagai penjembatan kueri antara *Model* dan lapis aplikasi (Service/Controller). Kita akan menggunakan arsitektur *Repository Pattern* demi kebersihan kode.

**Cakupan Pekerjaan:**
- Membangun `TestimonialRepositoryInterface` di `app/Repositories/Contracts`.
- Membangun `TestimonialRepository` di `app/Repositories/Eloquent` yang mengimplementasikan *interface* tersebut.
- Meregistrasikan kombinasi *Interface-Class* di dalam *Service Provider* aplikasi (e.g. `AppServiceProvider`).

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Terdapat `TestimonialRepositoryInterface` dan `TestimonialRepository`.
- [ ] *Repository* menginduk pada *BaseRepository* yang sudah ada.
- [ ] *Binding* di *Service Provider* sukses dipanggil tanpa insiden *binding error*.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 04.04.02 — Testimonial Model
* **Hasil Kerja (Deliverables):**
    - Entitas `Testimonial` telah mengudara dengan `$fillable` dan proteksi `SoftDeletes` aktif.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 04.04.04 — Testimonial Service