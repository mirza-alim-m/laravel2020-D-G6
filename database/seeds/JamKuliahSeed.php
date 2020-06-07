<?php

use Illuminate\Database\Seeder;

class JamKuliahSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:59:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 2;
        $jam->ruang_id = 2;
        $jam->hari = "Selasa";
        $time = new DateTime('2020-01-01 10:16:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 3;
        $jam->ruang_id = 3;
        $jam->hari = "Rabu";
        $time = new DateTime('2020-01-01 10:20:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 4;
        $jam->ruang_id = 4;
        $jam->hari = "Kamis";
        $time = new DateTime('2020-01-01 10:21:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 5;
        $jam->ruang_id = 5;
        $jam->hari = "Jumat";
        $time = new DateTime('2020-01-01 10:20:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 6;
        $jam->ruang_id = 6;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:28:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 7;
        $jam->ruang_id = 7;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:20:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 8;
        $jam->ruang_id = 8;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:12:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:29:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 10;
        $jam->ruang_id = 10;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:20:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 11;
        $jam->ruang_id = 11;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:29:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 12;
        $jam->ruang_id = 12;
        $jam->hari = "Rabu";
        $time = new DateTime('2020-01-01 10:00:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 13;
        $jam->ruang_id = 13;
        $jam->hari = "Rabu";
        $time = new DateTime('2020-01-01 10:20:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 14;
        $jam->ruang_id = 14;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:19:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 15;
        $jam->ruang_id = 15;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:16:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 16;
        $jam->ruang_id = 16;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:19:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 17;
        $jam->ruang_id = 17;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:12:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:59:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:59:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:59:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Kamis";
        $time = new DateTime('2020-01-01 10:21:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:23:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:22:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 1;
        $jam->ruang_id = 1;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:59:00');
        $jam->jam = $time->format('H:i');
        $jam->save();

        $jam = new App\Jam_Kuliah();
        $jam->dosen_id = 12;
        $jam->ruang_id = 12;
        $jam->hari = "Senin";
        $time = new DateTime('2020-01-01 10:12:00');
        $jam->jam = $time->format('H:i');
        $jam->save();
    }
}
