<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mk;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Mk::class, function (Faker $faker) {
    return [
        //
        'mata_kuliah' => 'Informatika ' . Str::random(10)
    ];
});
