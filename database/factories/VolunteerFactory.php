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

$factory->define(App\Volunteer::class, function (Faker $faker) {
    global $first_name, $last_name;

    // doing this so we can re-use these variables in the
    // user create closer function below. 
    $first_name = $faker->firstName;
    $last_name = $faker->lastName;

    return [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'dl_on_file' => 1,
 	    'ss_card_on_file' => 1,
        'status_id' => 1,
    ];
});
