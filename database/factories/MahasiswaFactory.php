<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(App\Mahasiswa::class, function (Faker $faker) {
    return [
        'nim'=>$faker->text,
        'nama_lengkap'=>$faker->text,
        'prodi'=>$faker->text,
        'alamat'=>$faker->text,
    ];
});
