<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $types = Type::all()->except(1);
        $technolgies = Technology::all()->pluck('id');

        for ($i = 0; $i < 50; $i++) {
            $title = $faker->words(rand(2, 8), true);
            $slug = Project::slugger($title);
            $imageIndex = rand(0, 9);

            $project = Project::create([
                'type_id'       => $faker->randomElement($types)->id,
                'title'         => Str::ucfirst($title),
                'author'        => 'Gianluca Giardella',
                'slug'          => $slug,
                'image'         => $imageIndex ? 'uploads/picsum' . $imageIndex . '.jpg' : null,
                'github_url'    => 'https://github.com/GianlucaGiardella/' . $slug,
                'description'   => $faker->paragraphs(rand(2, 20), true),
            ]);

            $project->technologies()->sync($faker->randomElements($technolgies, null));
        }
    }
}