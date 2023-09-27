<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = [
            [
                'id' => '1',
                'name_level' => 'administrator'
            ],
            [
                'id' => '2',
                'name_level' => 'manajemen'
            ],
            [
                'id' => '3',
                'name_level' => 'user'
            ]

        ];
        foreach ($level as $key => $value) {
            Level::create($value);
        }
    }
}
