# Panduan Alur Kerja Tim & Git Workflow (CONTRIBUTING.md)

---

## 🤖 1. Alur Kerja Vibe Coding (AI-Assisted Development)

Gunakan siklus berulang (loop) ini setiap kali bekerja dengan AI Coding Agent (Cursor, Antigravity, Claude Code, dsb.):

### Daftar Peran Tim (Team Roles Mapping):
*   **Dev 1 (Husnaya):** Core Setup, Auth Backend, Testing, and Deployment.
*   **Dev 2 (Tyas):** CMS Modules, Settings, and SEO Backend.
*   **Dev 3 (Arum):** Products, Pricing, Session Cart, WA Checkout, and Analytics Backend.
*   **Dev 4 (Alwi):** Design System, UI Components, and Admin Panel UI.
*   **Dev 5 (Cynthia):** Public Layouts, Product Catalog UI, Cart & WA Checkout UI.

### Siklus Alur Kerja:
1.  **Cari Tugas Anda:** Buka [docs/TASK_EXECUTION_PLAN.md](file:///d:/Kuliah/StartupDigital/clitoria-digital-commerce/docs/TASK_EXECUTION_PLAN.md) dan cari tugas berikutnya yang bertanda inisial Anda di kolom **`Assignee`** (`Dev 1` s.d. `Dev 5`).
2.  **Cek Status:** Periksa [docs/PROJECT_STATUS.md](file:///d:/Kuliah/StartupDigital/clitoria-digital-commerce/docs/PROJECT_STATUS.md) untuk memastikan tugas-tugas prasyarat sebelum tugas Anda sudah selesai dideploy.
3.  **Update Sprint:** Perbarui file [docs/CURRENT_SPRINT.md](file:///d:/Kuliah/StartupDigital/clitoria-digital-commerce/docs/CURRENT_SPRINT.md) secara manual dengan detail tugas aktif Anda.
4.  **Prompt AI:** Mulai chat dengan AI Agent menggunakan template di bawah.
5.  **Tinjau Rencana (Implementation Plan):** AI Agent akan membaca `docs/AI_EXECUTION_PROMPT.md`, memeriksa kesesuaian tugas aktif dengan `docs/TASK_EXECUTION_PLAN.md`, lalu membuat rencana implementasi (Implementation Plan). **Validasi rencana tersebut, lalu setujui (Proceed).**
6.  **Pembaruan Status & Changelog:** Setelah AI selesai membuat kode dan lolos verifikasi, perbarui dokumen secara manual:
    *   Tandai tugas telah selesai di [docs/PROJECT_STATUS.md](file:///d:/Kuliah/StartupDigital/clitoria-digital-commerce/docs/PROJECT_STATUS.md).
    *   Tulis riwayat perubahan di [docs/CHANGELOG.md](file:///d:/Kuliah/StartupDigital/clitoria-digital-commerce/docs/CHANGELOG.md).
7.  **Upload ke GitHub:** Jalankan alur kerja Git (lihat Bagian 2).
8.  **Ulangi (Repeat):** Lanjut ke tugas berikutnya yang ditugaskan kepada Anda.

### 📝 Template Prompt untuk AI Agent:
```text
Halo, saya ingin memulai tugas baru. Tolong rujuk panduan eksekusi di docs/AI_EXECUTION_PROMPT.md. 

Periksa docs/CURRENT_SPRINT.md untuk detail tugas aktif saat ini, dan validasi kesesuaiannya dengan urutan tugas di docs/TASK_EXECUTION_PLAN.md. Buatkan implementation plan terlebih dahulu untuk saya tinjau sebelum Anda menulis kode.
```

---

## 🌿 2. Git & GitHub Workflow (Kolaborasi Tim)

### Aturan Branch:
*   **`main`**: Kode stabil produksi (jangan lakukan commit langsung ke branch ini).
*   **`develop`**: Pusat integrasi semua fitur sebelum naik ke `main`.
*   **`task/ID_TUGAS-deskripsi`**: Branch temporer buatan developer dari `develop` untuk mengerjakan tugas aktif (contoh: `task/01.01.01-init-laravel`).

---

### 💻 Case A: Setup Awal Kontribusi (Baru Pertama Kali)
Lakukan langkah-langkah ini jika Anda baru pertama kali bergabung ke dalam proyek:

1.  **Clone Repositori:**
    ```bash
    git clone <repository-url>
    cd clitoria-digital-commerce
    ```
2.  **Instal Dependensi:**
    ```bash
    composer install
    npm install
    ```
3.  **Setup Environment Lokal:**
    Salin file environment dan konfigurasikan database lokal Anda di file `.env`:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4.  **Migrasi & Link Storage:**
    ```bash
    php artisan migrate
    php artisan storage:link
    ```
5.  **Jalankan Server Lokal:**
    ```bash
    php artisan serve
    # Pada terminal terpisah, jalankan Vite:
    npm run dev
    ```

---

### 🔨 Case B: Alur Kontribusi Fitur Baru (Harian)
Lakukan langkah-langkah ini setiap kali Anda ingin mulai mengerjakan tugas/fitur baru:

1.  **Kembali ke develop & tarik update terbaru dari GitHub:**
    ```bash
    git checkout develop
    git pull origin develop
    ```
2.  **Buat branch baru berdasarkan ID Tugas:**
    ```bash
    git checkout -b task/ID_TUGAS-deskripsi
    ```
3.  **Perbarui file Fokus Sprint:** Update file `docs/CURRENT_SPRINT.md` secara manual untuk menunjuk ke tugas baru Anda.
4.  **Mulai coding & jalankan pengujian lokal:**
    ```bash
    php artisan test
    ```
5.  **Perbarui Status Dokumentasi (DoD):** Setelah fitur lolos tes, perbarui `docs/PROJECT_STATUS.md` dan `docs/CHANGELOG.md` secara manual di branch Anda.
6.  **Simpan & Commit Perubahan:**
    ```bash
    git add .
    git commit -m "feat(scope): deskripsi tugas selesai"
    ```
7.  **Push branch ke GitHub:**
    ```bash
    git push origin task/ID_TUGAS-deskripsi
    ```
8.  **Buat Pull Request (PR):** Buka GitHub dan buat PR dari branch Anda ke branch **`develop`**. Setelah di-review dan di-merge, Anda dapat menghapus branch tersebut.

---

---

## 🎯 3. Definition of Done (DoD)

Tugas dianggap **SELESAI (DONE)** dan layak di-merge ke develop jika:
- [ ] Kode mematuhi standar arsitektur: `Controller -> Service -> Repository -> Model`.
- [ ] Migrasi database 100% cocok dengan `docs/SCHEMA.md`.
- [ ] UI responsif dan sesuai dengan panduan `docs/DESAIN.md`.
- [ ] Semua tes lokal (`php artisan test`) berhasil dilalui tanpa error.
- [ ] File status proyek (`CURRENT_SPRINT.md`, `PROJECT_STATUS.md`, `CHANGELOG.md`) telah diperbarui manual.
- [ ] Bersih dari kode mati, tag debug, atau komentar sisa (`dd()`, `console.log`).

---

## 🔗 4. Aturan Ketergantungan Tugas (Dependency Rule)

Ketika Anda ingin mengambil tugas baru, namun **tugas prasyarat sebelumnya belum selesai dikerjakan** oleh rekan tim Anda:

### 🚫 Ketergantungan Keras (Hard Dependency)
*   *Definisi:* Kode Anda 100% membutuhkan file/struktur dari tugas sebelumnya agar bisa berjalan (misal: butuh tabel database yang belum dibuat).
*   *Aturan:* **JANGAN mengambil tugas tersebut.** Koordinasikan dengan rekan tim Anda, bantu selesaikan tugas prasyaratnya, atau ambil tugas lain yang mandiri.

### ⚠️ Ketergantungan UI/Frontend (Bisa di-Mocking)
*   *Definisi:* Anda membuat UI (Frontend) tapi logika Backend (API/Service) belum selesai dibuat.
*   *Aturan:* **BOLEH dikerjakan dengan teknik Mocking.**
*   *Cara:* Gunakan data tiruan (*fake data/hardcoded array*) di Controller untuk merender UI Blade. Pastikan struktur data tiruan Anda mengacu pada `docs/SCHEMA.md`. Setelah Backend selesai, segera ganti data tiruan tersebut dengan data dinamis asli dari database.

