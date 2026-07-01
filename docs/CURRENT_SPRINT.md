# CURRENT_SPRINT.md — Tugas Aktif Saat Ini

> [!NOTE]
> **PANDUAN UNTUK DEVELOPER & AI AGENT:**
> * File ini berisi **SATU (1) TUGAS SAJA** yang sedang dikerjakan sekarang.
> * Update file ini secara manual di branch Anda saat mulai mengerjakan tugas baru dari `TASK_EXECUTION_PLAN.md`.
> * Jangan pernah mengerjakan tugas di luar apa yang tertulis di dokumen ini.

---

## 📌 IDENTITAS TUGAS

* **Fase Proyek:** PHASE 1 — UI & Layout Foundation
* **Epic Aktif:** EPIC 02 — UI FOUNDATION
* **Fitur Aktif:** FEATURE 02.03 — Public Layout
* **Tugas Aktif:** TASK 02.03.05 — WhatsApp CTA
* **Assignee:** Dev 5 (Cynthia)

---

## 🎯 OBJEKTIF & RUANG LINGKUP TUGAS

Tugas ini merupakan tahap terakhir dari fitur tata letak publik (Public Layout). Objektif utamanya adalah merancang tombol aksi melayang (Floating Action Button) spesifik untuk memicu komunikasi langsung via WhatsApp.

**Cakupan Pekerjaan:**
- Mengembangkan komponen `<x-whatsapp-cta />` yang disisipkan di dalam master layout publik.
- Mengimplementasikan tata letak melayang (`fixed bottom-X right-X`) dengan properti _z-index_ tinggi.
- Mengakomodasi tombol dengan ikon WhatsApp SVG.

---

## 🔍 KRITERIA PENERIMAAN (ACCEPTANCE CRITERIA)

Tugas ini dianggap selesai jika:
- [ ] Komponen tombol WhatsApp CTA berhasil dirangkai menjadi komponen mandiri.
- [ ] Komponen diintegrasikan dan muncul pada *master layout* `public.blade.php`.
- [ ] Gaya visual telah menggunakan rona hijau WhatsApp dengan ikon yang jelas (sesuai `docs/DESAIN.md`).

---

## ⏮️ TUGAS SEBELUMNYA (PREVIOUS TASK)

* **Tugas:** TASK 02.03.04 — Footer
* **Hasil Kerja (Deliverables):**
    - Merealisasikan `<x-public-footer>` dan mengaitkannya di bagian bawah dari *master layout*.
    - Penerapan palet `bg-surface-container-highest` dengan struktur layout 4 kolom responsif.

---

## ⏭️ TUGAS BERIKUTNYA (NEXT TASK)

* **Tugas:** TASK 02.04.01 — Admin Layout (Dev 4) atau modul lain sesuai eksekusi tim.