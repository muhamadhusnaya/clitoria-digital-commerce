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

## TASK 04.04.04 — Testimonial Service

Date: 2026-06-29

### Added
- Membuat `TestimonialService` di `app/Services` yang mewarisi `BaseService`.
- Menginjeksi antarmuka `TestimonialRepositoryInterface` ke dalam `TestimonialService` sebagai perantara basis data.
- Menambahkan metode `setFeatured(int $id)` untuk mengatur suatu testimoni sebagai yang disorot, beserta penambahan fitur pembantu `removeFeaturedAll()` di tingkat *Repository*.

## TASK 04.04.03 — Testimonial Repository

Date: 2026-06-29

### Added
- Membuat antarmuka `TestimonialRepositoryInterface` di `app/Repositories/Contracts`.
- Membuat kelas `TestimonialRepository` di `app/Repositories/Eloquent` yang mengimplementasikan *interface* tersebut beserta pewarisan dari *BaseRepository*.
- Menambahkan *binding* dependensi di `AppServiceProvider` untuk memetakan kombinasi *Interface-Class* tersebut.

## TASK 04.04.02 — Testimonial Model

Date: 2026-06-28

### Added
- Model `Testimonial` di lapis aplikasi `app/Models`.
- Pengaturan keamanan *mass-assignment* `$fillable` untuk membatasi masukan atribut tabel secara masal.
- Proteksi `SoftDeletes` untuk menyokong operasi penghapusan tanpa menghilangkan data dari pangkalan data.

## TASK 04.04.01 — Testimonial Migration

Date: 2026-06-28

### Added
- Berkas migrasi `create_testimonials_table` yang mendefinisikan skema tabel penyimpan testimoni.
- Kolom esensial seperti nama, jabatan, perusahaan, konten testimoni, gambar, status publikasi, dan fitur _soft delete_.

## TASK 04.03.06 — Gallery Image Upload

Date: 2026-06-28

### Changed
- Meng-*override* metode `create`, `update`, dan `delete` pada `GalleryService` dengan integrasi `UploadTrait`.
- Menambahkan prosedur penghapusan *file* usang setiap kali terjadi pergantian gambar atau penghapusan data.

## TASK 04.03.04 — Gallery Service

Date: 2026-06-28

### Added
- Pembuatan kelas `GalleryService` di lapis aplikasi `app/Services`.
- Menjadikan `GalleryService` turunan dari `BaseService`.
- Penyuntikan `GalleryRepositoryInterface` ke dalam `GalleryService` guna kelancaran mekanisme CRUD.

## TASK 04.03.03 — Gallery Repository

Date: 2026-06-28

### Added
- Pembuatan antarmuka `GalleryRepositoryInterface`.
- Kelas `GalleryRepository` untuk meng-handle eksekusi _query_ berbasis Eloquent.
- Binding dependensi di dalam `AppServiceProvider` guna merekatkan *Repository Pattern*.

## TASK 04.03.02 — Gallery Model

Date: 2026-06-28

### Added
- Membuat `Gallery` model di `app/Models`.
- Mengimplementasikan `SoftDeletes` dan `$fillable` fields untuk entitas Gallery.

## TASK 04.03.01 — Gallery Migration

Date: 2026-06-28

### Added
- Berkas migrasi `create_galleries_table` untuk pembentukan tabel *galleries*.
- Konfigurasi struktur kolom `image`, `title`, `description`, `status` dengan indeks dan fitur `softDeletes`.

## TASK 04.02.06 — Benefit Ordering

Date: 2026-06-28

### Added
- Migrasi baru `add_order_number_to_benefits_table` untuk penambahan atribut urutan.
- `updateOrder` fungsionalitas di `BenefitService` untuk reposisi hierarki.
- Atribut `order_number` ke dalam list `$fillable` Model `Benefit`.

## TASK 04.02.04 — Benefit Service

Date: 2026-06-28

### Added
- Membuat `BenefitService` di `app/Services`.
- Menghubungkan *Repository* `BenefitRepositoryInterface` ke dalam ekosistem servis.
- Menurunkan karakteristik fungsional (CRUD) dari `BaseService`.

## TASK 04.02.03 — Benefit Repository

Date: 2026-06-28

### Added
- Membuat `BenefitRepositoryInterface` di `app/Repositories/Contracts`.
- Mengimplementasikan `BenefitRepository` dengan metode *Dependency Injection* ke modul `Benefit`.
- Mengonfigurasi `RepositoryServiceProvider` dengan *binding* interface-ke-implementasi (membuat ulang class Provider karena migrasi branch/lingkungan lokal).

## TASK 04.02.02 — Benefit Model

Date: 2026-06-28

### Added
- Membuat file *Model* `Benefit.php`.
- Menentukan tipe perlindungan *mass-assignment* pada properti `$fillable` (`title`, `icon`, `status`) bersama penambahan pustaka/factory yang dibutuhkan.

## TASK 04.02.01 — Benefit Migration

Date: 2026-06-28

### Added
- Membuat file *migration* untuk inisialisasi tabel `benefits` (`2026_06_28_070838_create_benefits_table.php`).
- Mendefinisikan kolom spesifik (`title`, `icon`, `status`) yang mematuhi rujukan skema *database*.

## TASK 04.01.06 — Hero Image Upload

Date: 2026-06-28

