<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ruang;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Ruang::class, function (Faker $faker) {
    return [
        //
        'kelas' => 'RD4.' . rand(1, 99),
        'gedung' => Str::random(2)
    ];
});
