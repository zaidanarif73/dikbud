<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; 


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::firstOrCreate(
        [
            'name' => 'SuperAdmin',
        ],
        [
            'name' => 'SuperAdmin',
            'guard_name' => 'web'
        ]);

        Role::firstOrCreate(
        [
            'name' => 'Moderator',
        ],
        [
            'name' => 'Moderator',
            'guard_name' => 'web'
        ]);
    } 

}
