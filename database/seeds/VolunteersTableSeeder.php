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
            // seed volunteer relationship tables
            $volunteer->demographics()->save(factory(App\Demographic::class)->make(['volunteer_id'=>$volunteer->id])); 
            $volunteer->education()->save(factory(App\Education::class)->make(['volunteer_id'=>$volunteer->id])); 
            $volunteer->emergency_contact()->save(factory(App\EmergencyContact::class)->make(['volunteer_id'=>$volunteer->id]));
            $volunteer->preference()->save(factory(App\Preference::class)->make(['volunteer_id'=>$volunteer->id]));        
        });

    }
}
