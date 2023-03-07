<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentTools;

class AssessmentToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            'facility_id' => '1', //ABTC
            'facility_name' => 'Rabvaxx',
            'goal_number' => '1'
        ]);
        
        AssessmentTools::insert($data);
    }
}
