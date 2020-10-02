<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'id' => $faker->id,
        'merk' => $faker->title,
        'naam' => $faker->title,
        'prijs' => $faker->is_double,
    ];
});
