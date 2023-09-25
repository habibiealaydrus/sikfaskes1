<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'administrator',
                'password' => bcrypt('123456'),
                'level' => 1,
                'role_id' => 1,
                'email' => 'administrator@habibiemohamad.com'
            ],
            [
                'name' => 'pendaftaran',
                'password' => bcrypt('123456'),
                'level' => 3,
                'role_id' => 2,
                'email' => 'pendaftaran@habibiemohamad.com'
            ],
            [
                'name' => 'perawat',
                'password' => bcrypt('123456'),
                'level' => 3,
                'role_id' => 3,
                'email' => 'perawat@habibiemohamad.com'
            ],
            [
                'name' => 'dokter',
                'password' => bcrypt('123456'),
                'level' => 3,
                'role_id' => 4,
                'email' => 'dokter@habibiemohamad.com'
            ],
            [
                'name' => 'apoteker',
                'password' => bcrypt('123456'),
                'level' => 3,
                'role_id' => 5,
                'email' => 'apoteker@habibiemohamad.com'
            ],
            [
                'name' => 'manajemen',
                'password' => bcrypt('123456'),
                'level' => 2,
                'role_id' => 6,
                'email' => 'manajemen@habibiemohamad.com'
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
