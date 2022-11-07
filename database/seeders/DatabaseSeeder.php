<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Branches;
use App\Models\Employees;
use App\Models\Genre;
use App\Models\Shifts;
use App\Models\Turns;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Branches::factory(5)->create();
        Genre::factory()->create([
            'name' => 'male'
        ]);
        Genre::factory()->create([
            'name' => 'female'
        ]);
        Genre::factory()->create([
            'name' => 'other'
        ]);
        Turns::factory()->create([
            'name' => 'morning',
            'clock_in' => '07:00:00',
            'clock_out' => '17:00:00'
        ]);
        Employees::factory(5)->create();
        Shifts::factory(20)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
