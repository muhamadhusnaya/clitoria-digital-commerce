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