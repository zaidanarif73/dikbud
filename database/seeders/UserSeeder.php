<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\RoleEnum;
use App\Models\User; 


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdministrator = User::firstOrCreate([
            'email' => 'superadmin@gmail.com'
            ],[
            'name' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            ]);
        $userAdministrator->assignRole(RoleEnum::SuperAdmin);

        $userAdministrator = User::firstOrCreate([
            'email' => 'admin1@gmail.com'
            ],[
            'name' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            ]);
        $userAdministrator->assignRole(RoleEnum::Admin);

        $userAdministrator = User::firstOrCreate([
            'email' => 'moderator@gmail.com'
            ],[
            'name' => 'Moderator',
            'email' => 'moderator@gmail.com',
            'password' => bcrypt('moderator123'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            ]);
        $userAdministrator->assignRole(RoleEnum::Moderator);
    }
}
