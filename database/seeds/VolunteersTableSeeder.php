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
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->volunteers()->save(factory(App\Volunteer::class)->make());
            
            // seed related tables
            //$u->volunteers()->demographics()->save(factory(App\Demographic::class)->make());
          });
    }
}