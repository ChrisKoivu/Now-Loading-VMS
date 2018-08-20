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
$factory->define(App\Education::class, function (Faker $faker) {
    return [
        'degree' => get_degree() . ' ' . get_major(),         
	    'school' => get_college($faker->state),                 
    ];
});


/** 
*   faker doesnt provide an education seeder, so making my own 
*   without altering faker
*/


function get_degree() {
   $array = array( "Associates Degree", "Bachelors Degree", 
   "Masters Degree", "Doctorate Degree",);
     
   $count = count($array) - 1;
   $index = mt_rand(0,$count);         

   return $array[$index];

}


function get_college($state) {
   return $state . " State University";
}


function get_major() {
    $array = array( "Business Administration", "Computer Science", "Electronic Engineering", 
    "Mathematics","Education", "Psychology", "Physics", );

    $count = count($array) -1;
    $index = mt_rand(0,$count);         

    return $array[$index];

}