<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FacilityType;

class FacilityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            ['facilityTypeName' => 'ABTC'],
            ['facilityTypeName' => 'TB-DOTS']
        ]);
        
        FacilityType::insert($data);
    }
}
