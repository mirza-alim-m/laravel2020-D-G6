<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dosens;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Dosens::class, function (Faker $faker) {
    return [
        //
        'dosen_nama' => $faker->name
        ,'dosen_nip' => mt_rand(10000000000,99999999999)
        ,'mata_kuliah_id' => rand(1,100)
        ,'dosen_no_telpon' => mt_rand(62000000000000,62999999999999)
        ,'dosen_alamat' => Str::random(50)
    ];
});
