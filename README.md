# Sistem Manajemen Jurusan

Sistem Manajemen Jurusan adalah sebuah aplikasi berbasis web yang dibangun menggunakan framework **Laravel**. Aplikasi ini memungkinkan Anda untuk mengelola data nama jurusan, nama dekan, dan jumlah siswa pada setiap jurusan.

## Fitur

- Tambah, edit, dan hapus data jurusan
- Tambah, edit, dan hapus data dekan
- Atur jumlah siswa pada setiap jurusan
- Tampilan responsif yang memudahkan penggunaan di berbagai perangkat

## Persyaratan Sistem

- **PHP 8.0** atau versi yang lebih tinggi
- **Composer**
- **Laravel 8** atau versi yang lebih tinggi
- Database **MySQL** atau DBMS lain yang didukung oleh Laravel

## Instalasi

1. Clone repositori ini ke dalam direktori lokal Anda:

git clone <repository-url>


2. Masuk ke direktori aplikasi:

cd sistem-manajemen-jurusan


3. Install semua dependensi menggunakan Composer:

composer install


4. Salin file `.env.example` dan ubah namanya menjadi `.env`. Sesuaikan konfigurasi database dengan pengaturan lokal Anda.

5. Generate kunci aplikasi Laravel:


4. Salin file `.env.example` dan ubah namanya menjadi `.env`. Sesuaikan konfigurasi database dengan pengaturan lokal Anda.

5. Generate kunci aplikasi Laravel:

php artisan key:generate


6. Jalankan migrasi untuk membuat tabel-tabel yang diperlukan:

php artisan migrate


7. Jalankan server pengembangan Laravel:

php artisan serve


8. Buka aplikasi di browser Anda dengan mengunjungi `http://localhost:8000`.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

1. **Fork** repositori ini.
2. Buat branch fitur baru: `git checkout -b fitur-baru`.
3. Lakukan perubahan yang diperlukan dan commit: `git commit -m "Menambahkan fitur baru"`.
4. **Push** ke branch di repositori Anda: `git push origin fitur-baru`.
5. Ajukan **pull request** untuk review.

## Lisensi

Sistem Manajemen Jurusan dilisensikan di bawah **Lisensi MIT**. Silakan merujuk ke file `LICENSE` untuk informasi lebih lanjut.

---

Pastikan untuk mengganti `<repository-url>` dengan URL repository asli aplikasi Anda. Selain itu, Anda dapat menyesuaikan instruksi instalasi dengan lingkungan dan preferensi pengembangan Anda.

Selamat mengembangkan aplikasi **Sistem Manajemen Jurusan** dengan Laravel!
