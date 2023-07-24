<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Front End',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Back End',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Full Stack',
            ),
        ));
        
        
    }
}