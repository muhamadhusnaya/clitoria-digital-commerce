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

## TASK 07.01.05 — Business Settings CRUD UI

Date: 2026-07-03

### Added
- Pembuatan antarmuka pengguna `admin.settings.index` untuk mengelola konfigurasi profil bisnis perusahaan (Nomor WhatsApp, Email, Instagram, Alamat Fisik, dan tautan semat Google Maps).
- Integrasi helper `get_setting()` pada kolom *input* untuk melakukan inisialisasi (*auto-fill*) data saat form dibuka.
- Inisiasi `SettingController` dengan fungsi *index* dan *update*, menggunakan lapisan perantara (Request dan Service) untuk validasi dan manajemen pembaruan basis data terpusat.
- Penambahan rute konfigurasi `admin.settings.index` dan `admin.settings.update` ke kelompok otentikasi admin pada berkas `routes/web.php`.

## TASK 07.01.04 — Business Settings Backend

Date: 2026-06-29

### Added
- Membuat `SettingSeeder` untuk *seeding* kunci pengaturan (`whatsapp_number`, `business_email`, `instagram_url`, `address`, `google_maps_embed`).
- Menambahkan Helper Global `get_setting()` di `app/Helpers/helpers.php` untuk mengambil data pengaturan.
- Membuat `UpdateBusinessSettingRequest` untuk memvalidasi *form input* secara spesifik sesuai jenis datanya.

## TASK 07.01.03 — Settings Service

Date: 2026-06-29

### Added
- Membuat `SettingService` di `app/Services` yang mewarisi `BaseService`.
- Mengimplementasikan metode `updateMany(array $settings)` di `SettingService` untuk pembaruan massal *key-value pair*.
- Menambahkan metode `updateByKey()` ke `SettingRepository` untuk memfasilitasi pencarian dan pembaruan berbasis kunci.

## TASK 07.01.02 — Settings Repository

Date: 2026-06-29

### Added
- Membuat model Eloquent `Setting` dengan konfigurasi `$fillable` (key, value).
- Membuat antarmuka `SettingRepositoryInterface` dan kelas implementasinya `SettingRepository`.
- Meregistrasikan implementasi *Dependency Injection* untuk `SettingRepositoryInterface` di `AppServiceProvider`.

## TASK 07.01.01 — Settings Migration

Date: 2026-06-29

### Added
- Membuat file migrasi untuk tabel `settings`.
- Mengonfigurasi skema kolom `key` (unik) dan `value` untuk *key-value pair* data dinamis.
- Menjalankan migrasi secara sukses pada basis data.

## TASK 04.06.06 — Partner Image Upload
Date: 2026-07-04
### Changed
- Mengintegrasikan fungsi unggah logo menggunakan `UploadTrait` secara konsisten pada `PartnerService`.

## TASK 04.06.05 — Partner CRUD UI
Date: 2026-07-04
### Added
- Membuat _placeholder_ kosong untuk berkas-berkas *view blade* `admin.partners.index`, `create`, `edit`.
### Changed
- Menyeragamkan panggilan nama *method wrapper* di `PartnerController`.

## TASK 04.06.04 — Partner Service
Date: 2026-07-04
### Changed
- Merefaktor *Service Layer* `PartnerService` agar mengikuti standar Repositori Pattern tanpa *invalid parent constructor call*.

## TASK 04.06.03 — Partner Repository
Date: 2026-07-04
### Added
- Mengkonsolidasi *Service Provider binding* dari `AppServiceProvider` ke `RepositoryServiceProvider` untuk `PartnerRepositoryInterface`.

## TASK 04.06.02 — Partner Model
Date: 2026-07-04
### Added
- Setup `Partner` model.

## TASK 04.06.01 — Partner Migration
Date: 2026-07-04
### Added
- Setup `partners` migration.

