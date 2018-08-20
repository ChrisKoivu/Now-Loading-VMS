<?php

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

$factory->define(App\Preference::class, function (Faker $faker) {
    return [
        'hours_available' => '3pm -7pm',
        'location' => $faker->city,
    ];

    
});
