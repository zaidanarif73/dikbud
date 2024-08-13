<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VM; 


class VMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VM::firstOrCreate([
            'image' => null
            ],[
            'image' => null,
            ]);
    }
}
