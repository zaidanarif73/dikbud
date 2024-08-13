<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SO; 


class SOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SO::firstOrCreate([
            'image' => null
            ],[
            'image' => null,
            ]);
    }
}
