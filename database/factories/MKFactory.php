<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MK;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(MK::class, function (Faker $faker) {
    return [
        //
        'mata_kuliah' => 'Informatika ' . Str::random(10)
    ];
});
