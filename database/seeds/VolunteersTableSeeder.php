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
        factory(App\User::class, 10)->create()->each(function ($user) {
            // seed user relationship tables
          $user->volunteer()->save(factory(App\Volunteer::class)->make(['user_id'=>$user->id]));
          $user->demographic()->save(factory(App\Demographic::class)->make(['user_id'=>$user->id]));
          
          // seed demographics relationship tables
          $user->demographic->education()->save(factory(App\Education::class)->make(['demographic_id'=>$user->demographic->id])); 
          $user->demographic->emergency_contact()->save(factory(App\EmergencyContact::class)->make(['demographic_id'=>$user->demographic->id])); 
         
          // seed volunteers relationship tables
          $user->volunteer->preference()->save(factory(App\Preference::class)->make(['volunteer_id'=>$user->volunteer->id]));
          $user->volunteer->skills()->save(factory(App\Skill::class)->make(['volunteer_id'=>$user->volunteer->id]));  
        
        });

    }
}
