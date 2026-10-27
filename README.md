# Website E-Voting

Website E-Voting adalah aplikasi pemilihan elektronik berbasis web. Aplikasi ini dipakai untuk pemilihan ketua organisasi, himpunan, dan sejenisnya. Admin mengelola kandidat, data pemilih, dan jadwal hitung mundur. Pemilih masuk dengan akunnya, memberikan suara ke satu kandidat, lalu melihat hasil perolehan suara.

## Fitur

- Login pengguna dengan peran admin dan pemilih
- Dashboard admin
- Kelola data kandidat beserta visi dan misi
- Kelola data pemilih
- Kelola akun admin
- Halaman pemilihan untuk memberikan suara
- Lihat berkas resume kandidat dalam format PDF
- Halaman hasil perolehan suara
- Pengaturan waktu hitung mundur pemilihan oleh admin
- Satu akun pemilih hanya dapat memberikan satu suara

## Teknologi

- PHP 8.1
- Laravel 10
- MySQL
- Blade dan Vite
- Laravel Sanctum

## Cara Instalasi

Prasyarat:

- PHP 8.1 atau lebih baru
- Composer
- MySQL
- Node.js dan npm

Langkah instalasi:

1. Clone repositori ini.
2. Masuk ke folder proyek lalu jalankan `composer install`.
3. Jalankan `npm install`.
4. Salin file `.env.example` menjadi `.env`, lalu sesuaikan isinya. Bagian penting adalah `APP_KEY` dan koneksi database `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.
5. Jalankan `php artisan key:generate`.
6. Jalankan `php artisan migrate --seed` untuk membuat tabel dan data awal pengguna.

## Cara Menjalankan

Jalankan dua perintah berikut di terminal terpisah:

```bash
php artisan serve
npm run dev
```

Aplikasi dapat dibuka di `http://127.0.0.1:8000`. Halaman pertama yang tampil adalah halaman login.

Untuk build aset produksi, jalankan `npm run build`.

## Lisensi

Proyek ini memakai lisensi MIT. Lihat berkas [LICENSE](LICENSE).
