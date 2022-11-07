<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'male'
        ]);
        DB::table('genres')->insert([
            'name' => 'female'
        ]);
        DB::table('genres')->insert([
            'name' => 'other'
        ]);
    }
}
