<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type_id' => 1,
                'title' => 'Whatsap Clone',
                'image' => 'uploads/wuBL71cSIWrgziTSe9yqvvxLZyxg2K6yg5icnwTt.png',
                'slug' => 'whatsap-clone',
                'description' => 'Whatsup clone using VUE JS',
                'project_url' => 'https://github.com/andriy-kolokolov/vue-boolzapp',
            ),
            1 => 
            array (
                'id' => 2,
                'type_id' => 2,
                'title' => 'Java CRUD and tests',
                'image' => NULL,
                'slug' => 'java-crud-and-tests',
            'description' => 'Used DAO (Data Access Object) Pattern. CRUD methods and tests JAVA HIBERNATE',
                'project_url' => 'https://github.com/andriy-kolokolov/java-hibernate-jdbc-database-manager',
            ),
            2 => 
            array (
                'id' => 3,
                'type_id' => 2,
                'title' => 'Java Roman Calculator',
                'image' => NULL,
                'slug' => 'java-roman-calculator',
                'description' => 'Just a simple Roman calculator using a hashmap to convert an integer to a Roman numeral. Inspired to create it after completing the LeetCode task "https://leetcode.com/problems/roman-to-integer/"',
                'project_url' => 'https://github.com/andriy-kolokolov/java-roman-calculator',
            ),
            3 => 
            array (
                'id' => 4,
                'type_id' => 3,
                'title' => 'Todo List Teamwork',
                'image' => 'uploads/1r5u70XUtaH53CY0LE7YQjjoeC7KCe0QJEkfwtJz.png',
                'slug' => 'todo-list-teamwork',
                'description' => 'This project focuses on teamwork and GIT version control. This is a Simple Todo List manager.',
                'project_url' => 'https://github.com/alessandropecchini99/laravel-boolean',
            ),
            4 => 
            array (
                'id' => 5,
                'type_id' => 1,
                'title' => 'Admin Dashboard',
                'image' => 'uploads/Hwj4MbRgQRTD9A0WluF3wqfwm5uPjUR7LPVmN5DS.png',
                'slug' => 'admin-dashboard',
                'description' => 'Full responsive layout',
                'project_url' => 'https://github.com/andriy-kolokolov/html-css-bootstrap-dashboard',
            ),
            5 => 
            array (
                'id' => 6,
                'type_id' => 1,
                'title' => 'Spotify Clone',
                'image' => 'uploads/uEKaUX5KRK22CiXqw7HReS4SgKJ9BWQhArIeUVNB.png',
                'slug' => 'spotify-clone',
                'description' => 'Full responsive layout',
                'project_url' => 'https://github.com/andriy-kolokolov/html-css-spotifyweb',
            ),
            6 => 
            array (
                'id' => 7,
                'type_id' => 1,
                'title' => 'Art Coach Portfolio',
                'image' => 'uploads/1vMkcggfmoWLWktIlTcZacRXzMxRKFq48o7YqGsp.png',
                'slug' => 'art-coach-portfolio',
                'description' => NULL,
                'project_url' => 'https://github.com/andriy-kolokolov/proj-html-vuejs',
            ),
            7 => 
            array (
                'id' => 8,
                'type_id' => 1,
                'title' => 'Social Posts',
                'image' => 'uploads/uOFKsKX7Z7m5X2k7bQETs4cIKDdyErsiyxaLpR99.png',
                'slug' => 'social-posts',
                'description' => NULL,
                'project_url' => 'https://github.com/andriy-kolokolov/js-social-posts',
            ),
            8 => 
            array (
                'id' => 9,
                'type_id' => 1,
                'title' => 'Shopping List Manager',
                'image' => 'uploads/Dvbvp3hl3ws3dcSmtd2gWdkV7sixVlMaWwEva8BQ.png',
                'slug' => 'shopping-list-manager',
                'description' => 'Add/delete todos for shoping',
                'project_url' => 'https://github.com/andriy-kolokolov/js-lista-spesa',
            ),
        ));
        
        
    }
}