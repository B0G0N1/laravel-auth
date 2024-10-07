<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;  // Importa il modello Project
use Faker\Factory as Faker;
use Illuminate\Support\Str;  // Importa Str per generare lo slug

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {

            $title = $faker->sentence(3);
            
            Project::create([
                'title' => $title,
                'description' => $faker->paragraph(5),
                'url' => $faker->url(),
                'slug' => Str::slug($title),
            ]);
        }
    }
}
