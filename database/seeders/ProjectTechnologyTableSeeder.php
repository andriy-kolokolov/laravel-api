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
                'technology_id' => 1,
            ),
            1 => 
            array (
                'project_id' => 1,
                'technology_id' => 6,
            ),
            2 => 
            array (
                'project_id' => 2,
                'technology_id' => 2,
            ),
            3 => 
            array (
                'project_id' => 2,
                'technology_id' => 3,
            ),
            4 => 
            array (
                'project_id' => 2,
                'technology_id' => 4,
            ),
            5 => 
            array (
                'project_id' => 2,
                'technology_id' => 5,
            ),
            6 => 
            array (
                'project_id' => 3,
                'technology_id' => 5,
            ),
            7 => 
            array (
                'project_id' => 4,
                'technology_id' => 3,
            ),
            8 => 
            array (
                'project_id' => 4,
                'technology_id' => 6,
            ),
            9 => 
            array (
                'project_id' => 4,
                'technology_id' => 7,
            ),
            10 => 
            array (
                'project_id' => 5,
                'technology_id' => 6,
            ),
            11 => 
            array (
                'project_id' => 7,
                'technology_id' => 9,
            ),
            12 => 
            array (
                'project_id' => 7,
                'technology_id' => 6,
            ),
        ));
        
        
    }
}