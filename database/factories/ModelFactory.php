<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Meal::class, function (Faker $faker) {
	$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    return [
        'title' => $faker->unique()->foodName(),
        //'category_id' => $faker->optional()->numberBetween(1,5),  //set foreign key checks = 0
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'created_at' => date("Y-m-d H:i:s"),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word,
        'created_at' => date("Y-m-d H:i:s"),       
    ];
});

$factory->define(App\Ingredient::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'created_at' => date("Y-m-d H:i:s"),
    ];
});

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word,  
        'created_at' => date("Y-m-d H:i:s"),    
    ];
});