<?php

namespace Database\Seeders;

use App\Models\Maritalstatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maritalstatus = [
            [
                'id' => '1',
                'name_maritalstatus' => 'Belum Menikah'
            ],
            [
                'id' => '2',
                'name_maritalstatus' => 'Menikah'
            ],
            [
                'id' => '3',
                'name_maritalstatus' => 'Duda/janda'
            ]
        ];
        foreach ($maritalstatus as $key => $value) {
            Maritalstatus::create($value);
        }
    }
}
