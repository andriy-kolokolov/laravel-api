<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('technologies')->delete();
        
        \DB::table('technologies')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'HIBERNATE',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'MYSQL',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'MAVEN',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'JDBC',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'BOOTSTRAP',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'LARAVEL',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'VUE.JS',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'NO',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'VITE',
            ),
        ));
        
        
    }
}