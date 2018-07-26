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

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        'skill'=>get_skill(),
    ];

    
});

function get_skill(){
    $array = array( "Basket Weaving", "Web Design", 
   "Construction", "Blogging",);
     
   $count = count($array) - 1;
   $index = mt_rand(0,$count);         

   return $array[$index];

}