<?php

namespace Database\Seeders;

use App\Models\Subgoals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubgoalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            'assessment_tool_id' => '1',
            'subgoal_number' => '1.1.',
            'criterion',
            'evidence_of_progress',
            'center_rating',   
            'surveyor_comments',   
            'surveyor_team_rating'    
        ]);
        
        Subgoals::insert($data);
    }
}
