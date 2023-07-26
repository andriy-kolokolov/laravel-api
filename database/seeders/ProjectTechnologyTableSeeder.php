<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTechnologyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_technology')->delete();
        
        \DB::table('project_technology')->insert(array (
            0 => 
            array (
                'project_id' => 1,
                'technology_id' => 6,
            ),
            1 => 
            array (
                'project_id' => 2,
                'technology_id' => 2,
            ),
            2 => 
            array (
                'project_id' => 2,
                'technology_id' => 3,
            ),
            3 => 
            array (
                'project_id' => 2,
                'technology_id' => 4,
            ),
            4 => 
            array (
                'project_id' => 2,
                'technology_id' => 5,
            ),
            5 => 
            array (
                'project_id' => 3,
                'technology_id' => 5,
            ),
            6 => 
            array (
                'project_id' => 5,
                'technology_id' => 6,
            ),
            7 => 
            array (
                'project_id' => 7,
                'technology_id' => 9,
            ),
            8 => 
            array (
                'project_id' => 7,
                'technology_id' => 6,
            ),
            9 => 
            array (
                'project_id' => 9,
                'technology_id' => 10,
            ),
            10 => 
            array (
                'project_id' => 6,
                'technology_id' => 10,
            ),
            11 => 
            array (
                'project_id' => 10,
                'technology_id' => 6,
            ),
            12 => 
            array (
                'project_id' => 10,
                'technology_id' => 9,
            ),
            13 => 
            array (
                'project_id' => 8,
                'technology_id' => 10,
            ),
            14 => 
            array (
                'project_id' => 11,
                'technology_id' => 10,
            ),
            15 => 
            array (
                'project_id' => 12,
                'technology_id' => 9,
            ),
            16 => 
            array (
                'project_id' => 1,
                'technology_id' => 9,
            ),
            17 => 
            array (
                'project_id' => 13,
                'technology_id' => 10,
            ),
            18 => 
            array (
                'project_id' => 14,
                'technology_id' => 10,
            ),
        ));
        
        
    }
}