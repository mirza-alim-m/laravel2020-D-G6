<?php

use Illuminate\Database\Seeder;
use App\Ruang;

class RuangsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ruang = new Ruang();
        $ruang->kelas = "D4.1";
        $ruang->gedung = "D";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "D4.2";
        $ruang->gedung = "D";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "D4.3";
        $ruang->gedung = "D";
        $ruang->save();
        
        $ruang = new Ruang();
        $ruang->kelas = "D4.4";
        $ruang->gedung = "D";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "D4.5";
        $ruang->gedung = "D";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "D4.6";
        $ruang->gedung = "D";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "D4.7";
        $ruang->gedung = "D";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "D4.8";
        $ruang->gedung = "D";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "D4.9";
        $ruang->gedung = "D";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.1";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.2";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.3";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.4";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.5";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.6";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.7";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.8";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "B3.9";
        $ruang->gedung = "B";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "A3.1";
        $ruang->gedung = "A";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "A3.2";
        $ruang->gedung = "A";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "A3.3";
        $ruang->gedung = "A";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "A3.4";
        $ruang->gedung = "A";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "A3.5";
        $ruang->gedung = "A";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "A3.6";
        $ruang->gedung = "A";
        $ruang->save();

        $ruang = new Ruang();
        $ruang->kelas = "A3.7";
        $ruang->gedung = "A";
        $ruang->save();
    }
}
