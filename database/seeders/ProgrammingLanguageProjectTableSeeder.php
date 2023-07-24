<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgrammingLanguageProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('programming_language_project')->delete();
        
        \DB::table('programming_language_project')->insert(array (
            0 => 
            array (
                'project_id' => 1,
                'programming_language_id' => 1,
            ),
            1 => 
            array (
                'project_id' => 1,
                'programming_language_id' => 2,
            ),
            2 => 
            array (
                'project_id' => 1,
                'programming_language_id' => 3,
            ),
            3 => 
            array (
                'project_id' => 2,
                'programming_language_id' => 5,
            ),
            4 => 
            array (
                'project_id' => 3,
                'programming_language_id' => 5,
            ),
            5 => 
            array (
                'project_id' => 4,
                'programming_language_id' => 3,
            ),
            6 => 
            array (
                'project_id' => 4,
                'programming_language_id' => 4,
            ),
            7 => 
            array (
                'project_id' => 5,
                'programming_language_id' => 2,
            ),
            8 => 
            array (
                'project_id' => 5,
                'programming_language_id' => 6,
            ),
            9 => 
            array (
                'project_id' => 6,
                'programming_language_id' => 2,
            ),
            10 => 
            array (
                'project_id' => 6,
                'programming_language_id' => 6,
            ),
            11 => 
            array (
                'project_id' => 6,
                'programming_language_id' => 1,
            ),
            12 => 
            array (
                'project_id' => 7,
                'programming_language_id' => 2,
            ),
            13 => 
            array (
                'project_id' => 7,
                'programming_language_id' => 7,
            ),
            14 => 
            array (
                'project_id' => 7,
                'programming_language_id' => 1,
            ),
            15 => 
            array (
                'project_id' => 7,
                'programming_language_id' => 8,
            ),
            16 => 
            array (
                'project_id' => 8,
                'programming_language_id' => 1,
            ),
            17 => 
            array (
                'project_id' => 8,
                'programming_language_id' => 6,
            ),
            18 => 
            array (
                'project_id' => 8,
                'programming_language_id' => 2,
            ),
            19 => 
            array (
                'project_id' => 9,
                'programming_language_id' => 2,
            ),
            20 => 
            array (
                'project_id' => 9,
                'programming_language_id' => 1,
            ),
        ));
        
        
    }
}