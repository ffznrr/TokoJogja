# Panduan Menjalankan Aplikasi PHP Native Toko Jogja

Aplikasi **Toko Jogja** dibangun menggunakan PHP Native dan membutuhkan server lokal (seperti XAMPP atau WAMP) agar dapat dijalankan.

## Persiapan Sebelum Menjalankan

1. **Pastikan XAMPP atau WAMP Terinstal**  
   Aplikasi ini membutuhkan XAMPP atau WAMP sebagai server lokal. Jika belum terinstal, silakan unduh dan instal salah satu dari berikut ini:
   - [Unduh XAMPP](https://www.apachefriends.org/index.html)
   - [Unduh WAMP](http://www.wampserver.com/en/)

2. **Aktifkan Apache dan MySQL Server di XAMPP/WAMP**  
   Setelah menginstal XAMPP atau WAMP, buka aplikasi tersebut dan aktifkan layanan **Apache** serta **MySQL**. Hal ini diperlukan agar PHP dapat berjalan di server lokal dan dapat mengakses database.

## Langkah-Langkah Menjalankan Aplikasi

### 1. Salin Folder Aplikasi ke `htdocs`

   Pindahkan atau salin folder aplikasi **Toko Jogja** ke dalam folder `htdocs` di direktori XAMPP (biasanya `C:\xampp\htdocs\` untuk Windows) atau WAMP (biasanya `C:\wamp\www\` untuk Windows).

### 2. Masuk ke Folder `htdocs`

   Buka terminal atau command prompt, lalu navigasikan ke dalam folder `htdocs` tempat aplikasi ini disalin. Contoh perintah di Windows:

   ```bash
   cd C:\xampp\htdocs\nama_folder_aplikasi
   ```

### 3. Konfigurasi Database

Untuk menjalankan aplikasi ini, Anda perlu membuat database dan mengimpor struktur serta data yang diperlukan.

#### Langkah-langkah Membuat Database di phpMyAdmin

1. Buka browser dan akses [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Klik **Database** pada menu di atas.
3. Buat database baru dengan nama **toko_jogja** atau nama lain sesuai preferensi Anda.
4. Klik **Create** untuk membuat database.

#### Impor Struktur dan Data Database

1. Setelah database dibuat, pilih database yang baru saja Anda buat dari daftar di sebelah kiri.
2. Klik **Import** pada menu di atas.
3. Klik **Choose File**, lalu pilih file `toko_jogja.sql` yang berada di dalam folder aplikasi.
4. Klik **Go** untuk mulai mengimpor struktur dan data ke dalam database.

### 4. Sesuaikan Koneksi Database di Aplikasi

Pastikan file `koneksi.php` (atau file konfigurasi database lain di aplikasi ini) memiliki pengaturan koneksi yang sesuai dengan database yang Anda buat:

```php
<?php
$host = "localhost";
$user = "root"; // Sesuaikan jika berbeda
$pass = "";     // Sesuaikan jika ada password untuk MySQL
$dbname = "toko_jogja"; // Nama database yang Anda buat

$koneksi = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>
```

Catatan: Jika nama database, username, atau password berbeda, ubah sesuai dengan konfigurasi server lokal Anda.

### 5. Akses Aplikasi melalui Browser

Setelah semua langkah di atas selesai, buka browser dan akses aplikasi dengan URL berikut:
```php
http://localhost/nama_folder_aplikasi
```

Gantilah nama_folder_aplikasi dengan nama folder tempat aplikasi Toko Jogja disalin.

Troubleshooting
Error Koneksi Database: Jika terdapat error yang berkaitan dengan koneksi database, pastikan nama database, username, dan password di file koneksi.php sudah benar.
File Tidak Ditemukan: Jika halaman tidak dapat diakses, pastikan folder aplikasi ada di dalam htdocs dan URL yang Anda masukkan di browser sudah benar.
