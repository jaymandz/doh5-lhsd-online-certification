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
        AssessmentTools::factory()->create([
             'facilityTypeId' => '1',
             'itemId' => '1'
        ]);
    }
}
