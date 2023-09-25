<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'id' => '1',
                'name_role' => 'administrator'
            ],
            [
                'id' => '2',
                'name_role' => 'pendaftar'
            ],
            [
                'id' => '3',
                'name_role' => 'perawat'
            ],
            [
                'id' => '4',
                'name_role' => 'dokter'
            ],
            [
                'id' => '5',
                'name_role' => 'apoteker'
            ],
            [
                'id' => '6',
                'name_role' => 'manajemen'
            ],

        ];
        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
