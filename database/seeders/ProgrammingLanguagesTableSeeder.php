<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgrammingLanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('programming_languages')->delete();
        
        \DB::table('programming_languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'JS',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'HTML',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'SASS',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'PHP',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'JAVA',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'CSS',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'SCSS',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'VUE',
            ),
        ));
        
        
    }
}