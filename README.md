# laravel2020-D-G6
laravel2020 class D Group 6. Data Dosen.

Reza, Nadia, Heni, Anggit.

# Alat Tempur :
- PHP 7.x
- Composer
- MySQL / Postgre SQL / dan jenis database lainnya.
- Laravel version 6.x
- Laravel Datatable by Yajra

#Instalasi
- Langkah instalasi ini dengan asumsi bahwa Anda sudah menginstal PHP, Komposer, dan Aplikasi Manajemen Database (DMBS) pada mesin lokal Anda. Gunakan terminal / CMD Anda dan ikuti langkah-langkah di bawah ini.
- Clone repositori ini
- git clone https://github.com/mirza-alim-m/laravel2020-D-G6
- Install Laravel
- composer update
- Buat skema database di Aplikasi Manajemen Database yang Anda inginkan (XAMPP / POSTGRES / dll.) Dan edit file .env.example atau ubah nama menjadi .env 
- Dalam praktek ini kami akan menggunakan database mysql (Xampp). Jika file .env atau .env.example hilang setelah komposer diinstal, maka cukup salin dari .env ini dan sesuaikan kode dengan case Anda

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=data_dosen

DB_USERNAME=root

DB_PASSWORD=

- Generate Key
- php artisan key:generate
- Migrate all tables
- php artisan migrate
- atau bisa menggunakan yang dibawah ini
- php artisan migrate:fresh
- Data menggunakan Tinker

php artisan tinker

factory(App\Dosens::class, 100)->create();

factory(App\Jam_Kuliah::class, 100)->create();

factory(App\Mk::class, 100)->create();

factory(App\Ruang::class, 100)->create();

exit();

Selanjutnya kita akan membuat API pada project ini dengan cara :
php artisan passport:install

pastikan XAMPP sudah diaktifkan

php artisan serve

Penggunaan API
jika ingin menggunakan API ini, login dengan menggunakan username dan password.

[POST] http://yourhostname/api/login
        parameter: [username ~ registered_email, password] (all required)


gunakan token (Bearer) kemudian akses url berikut.

Dosen
[GET] http://{yourhostname}/api/dosen
[GET] http://{yourhostname}/api/dosen/siapa/{dosens}
[POST] http://{yourhostname}/api/dosen/tambah 
        parameter: [dosen_nama, dosen_nip (numeric), mata_kuliah_id (numeric), dosen_no_telpon(numeric), dosen_alamat (numeric)] (all required)
[POST] http://{yourhostname}/api/dosen/ubah/{dosens} (untuk edit data dosen)
        parameter: [dosen_nama, dosen_nip (numeric), mata_kuliah_id (numeric), dosen_no_telpon(numeric), dosen_alamat (numeric), _method=put]
[DELETE] http://{yourhostname}/api/dosen/hapus/{dosens}

MK
[GET] http://{yourhostname}/api/Mk
[GET] http://{yourhostname}/api/Mk/apa/{mk}
[POST] http://{yourhostname}/api/Mk/tambah
        parameter: [id (numeric), mata_kuliah] (all required)
[POST] http://{yourhostname}/api/Mk/ubah/{mk} (untuk edit data mk)
        parameter: [id (numeric), mata_kuliah, _method=put]
[DELETE] http://{yourhostname}/api/Mk/hapus/{mk}

Ruang
[GET] http://{yourhostname}/api/Ruang
[GET] http://{yourhostname}/api/Ruang/apa/{ruang}
[POST] http://{yourhostname}/api/Ruang/tambah
        parameter: [kelas, gedung] (all required)
[POST] http://{yourhostname}/api/Ruang/ubah{ruang} (untuk edit data ruang)
        parameter: [kelas, gedung, _method=put]
[DELETE] http://{yourhostname}/api/Ruang/hapus/{ruang}

Jam Kuliah
[GET] http://{yourhostname}/api/Jam_Kuliah
[GET] http://{yourhostname}/api/Jam_Kuliah/kapan{jam_kuliah}
[POST] http://{yourhostname}/api/Jam_Kuliah/tambah
        parameter: [dosen_id (numeric), ruang_id (numeric), hari, jam] (all required)
[POST] http://{yourhostname}/api/Jam_Kuliah/ubah{jam_kuliah} (untuk edit data jam kuliah)
        parameter: [dosen_id (numeric), ruang_id (numeric), hari, jam, _method=put]
[DELETE] http://{yourhostname}/api/Jam_Kuliah/hapus{jam_kuliah}
# DEMO
http://laravel-d6.tegalian.com/
