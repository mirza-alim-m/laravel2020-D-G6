# laravel2020-D-G6
laravel2020 class D Group 6. Data Dosen.

Reza, Nadia, Heni, Anggit.

# Alat Tempur
- PHP 7.x
- Composer
- MySQL / Postgre SQL / dan jenis database lainnya.
- Laravel version 6.x
- Laravel Datatable by Yajra

# Instalasi
- Langkah instalasi ini dengan asumsi bahwa Anda sudah menginstal PHP, Komposer, dan Aplikasi Manajemen Database (DMBS) pada mesin lokal Anda. Gunakan terminal / CMD Anda dan ikuti langkah-langkah di bawah ini.
- Clone repositori ini: git clone https://github.com/mirza-alim-m/laravel2020-D-G6
- Install Laravel: composer install
- Buat skema database di Aplikasi Manajemen Database yang Anda inginkan (XAMPP / POSTGRES / dll.) Dan edit file .env.example atau ubah nama menjadi .env 
- Dalam praktek ini kami akan menggunakan database mysql (Xampp). Jika file .env atau .env.example hilang setelah komposer diinstal, maka cukup salin dari .env ini dan sesuaikan kode dengan case Anda

...

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=data_dosen

DB_USERNAME=root

DB_PASSWORD=

...

- Generate Key: php artisan key:generate
- Migrate all tables: php artisan migrate
- atau bisa menggunakan ini: hp artisan migrate:fresh
- Jika Anda ingin mengunggah data, Anda dapat memeriksa ke database / seeder / direktori untuk memeriksa nama kelas Seeder yang ingin Anda jalankan (pastikan Anda memeriksa setiap file sebelum menjalankan perintah di bawah)

php artisan db:seed --class=[SeederClassName]

php artisan db:seed --class=DatabaseSeeder

php artisan db:seed --class=DosensSeeder

>>> exit();

php artisan serve
