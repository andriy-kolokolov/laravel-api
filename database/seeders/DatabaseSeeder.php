<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // PROJECTS
        $this->call(TypesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProgrammingLanguagesTableSeeder::class);
        $this->call(TechnologiesTableSeeder::class);
        $this->call(ProgrammingLanguageProjectTableSeeder::class);
        $this->call(ProjectTechnologyTableSeeder::class);
        //PROJECTS END
    }
}
