<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religion = [
            [
                'id' => '1',
                'name_religion' => 'Islam'
            ],
            [
                'id' => '2',
                'name_religion' => 'Kristen'
            ],
            [
                'id' => '3',
                'name_religion' => 'Hindu'
            ], [
                'id' => '4',
                'name_religion' => 'Budha'
            ]

        ];
        foreach ($religion as $key => $value) {
            Religion::create($value);
        }
    }
}
