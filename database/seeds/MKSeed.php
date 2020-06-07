<?php

use Illuminate\Database\Seeder;

class MKSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mk = new App\Mk();
        $mk->mata_kuliah = "Metodologi Penelitian";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Rekayasa Perangkat Lunak";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Framework Programming";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Tecnologi Cloud Computing";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Big Data";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Data Minning";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Mobile Developmt";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Game Design";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Pemograman 1";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "pemograman 2";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Sistem Operasi 1";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Sistem Operasi 2";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Objek Oriented Programming";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Kalkulus";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Web Server";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Bahasa Indonesia";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Bahasa inggris 1";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Bahasa Inggris 2";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "PKN";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Pendidikan Agama Islam";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Logika Infirmatika";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Sistem Digital";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Design grafish";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Objek Oriented Design";
        $mk->save();

        $mk = new App\Mk();
        $mk->mata_kuliah = "Interaksi Komputer dan Manusia";
        $mk->save();

       
    }
}
