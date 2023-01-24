<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $new_project = new Project();

            $new_project->name = $faker->words(2, true);
            $new_project->slug = Project::generateSlug($new_project->name);
            $new_project->client_name = $faker->words(2, true);
            $new_project->summary = $faker->text();

            $new_project->save();
        }
    }
}
