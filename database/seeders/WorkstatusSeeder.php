<?php

namespace Database\Seeders;

use App\Models\Workstatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workstatus = [
            [
                'id' => '1',
                'name_workstatus' => 'Belum Bekerja'
            ],
            [
                'id' => '2',
                'name_workstatus' => 'Karyawan Swasta'
            ],
            [
                'id' => '3',
                'name_workstatus' => 'Wiraswasta'
            ]
        ];
        foreach ($workstatus as $key => $value) {
            Workstatus::create($value);
        }
    }
}
