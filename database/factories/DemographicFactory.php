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

$factory->define(App\Demographic::class, function (Faker $faker) {
    return [
    'street_address' => $faker->streetAddress,
    'city' => $faker->city,
	'state' => $faker->state,
	'zip' => $faker->postcode,
	'home_phone' => $faker->phoneNumber,
 	'work_phone' => $faker->tollFreePhoneNumber,
	'cell_phone' => $faker->phoneNumber,
    ];
});
