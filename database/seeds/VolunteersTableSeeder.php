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
          
          $user->demographic()->save(factory(App\Demographic::class)->make(['user_id'=>$user->id])); 
          
          
          
          //  $volunteer->education()->save(factory(App\Education::class)->make(['volunteer_id'=>$volunteer->id])); 
          //  $volunteer->emergency_contact()->save(factory(App\EmergencyContact::class)->make(['volunteer_id'=>$volunteer->id]));
           // $volunteer->preference()->save(factory(App\Preference::class)->make(['volunteer_id'=>$volunteer->id]));
           // $volunteer->skills()->save(factory(App\Skill::class)->make(['volunteer_id'=>$volunteer->id]));        
        });

    }
}
