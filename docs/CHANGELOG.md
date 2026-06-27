# CHANGELOG.md — Histori Perubahan Detail (Change History)

Newest first.

---

<!-- Template untuk entri baru (salin template ini ke atas entri terakhir):

## TASK XX.XX.XX — Nama Tugas

Date: YYYY-MM-DD

### Added
- Item

### Changed
- Item

### Removed
- Item

### Verified
- Item

-->

## TASK 01.03.02 — Create Base Service Layer

Date: 2026-06-27

### Added
- Membuat file `app/Services/BaseService.php` sebagai _abstract class_ fondasi. Kelas ini dipersiapkan untuk menyediakan pola standar (seperti format pelaporan log atau balasan standar) guna menginkapsulasi _core logic_ milik model/domain di masa mendatang.

---

## TASK 01.03.01 — Create Domain Structure

Date: 2026-06-27

### Added
- Membuat folder arsitektur tingkat lanjut untuk *layered backend design* pada instalasi Laravel:
  - `app/Services`
  - `app/Repositories`
  - `app/Contracts`
- Memasukkan berkas proksi `.gitkeep` agar masing-masing folder terverifikasi oleh kontrol versi Git.

---

## TASK 01.02.03 — Configure Frontend Build Pipeline

Date: 2026-06-27

### Verified
- Proses optimasi aset (*minification*, *chunking*, *brotli/gzip pre-computation*) oleh Vite berjalan sukses via `npm run build`.
- Direktif `@vite` di *view* default Laravel berfungsi menautkan JavaScript (termasuk Alpine.js) dan CSS (beserta Tailwind v4) dengan benar.

---

## TASK 01.02.02 — Install AlpineJS

Date: 2026-06-27

### Added
- Instalasi dependensi NPM `alpinejs`.
- Inisialisasi _bootstrap_ objek global Alpine.js pada `resources/js/app.js`.

### Fixed
- Menghapus referensi `import './bootstrap';` dari `app.js` yang menyebabkan *build error* (karena modul *bootstrap* bawaan sudah dihilangkan pada skeleton Laravel 13 baru).

---

## TASK 01.02.01 — Install Tailwind CSS

Date: 2026-06-27

### Verified
- Instalasi bawaan (pre-configured) Tailwind CSS versi 4 yang dibawa oleh Laravel 13.
- Proses kompilasi Vite merender direktif Tailwind tanpa error.

---

## TASK 01.01.05 — Configure Vite

Date: 2026-06-27

### Added
- Alias `@` pada `vite.config.js` untuk direktori `resources/js`.

### Verified
- Dependensi Node.js diunduh dan dipasang secara penuh (`npm install`).
- `npm run build` sukses me-*render* _asset build_ di `public/build`.

---

## TASK 01.01.04 — Configure Storage

Date: 2026-06-27

### Changed
- Konfigurasi `FILESYSTEM_DISK` di `.env` diubah dari `local` menjadi `public`.

### Added
- *Symbolic link* (symlink) dibuat melalui perintah `php artisan storage:link`, yang menghubungkan direktori `public/storage` ke `storage/app/public`.

---

## TASK 01.01.03 — Configure Database

Date: 2026-06-27

### Added
- Database MySQL bernama `clitoria_digital_commerce`.
- Tabel bawaan Laravel (`users`, `jobs`, `cache`, `sessions`) dengan mengeksekusi `php artisan migrate`.

### Verified
- Koneksi ke database dari sistem berjalan dengan normal.

---

## TASK 01.01.02 — Configure Environment

Date: 2026-06-27

### Changed
- Konfigurasi nama aplikasi di `.env` menjadi `Clitoria Digital Commerce`.
- Konfigurasi base URL menjadi `http://localhost:8000`.
- Konfigurasi lokalisasi (`APP_LOCALE`, `APP_FALLBACK_LOCALE`, `APP_FAKER_LOCALE`) menjadi `id`.
- Konfigurasi koneksi database dari default SQLite ke MySQL dengan nama database `clitoria_digital_commerce`.

### Removed
- _Comment_ (tanda pagar) pada konfigurasi `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.

---

## TASK 01.01.01 — Initialize Laravel Project

Date: 2026-06-27

### Added
- Instalasi awal proyek Laravel (v13.17.0) di *root directory*.
- Struktur folder dasar Laravel (`app`, `config`, `routes`, `public`, dsb).
- Berkas konfigurasi bawaan Laravel (`composer.json`, `package.json`, `.env`).

### Verified
- Komponen dasar terinstal dengan `composer create-project`.
- Perintah `php artisan --version` berjalan tanpa masalah.

---

*(Belum ada riwayat perubahan lainnya).*