<?php

use Illuminate\Database\Seeder;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Ginanjar Wiro Sasmito, M.Kom';
        $dosens->dosen_nip = '10.007.032';
        $dosens->mata_kuliah_id = 1;
        $dosens->dosen_no_telpon = '081234567865';
        $dosens->dosen_alamat = 'Brebes';
        $dosens->save();
        
        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Dairoh. M.Sc';
        $dosens->dosen_nip = '04.014.178';
        $dosens->mata_kuliah_id = 2;
        $dosens->dosen_no_telpon = '081234567866';
        $dosens->dosen_alamat = 'Tegal';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Dega Surono Wibowo, S.T., M.Kom';
        $dosens->dosen_nip = '06.014.183';
        $dosens->mata_kuliah_id = 3;
        $dosens->dosen_no_telpon = '081234567861';
        $dosens->dosen_alamat = 'Tegal';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Slamet Wiyono, S.Pd., M.Eng';
        $dosens->dosen_nip = '08.015.222';
        $dosens->mata_kuliah_id = 4;
        $dosens->dosen_no_telpon = '081234567862';
        $dosens->dosen_alamat = 'Tegal';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Dyah Apriliani, S.T., M.Kom';
        $dosens->dosen_nip = '09.015.225';
        $dosens->mata_kuliah_id = 5;
        $dosens->dosen_no_telpon = '081234567863';
        $dosens->dosen_alamat = 'Tegal';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Muhammad Fikri Hidayatullah, S.T., M.Kom';
        $dosens->dosen_nip = '09.016.307';
        $dosens->mata_kuliah_id = 6;
        $dosens->dosen_no_telpon = '081234567864';
        $dosens->dosen_alamat = 'Tegal';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'M. Yoka Fathoni, M.Kom';
        $dosens->dosen_nip = '03.017.328';
        $dosens->mata_kuliah_id = 7;
        $dosens->dosen_no_telpon = '081234567851';
        $dosens->dosen_alamat = 'Bengkulu';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'M. Nishom, M.Kom';
        $dosens->dosen_nip = '09.017.337';
        $dosens->mata_kuliah_id = 8;
        $dosens->dosen_no_telpon = '081234567852';
        $dosens->dosen_alamat = 'Rembang';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Rona Nisa Sofia Amriza, S.Kom., M.T.I., M.I.M';
        $dosens->dosen_nip = '02.018.364';
        $dosens->mata_kuliah_id = 9;
        $dosens->dosen_no_telpon = '081234567853';
        $dosens->dosen_alamat = 'Tegal';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Taufiq Abidin, S.Pd., M.Kom';
        $dosens->dosen_nip = '06.014.184';
        $dosens->mata_kuliah_id = 10;
        $dosens->dosen_no_telpon = '081234567854';
        $dosens->dosen_alamat = 'Tegal';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Sena Wijayanto, S.Pd., M.T';
        $dosens->dosen_nip = '12.018.392';
        $dosens->mata_kuliah_id = 11;
        $dosens->dosen_no_telpon = '081234567855';
        $dosens->dosen_alamat = 'Bengkulu';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Nurul Renaningtias, S.T., M.Kom';
        $dosens->dosen_nip = '12.018.391';
        $dosens->mata_kuliah_id = 12;
        $dosens->dosen_no_telpon = '081234567856';
        $dosens->dosen_alamat = 'Bengkulu';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'La Ode Mohamad Zulfiqar, S.T., M.Kom';
        $dosens->dosen_nip = '02.018.401';
        $dosens->mata_kuliah_id = 13;
        $dosens->dosen_no_telpon = '081234567857';
        $dosens->dosen_alamat = 'Bengkulu';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Gusmira, S.Kom., M.Eng';
        $dosens->dosen_nip = '02.020.438';
        $dosens->mata_kuliah_id = 14;
        $dosens->dosen_no_telpon = '081234567858';
        $dosens->dosen_alamat = 'Tegal';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Ginanjar Wiro Sasmito, M.Kom';
        $dosens->dosen_nip = '02.020.439';
        $dosens->mata_kuliah_id = 15;
        $dosens->dosen_no_telpon = '081234567851';
        $dosens->dosen_alamat = 'Brebes';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Dairoh. M.Sc';
        $dosens->dosen_nip = '02.020.440';
        $dosens->mata_kuliah_id = 16;
        $dosens->dosen_no_telpon = '081234567852';
        $dosens->dosen_alamat = 'Slawi';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Dega Surono Wibowo, S.T., M.Kom';
        $dosens->dosen_nip = '02.020.441';
        $dosens->mata_kuliah_id = 17;
        $dosens->dosen_no_telpon = '081234567853';
        $dosens->dosen_alamat = 'Brebes';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Slamet Wiyono, S.Pd., M.Eng';
        $dosens->dosen_nip = '02.020.441';
        $dosens->mata_kuliah_id = 18;
        $dosens->dosen_no_telpon = '081234567854';
        $dosens->dosen_alamat = 'Pemalang';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Slamet Wiyono, S.Pd., M.Eng';
        $dosens->dosen_nip = '02.020.441';
        $dosens->mata_kuliah_id = 18;
        $dosens->dosen_no_telpon = '081234567854';
        $dosens->dosen_alamat = 'Pemalang';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Dyah Apriliani, S.T., M.Kom';
        $dosens->dosen_nip = '02.020.442';
        $dosens->mata_kuliah_id = 19;
        $dosens->dosen_no_telpon = '081234567855';
        $dosens->dosen_alamat = 'Cirebon';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Muhammad Fikri Hidayatullah, S.T., M.Kom';
        $dosens->dosen_nip = '02.020.443';
        $dosens->mata_kuliah_id = 20;
        $dosens->dosen_no_telpon = '081234567856';
        $dosens->dosen_alamat = 'Cilacap';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'M. Yoka Fathoni, M.Kom';
        $dosens->dosen_nip = '02.020.444';
        $dosens->mata_kuliah_id = 21;
        $dosens->dosen_no_telpon = '081234567857';
        $dosens->dosen_alamat = 'Cikijing';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'M. Nishom, M.Kom';
        $dosens->dosen_nip = '02.020.445';
        $dosens->mata_kuliah_id = 22;
        $dosens->dosen_no_telpon = '081234567859';
        $dosens->dosen_alamat = 'Cibulan';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Rona Nisa Sofia Amriza, S.Kom., M.T.I., M.I.M';
        $dosens->dosen_nip = '02.020.446';
        $dosens->mata_kuliah_id = 23;
        $dosens->dosen_no_telpon = '081234567860';
        $dosens->dosen_alamat = 'Purbalingga';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Taufiq Abidin, S.Pd., M.Kom';
        $dosens->dosen_nip = '02.020.447';
        $dosens->mata_kuliah_id = 24;
        $dosens->dosen_no_telpon = '081234567861';
        $dosens->dosen_alamat = 'Wonosobo';
        $dosens->save();

        $dosens = new App\Dosens;
        $dosens->dosen_nama = 'Nurul Renaningtias, S.T., M.Kom';
        $dosens->dosen_nip = '02.020.448';
        $dosens->mata_kuliah_id = 25;
        $dosens->dosen_no_telpon = '081234567862';
        $dosens->dosen_alamat = 'Pemalang';
        $dosens->save();
    }
}
