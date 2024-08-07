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
            'website_email' => 'dikbud@malangkota.go.id',
            'website_phone' => '(0341)-551333',
            'website_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1975.7025720451807!2d112.61286593974458!3d-7.957016122577707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827beffc2665%3A0x9dd38763e9a56b77!2sDinas%20Pendidikan%20dan%20Kebudayaan%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1723041477716!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'website_motto' => 'Bekerja Bersama, Bersama Bekerja Untuk Mewujudkan Merdeka Belajar Mudah, Efektif, Ramah, Disiplin, Efisien, Kolaboratif, dan Akuntabel Dalam Melayani ',
            'website_logo' => '',
            'website_address' => 'Jl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145',
            ]);
    }
}