## TASK 04.05.06 — Team Image Upload
Date: 2026-07-04
### Changed
- Mengintegrasikan fungsi unggah foto menggunakan `UploadTrait` secara konsisten pada `TeamService`.

## TASK 04.05.05 — Team CRUD UI
Date: 2026-07-04
### Added
- Membuat _placeholder_ kosong untuk berkas-berkas *view blade* `admin.teams.index`, `create`, `edit`.
### Changed
- Menyeragamkan panggilan nama *method wrapper* di `TeamController`.

## TASK 04.05.04 — Team Service
Date: 2026-07-04
### Changed
- Merefaktor *Service Layer* `TeamService` agar mengikuti standar Repositori Pattern.

## TASK 04.05.03 — Team Repository
Date: 2026-07-04
### Added
- Mengkonsolidasi *Service Provider binding* dari `AppServiceProvider` ke `RepositoryServiceProvider` untuk `TeamRepositoryInterface`.

## TASK 04.05.02 — Team Model
Date: 2026-07-04
### Added
- Setup `Team` model.

## TASK 04.05.01 — Team Migration
Date: 2026-07-04
### Added
- Setup `teams` migration.

## TASK 04.04.06 — Testimonial Image Upload
Date: 2026-07-04
### Changed
- Mengintegrasikan fungsi unggah avatar menggunakan `UploadTrait` secara konsisten pada `TestimonialService`.

## TASK 04.04.05 — Testimonial CRUD UI
Date: 2026-07-04
### Added
- Membuat _placeholder_ kosong untuk berkas-berkas *view blade* `admin.testimonials.index`, `create`, `edit`.
### Changed
- Menyeragamkan panggilan nama *method wrapper* di `TestimonialController`.

## TASK 04.04.04 — Testimonial Service
Date: 2026-07-04
### Added
- Membuat `TestimonialService` yang sebelumnya tidak ada.

## TASK 04.04.03 — Testimonial Repository
Date: 2026-07-04
### Added
- Membuat kelas `TestimonialRepository` dan antarmuka `TestimonialRepositoryInterface`.
- Menambahkan binding ke `RepositoryServiceProvider`.

## TASK 04.04.02 — Testimonial Model
Date: 2026-07-04
### Added
- Setup `Testimonial` model.

## TASK 04.04.01 — Testimonial Migration
Date: 2026-07-04
### Added
- Setup `testimonials` migration.
### Changed
- Menambahkan kolom `is_featured` pada *migration* `testimonials`.

## TASK 04.03.06 — Gallery Image Upload
Date: 2026-07-04
### Changed
- Mengintegrasikan fungsi unggah gambar menggunakan `UploadTrait` secara konsisten pada `GalleryService`.

## TASK 04.03.05 — Gallery CRUD UI
Date: 2026-07-04
### Added
- Membuat _placeholder_ kosong untuk berkas-berkas *view blade* `admin.galleries.index`, `create`, `edit`.
### Changed
- Menyeragamkan panggilan nama *method wrapper* di `GalleryController`.

## TASK 04.03.04 — Gallery Service
Date: 2026-07-04
### Changed
- Merefaktor *Service Layer* `GalleryService` agar mengikuti standar Repositori Pattern (wrapper CRUD yang memanggil *repository* tanpa *invalid parent constructor call*).

## TASK 04.03.03 — Gallery Repository
Date: 2026-07-04
### Added
- Mengkonsolidasi *Service Provider binding* dari `AppServiceProvider` ke `RepositoryServiceProvider` untuk `GalleryRepositoryInterface`.

## TASK 04.03.02 — Gallery Model
Date: 2026-07-04
### Added
- Setup `Gallery` model.

## TASK 04.03.01 — Gallery Migration
Date: 2026-07-04
### Added
- Setup `galleries` migration.

## TASK 04.02.05 — Benefit CRUD UI
Date: 2026-07-04
### Added
- Membuat _placeholder_ kosong untuk berkas-berkas *view blade* `admin.benefits.index`, `create`, `edit`.
### Changed
- Menyeragamkan panggilan nama *method wrapper* di `BenefitController`.

