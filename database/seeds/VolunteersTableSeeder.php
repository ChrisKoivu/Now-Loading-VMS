<?php

use Illuminate\Database\Seeder;

class VolunteersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //create 10 volunteers
        factory(App\Volunteer::class, 10)->create()->each(function ($volunteer) {
            // seed demographics table with a demographic object
            $volunteer->demographics()->save(factory(App\Demographic::class)->make(['volunteer_id'=>$volunteer->id]));     
        });

    }
}
