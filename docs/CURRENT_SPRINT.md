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
* **Fitur Aktif:** FEATURE 05.03 — Product Catalog
* **Tugas Aktif:** TASK 05.03.04 — Product Search
* **Assignee:** Dev 5 (Cynthia)

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini bertujuan untuk membangun fitur penyaringan (filtering) produk pada halaman Katalog (`Product Listing Page`). Fitur ini akan mempermudah calon pembeli dalam memilah-milah produk berdasarkan kriteria tertentu agar pengalaman belanja menjadi lebih efisien.

**Cakupan Pekerjaan:**
- Merancang komponen UI kontrol filter (misalnya dalam bentuk *Sidebar* di desktop atau *Modal/Drawer* di mobile).
- Menyediakan opsi penyaringan esensial seperti berdasarkan Kategori Produk, Rentang Harga (*Price Range*), dan opsi pengurutan (*Sorting* seperti termurah, termahal, atau terbaru).
- Menangkap input filter dari *frontend* dan mengirimkannya kembali ke Controller menggunakan *Query Strings URL* (contoh: `?category=sapphire&sort=price_asc`).
- Memodifikasi *query builder* Eloquent pada sisi backend agar dapat menyaring koleksi produk secara dinamis berdasarkan parameter filter yang aktif.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Komponen UI penyaringan telah terintegrasi dengan baik pada halaman `Product Listing Page`.
- [ ] Ketika kriteria filter dipilih dan diterapkan, daftar produk otomatis berubah dan hanya menampilkan produk yang memenuhi syarat.
- [ ] *Query string* pada URL berubah secara dinamis mencerminkan filter yang sedang aktif, sehingga halaman hasil filter dapat di-*bookmark* atau dibagikan kembali.
- [ ] Pagination (jika ada) tetap mempertahankan *state* filter saat berpindah halaman (contoh: `?category=sapphire&page=2`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 05.03.02 — Product Detail Page
* **Hasil Kerja (Deliverables):**
    - Menyelesaikan halaman detail produk dinamis (`/products/{slug}`) lengkap dengan layout terpisah untuk galeri foto dan deskripsi teks kaya.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 05.03.04 — Product Search