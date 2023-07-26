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
                'project_id' => 5,
                'programming_language_id' => 2,
            ),
            6 => 
            array (
                'project_id' => 5,
                'programming_language_id' => 6,
            ),
            7 => 
            array (
                'project_id' => 6,
                'programming_language_id' => 2,
            ),
            8 => 
            array (
                'project_id' => 6,
                'programming_language_id' => 6,
            ),
            9 => 
            array (
                'project_id' => 6,
                'programming_language_id' => 1,
            ),
            10 => 
            array (
                'project_id' => 7,
                'programming_language_id' => 2,
            ),
            11 => 
            array (
                'project_id' => 7,
                'programming_language_id' => 7,
            ),
            12 => 
            array (
                'project_id' => 7,
                'programming_language_id' => 1,
            ),
            13 => 
            array (
                'project_id' => 7,
                'programming_language_id' => 8,
            ),
            14 => 
            array (
                'project_id' => 8,
                'programming_language_id' => 1,
            ),
            15 => 
            array (
                'project_id' => 8,
                'programming_language_id' => 6,
            ),
            16 => 
            array (
                'project_id' => 8,
                'programming_language_id' => 2,
            ),
            17 => 
            array (
                'project_id' => 9,
                'programming_language_id' => 2,
            ),
            18 => 
            array (
                'project_id' => 9,
                'programming_language_id' => 1,
            ),
            19 => 
            array (
                'project_id' => 10,
                'programming_language_id' => 1,
            ),
            20 => 
            array (
                'project_id' => 10,
                'programming_language_id' => 2,
            ),
            21 => 
            array (
                'project_id' => 10,
                'programming_language_id' => 3,
            ),
            22 => 
            array (
                'project_id' => 10,
                'programming_language_id' => 8,
            ),
            23 => 
            array (
                'project_id' => 11,
                'programming_language_id' => 2,
            ),
            24 => 
            array (
                'project_id' => 11,
                'programming_language_id' => 6,
            ),
            25 => 
            array (
                'project_id' => 12,
                'programming_language_id' => 1,
            ),
            26 => 
            array (
                'project_id' => 12,
                'programming_language_id' => 2,
            ),
            27 => 
            array (
                'project_id' => 12,
                'programming_language_id' => 3,
            ),
            28 => 
            array (
                'project_id' => 12,
                'programming_language_id' => 8,
            ),
            29 => 
            array (
                'project_id' => 1,
                'programming_language_id' => 8,
            ),
            30 => 
            array (
                'project_id' => 13,
                'programming_language_id' => 2,
            ),
            31 => 
            array (
                'project_id' => 13,
                'programming_language_id' => 6,
            ),
            32 => 
            array (
                'project_id' => 14,
                'programming_language_id' => 2,
            ),
            33 => 
            array (
                'project_id' => 14,
                'programming_language_id' => 6,
            ),
            34 => 
            array (
                'project_id' => 15,
                'programming_language_id' => 1,
            ),
            35 => 
            array (
                'project_id' => 15,
                'programming_language_id' => 7,
            ),
            36 => 
            array (
                'project_id' => 15,
                'programming_language_id' => 2,
            ),
            37 => 
            array (
                'project_id' => 15,
                'programming_language_id' => 8,
            ),
        ));
        
        
    }
}