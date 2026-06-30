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
* **Fitur Aktif:** FEATURE 07.03 — Dynamic SEO Rendering
* **Tugas Aktif:** TASK 07.03.01 — SEO Blade Components

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk membuat komponen UI di sisi *view* (Laravel Blade) yang akan merender *tag meta* SEO secara dinamis di dalam bagian `<head>` HTML aplikasi. Komponen ini akan mengkonsumsi pengaturan SEO yang telah dibuat pada tugas-tugas sebelumnya.

**Cakupan Pekerjaan:**
- Membuat komponen Blade baru (misalnya: `resources/views/components/seo-meta.blade.php`).
- Mengatur agar komponen tersebut mengambil nilai pengaturan SEO (seperti *Meta Title*, *Description*, dan *Keywords*) dari `SettingsService` secara otomatis sebagai *fallback* (nilai bawaan).
- Membuka *props* atau slot agar halaman spesifik (seperti detail produk) bisa menimpa (*override*) nilai bawaan tersebut dengan data spesifik halamannya.
- Memasukkan komponen ini ke dalam *Public Master Layout* yang akan digunakan oleh pengunjung web.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Terdapat file komponen Blade khusus untuk merender tag SEO.
- [ ] Komponen berhasil dipanggil di *layout* utama dan tag `<meta>` muncul dengan benar saat halaman di-*inspect* lewat *browser*.
- [ ] Jika tidak ada data spesifik yang dilempar dari *Controller*, komponen otomatis menampilkan pengaturan SEO global dari database.

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 07.02.04 — Open Graph Image (Assignee: Dev 2 - Tyas)
* **Hasil Kerja (Deliverables):**
    - Seluruh fondasi *backend* pengaturan SEO (termasuk penyimpanan gambar untuk *Open Graph*) telah selesai dan tersimpan rapi di dalam sistem *Settings*.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 07.03.02 — Dynamic Meta Tags (Assignee: Dev 2 - Tyas)