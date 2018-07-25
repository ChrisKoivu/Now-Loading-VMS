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

        // create a user account for each volunteer. the user_id is a foreign
        // key in the volunteers table.  
        'user_id' => function () {
            global $first_name, $last_name;
            $name = strtolower($first_name . $last_name);

            // overriding user name with volunteer name, so the names match 
            return factory(App\User::class)->create(['name'=>$name])->id;
        }
    ];
});
