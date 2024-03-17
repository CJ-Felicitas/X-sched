<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rate;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rate::create([
            'service_name' => 'Regular 1',
            'price' => 700,
            'description' => 'client will attend a session once a week',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Rate::create([
            'service_name' => 'Regular 2',
            'price' => 650,
            'description' => 'client will attend a sesion twice a week',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Rate::create([
            'service_name' => 'Regular 3',
            'price' => 600,
            'description' => 'client will attend a session three times a week',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Rate::create([
            'service_name' => 'Charity 1',
            'price' => 500,
            'description' => 'client will attend a session once a month',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Rate::create([
            'service_name' => 'Charity 2',
            'price' => 550,
            'description' => 'client can attend a session anytime but the pay is per session',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Rate::create([
            'service_name' => 'Group',
            'price' => 600,
            'description' => 'client will attend a session in a group session and the session is only once a week',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
