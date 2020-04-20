<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jam_Kuliah;
use Faker\Generator as Faker;

$factory->define(Jam_Kuliah::class, function (Faker $faker) {
  $hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
    return [
        //
        'dosen_id' => rand(1,99)
        ,'ruang_id' => rand(1,99)
        ,'jam' => $faker->dateTimeThisMonth()->format('H:i')
        ,'hari' => $hari[rand(0,6)]
    ];
});