### Added
- Membuat *trait* reusabel `UploadTrait` untuk membantu pemrosesan simpan/hapus file.
- Mengintegrasikan fungsi unggah dan hapus otomatis (pembersihan gambar usang/yatim) di `HeroService`.

## TASK 04.01.04 — Hero Service

Date: 2026-06-28

### Added
- Membuat `HeroService` yang mewarisi `BaseService`.
- Mengimplementasikan logika operasional awal (CRUD) dengan menginjeksi antarmuka repositori pahlawan (Hero).

## TASK 04.01.03 — Hero Repository

Date: 2026-06-28

### Added
- Membuat `HeroRepositoryInterface` yang mengekstensi kontrak *BaseRepository*.
- Membuat kelas `HeroRepository` yang mengimplementasikan manajemen data `Hero`.
- Membuat dan mengonfigurasi `RepositoryServiceProvider` (dan mendaftarkannya di struktur Laravel 11) untuk menangani injeksi dependensi.

## TASK 04.01.02 — Hero Model

Date: 2026-06-28

### Added
- Membuat model Eloquent `Hero` (`app/Models/Hero.php`) dan mendeklarasikan atribut `$fillable` secara definitif sesuai skema yang telah dirancang.
- Mengonfirmasi validitas sintaks *class* `Hero` melalui uji CLI `php -l`.

## TASK 04.01.01 — Hero Migration

Date: 2026-06-28

### Added
- Membuat *file migration* untuk tabel `heroes` dengan struktur yang mendefinisikan *primary key*, `title`, `subtitle`, `image`, `button_text`, `button_link`, dan `timestamps`.

## TASK 03.01.05 — Profile Management (Backend)

Date: 2026-06-28

### Verified
- Memastikan logika pembaruan nama profil, email, *password*, dan penghapusan akun beroperasi dengan lancar melalui `ProfileTest`. Seluruh _logic_ bawaan Laravel Breeze berfungsi sempurna setelah _refactor namespace_ yang dilakukan pada TASK 03.01.01. EPIC 03 selesai.

## TASK 03.01.04 — Configure Email Verification (Backend)

Date: 2026-06-28

### Added
- Mengimplementasikan *interface* `MustVerifyEmail` pada `User` model.
- Mengonfigurasi `VerifyEmail::createUrlUsing()` di `App\Providers\AppServiceProvider` agar URL verifikasi yang dikirimkan melalui email meresolve _temporary signed route_ `admin.verification.verify`.

### Verified
- Lulus ujian `EmailVerificationTest`.

## TASK 03.01.03 — Configure Forgot Password (Backend)

Date: 2026-06-28

### Added
- Mengimplementasikan `ResetPassword::createUrlUsing()` di `App\Providers\AppServiceProvider` untuk memodifikasi tautan reset password bawaan Laravel agar me-resolve URL kustom yang berada di bawah direktori `/admin`.

### Verified
- `PasswordResetTest` di suite pengujian `Tests\Feature\Auth` berjalan sukses. Tautan di email sudah menggunakan format route `admin.password.reset`.

## TASK 03.01.01 — Install & Configure Laravel Breeze (Backend)

Date: 2026-06-28

### Added
- Paket otentikasi `laravel/breeze` telah diinstal dengan pilihan Blade scaffold.

### Changed
- Konfigurasi file otentikasi (`routes/auth.php`) telah direlokasi agar berada di dalam *Route Group* `/admin` (`Route::prefix('admin')` dan `Route::name('admin.')`).
- Memodifikasi seluruh *controller* autentikasi (`AuthenticatedSessionController`, `RegisteredUserController`, `PasswordController`, `VerifyEmailController`, dll.) serta seluruh _view file_ bawaan Breeze agar menggunakan skema nama `admin.` untuk me-*resolve* URI (`route('admin.login')`, `route('admin.dashboard')`).

### Verified
- Kompilasi ulang aset (`npm run build`) berjalan sukses tanpa merusak _rendering_ _view_ bawaan Breeze (menggunakan UI _default_ bawaan karena tugas *Customize Login UI* dilewati).
- Unit *test* bawaan Laravel (khusus grup autentikasi dan profil, seperti `AuthenticationTest`, `PasswordResetTest`, dll) lulus seluruh uji skenario *HTTP Request* yang diarahkan ke struktur `/admin/*`.

## TASK 01.03.05 — Configure Shared Helpers

Date: 2026-06-28

### Added
- Membuat file *helper global* di `app/Helpers/helpers.php` (dengan dukungan contoh fungsi `format_rupiah($angka)`).
- Meregistrasikan `app/Helpers/helpers.php` secara permanen ke properti `"files"` di _autoloader_ `composer.json` sehingga dapat diakses praktis di seantero aplikasi.

---

## TASK 01.03.04 — Configure Route Structure

Date: 2026-06-28

### Added
- Mengimplementasikan pengelompokan (_grouping_) rute di `routes/web.php`. Rute telah dipisahkan ke dalam seksi *Public Routes* (menggunakan _prefix name_ `public.`) dan *Admin Routes* (menggunakan _prefix path_ `admin` dan _prefix name_ `admin.`).

---

## TASK 01.03.03 — Create Base Repository Layer

Date: 2026-06-28

### Added
- Membuat `app/Contracts/BaseRepositoryInterface.php` untuk mewajibkan standarisasi fungsi.
- Membuat `app/Repositories/BaseRepository.php` sebagai implementasi dari interface di atas, yang berisi *method* dasar interaksi database menggunakan turunan kelas `Model` dari Eloquent.

---

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