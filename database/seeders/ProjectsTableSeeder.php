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
                'order' => 1,
                'title' => 'Whatsap Clone',
                'image' => 'uploads/MTceIzl8o9X0fi9zxfV73j1Po5wv4HEge43PriQP.png',
                'slug' => 'whatsap-clone',
                'description' => 'Whatsup clone using VUE JS',
                'project_url' => 'https://github.com/andriy-kolokolov/vue-boolzapp',
            ),
            1 => 
            array (
                'id' => 2,
                'type_id' => 2,
                'order' => 8,
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
                'order' => 9,
                'title' => 'Java Roman Calculator',
                'image' => NULL,
                'slug' => 'java-roman-calculator',
                'description' => 'Just a simple Roman calculator using a hashmap to convert an integer to a Roman numeral. Inspired to create it after completing the LeetCode task "https://leetcode.com/problems/roman-to-integer/"',
                'project_url' => 'https://github.com/andriy-kolokolov/java-roman-calculator',
            ),
            3 => 
            array (
                'id' => 5,
                'type_id' => 1,
                'order' => 4,
                'title' => 'Admin Dashboard',
                'image' => 'uploads/7MtE2DQQqGT4eGghyTogk8tlMdFjhzyT32jSBgvY.png',
                'slug' => 'admin-dashboard',
                'description' => 'Full responsive layout',
                'project_url' => 'https://github.com/andriy-kolokolov/html-css-bootstrap-dashboard',
            ),
            4 => 
            array (
                'id' => 6,
                'type_id' => 1,
                'order' => 5,
                'title' => 'Spotify Clone',
                'image' => 'uploads/33vq9Dx6Y2MvlYVB07tevunhQiEjxvxHeSO09Bti.png',
                'slug' => 'spotify-clone',
                'description' => 'Full responsive layout',
                'project_url' => 'https://github.com/andriy-kolokolov/html-css-spotifyweb',
            ),
            5 => 
            array (
                'id' => 7,
                'type_id' => 1,
                'order' => 3,
                'title' => 'Art Coach Portfolio',
                'image' => 'uploads/glKaii2dL16DyOOJlogZ5OzJrQDHj5qgaMgk6fY1.png',
                'slug' => 'art-coach-portfolio',
                'description' => 'Portfolio site of an art coach figure',
                'project_url' => 'https://github.com/andriy-kolokolov/proj-html-vuejs',
            ),
            6 => 
            array (
                'id' => 8,
                'type_id' => 1,
                'order' => 6,
                'title' => 'Social Posts',
                'image' => 'uploads/GLxd1CYvF9M9AI3qJXQrluqKypBF4H9aByz0UCa4.png',
                'slug' => 'social-posts',
                'description' => 'Printing soical posts getting data from array, manage likes count',
                'project_url' => 'https://github.com/andriy-kolokolov/js-social-posts',
            ),
            7 => 
            array (
                'id' => 9,
                'type_id' => 1,
                'order' => 7,
                'title' => 'Shopping List Manager',
                'image' => 'uploads/5wxWGwcg4e9FVlmIfNpavgMSZFVe3F30kU8wXk40.png',
                'slug' => 'shopping-list-manager',
                'description' => 'Add/delete todos for shoping',
                'project_url' => 'https://github.com/andriy-kolokolov/js-lista-spesa',
            ),
            8 => 
            array (
                'id' => 10,
                'type_id' => 1,
                'order' => 2,
                'title' => 'Netflix Clone',
                'image' => 'uploads/pJ2qDvi3GHKuOZq5kFYkPxAYxAf527B77scned6R.png',
                'slug' => 'netflix-clone',
                'description' => 'Netflix clone using rest api to get movies from "https://www.themoviedb.org/"',
                'project_url' => 'https://github.com/andriy-kolokolov/vite-boolflix',
            ),
            9 => 
            array (
                'id' => 11,
                'type_id' => 1,
                'order' => 10,
                'title' => 'E-commerce',
                'image' => 'uploads/FaWnS5Vex6uoTZjDSLVYWhJW5CK3lYrLibUx2AHR.png',
                'slug' => 'e-commerce',
                'description' => 'Simple e-commerce page layout, changing images on hover cards',
                'project_url' => 'https://github.com/andriy-kolokolov/html-css-boolando',
            ),
            10 => 
            array (
                'id' => 12,
                'type_id' => 1,
                'order' => 11,
                'title' => 'DC Comics',
                'image' => 'uploads/Cr38OhW1u4CvGVFWuhalBymlTmsGS4tZeobDA89N.png',
                'slug' => 'dc-comics',
                'description' => 'Getting data from reactive array in "vue store" and print cards, on card click show card and details in modal',
                'project_url' => 'https://github.com/andriy-kolokolov/vite-comics',
            ),
            11 => 
            array (
                'id' => 13,
                'type_id' => 1,
                'order' => 12,
                'title' => 'Discord Home Page Clone',
                'image' => 'uploads/geam28zxJM4pNiy62xPBG0h9gwuP5btXdYTVnc63.png',
                'slug' => 'discord-home-page-clone',
                'description' => 'Discord home page clone',
                'project_url' => 'https://github.com/andriy-kolokolov/htmlcss-discord',
            ),
            12 => 
            array (
                'id' => 14,
                'type_id' => 1,
                'order' => 13,
                'title' => 'DropBox Home Page Clone',
                'image' => 'uploads/I0DQ7qhEfr3QXeuiynaPyZWXEUMDwnoYYlQNIJCi.png',
                'slug' => 'dropbox-home-page-clone',
                'description' => 'Drop box home page clone',
                'project_url' => 'https://github.com/andriy-kolokolov/htmlcss-dropbox',
            ),
        ));
        
        
    }
}