## TASK 04.02.04 — Benefit Service
Date: 2026-07-04
### Changed
- Merefaktor *Service Layer* `BenefitService` agar mengikuti standar Repositori Pattern.

## TASK 04.02.03 — Benefit Repository
Date: 2026-07-04
### Added
- Mengkonsolidasi *Service Provider binding* ke `RepositoryServiceProvider` untuk `BenefitRepositoryInterface`.

## TASK 04.02.02 — Benefit Model
Date: 2026-07-04
### Added
- Setup `Benefit` model.

## TASK 04.02.01 — Benefit Migration
Date: 2026-07-04
### Added
- Setup `benefits` migration.

## TASK 04.06.04 — Partner Service

Date: 2026-06-29

### Added
- Membuat `PartnerService` di `app/Services` yang mewarisi `BaseService`.
- Menginjeksi antarmuka `PartnerRepositoryInterface` ke dalam `PartnerService` sebagai perantara basis data.

## TASK 04.06.03 — Partner Repository

Date: 2026-06-29

### Added
- Membuat `PartnerRepositoryInterface` di `app/Repositories/Contracts`.
- Membuat `PartnerRepository` yang mengimplementasikan antarmuka di atas serta mewarisi CRUD bawaan `BaseRepository`.
- Meregistrasikan pola *Dependency Injection* untuk Partner Repository ke dalam `AppServiceProvider`.

## TASK 04.06.02 — Partner Model

Date: 2026-06-29

### Added
- Membuat model Eloquent `Partner` (`app/Models/Partner.php`).
- Mendaftarkan atribut `name`, `logo`, `website` ke dalam properti keamanan `$fillable`.
- Menerapkan *trait* `SoftDeletes` untuk mendukung *soft deletes* dari database.

## TASK 04.06.01 — Partner Migration

Date: 2026-06-29

### Added
- Membuat file migrasi untuk tabel `partners` dengan kolom `name`, `logo`, `website`, dan fitur `softDeletes`.
- Menjalankan migrasi database sukses.

## TASK 04.05.04 — Team Service

Date: 2026-06-29

### Added
- Penyediaan `TeamService` sebagai pelayan logika bisnis tim yang bernaung pada `BaseService`.
- Penyuntikan dependensi `TeamRepositoryInterface` via konstruktor.
- Penimpaan logika _store_, _update_, dan _delete_ untuk merealisasikan mekanisme kelola dan pembersihan fail fisik (foto anggota tim) dengan mengadopsi _facade Storage_ secara dinamis.

## TASK 04.05.03 — Team Repository

Date: 2026-06-29

### Added
- Pembuatan antarmuka `TeamRepositoryInterface` yang menuruni standar `BaseRepositoryInterface`.
- Implementasi fungsional via kelas `TeamRepository` diiringi integrasi abstraksi model `Team`.
- Registrasi pola _Service-Repository_ pada penampung modul kerangka kerja di `AppServiceProvider`.

## TASK 04.05.02 — Team Model

Date: 2026-06-29

### Added
- Pembuatan kelas model `Team` sebagai entitas Eloquent di `app/Models`.
- Atribut pengamanan *mass-assignment* untuk properti `name`, `position`, `photo`, `instagram`, dan `linkedin`.
- Trait `SoftDeletes` untuk mengamankan data yang dihapus tanpa merusaknya secara absolut.

## TASK 04.05.01 — Team Migration

Date: 2026-06-29

### Added
- Pembuatan tabel migrasi baru untuk entitas `teams` guna menyimpan data anggota tim organisasi.
- Pendaftaran atribut *name*, *position*, *photo*, beserta tautan media sosial (*instagram*, *linkedin*).
- Implementasi dukungan `softDeletes` untuk proteksi penghapusan data.

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
>>>>>>> origin/feature/07.01-business-settings

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