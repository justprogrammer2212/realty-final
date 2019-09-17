<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Offer;
use App\User;
use Faker\Generator as Faker;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'price' => $faker->numberBetween(10000,100000),
        'currency' => $faker->randomElement(Offer::$offer_currency),
        'status' => $faker->randomElement(Offer::$sale),
        'description' => $faker->text(500),
        'location' => $faker->city,
        'street' => $faker->streetAddress,
        'square' => $faker->numberBetween(500,3000),
        'garage' => $faker->numberBetween(1,6),
        'bathroom' => $faker->numberBetween(1,4),
        'bedrooms' => $faker->numberBetween(1,6),
        'age_build' =>$faker->numberBetween(1,8),
        'category_id' => $faker->numberBetween(1,Category::count()),
        'user_id' => $faker->numberBetween(1,User::count()),
    ];
});
