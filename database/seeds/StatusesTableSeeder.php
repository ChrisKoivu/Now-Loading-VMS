<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status' => 'Pending Approval'
        ]);

        DB::table('statuses')->insert([
            'status' => 'Approved'
        ]);

        DB::table('statuses')->insert([
            'status' => 'Disapproved'
        ]);

        DB::table('statuses')->insert([
            'status' => 'Inactive'
        ]);
    }
}
