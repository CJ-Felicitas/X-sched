<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;
class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_types = [
            [
                'user_type' => 'Administrator',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_type' => 'Staff',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
 
        ];
        DB::table('user_types')->insert($user_types);
    }
}
