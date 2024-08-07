<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengaturan; 


class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaturan::firstOrCreate([
            'website_name' => 'Dikbud'
            ],[
            'website_name' => 'Dikbud',
            'website_email' => 'dikbudmalang@gmail.com',
            'website_phone' => 'phone',
            'website_maps' => 'ngga tau',
            'website_motto' => 'hahahaha',
            'website_logo' => '-',
            'website_address' => 'Malang'
            ]);
    }
}
