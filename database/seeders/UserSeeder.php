<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Doree Militar',
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_type_id' => 1
            ],
            [
                'name' => 'Nikki Militar',
                'email' => 'nikki@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_type_id' => 1
            ],
            // Add more patient data as needed
        ];

        // Insert data into the patients table
        DB::table('users')->insert($users);
    }
}
