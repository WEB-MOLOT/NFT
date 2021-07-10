<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project::factory()->count(125)->create();


        foreach ($projects as $project) {

            $project->categories()->attach(rand(1, 7));

            $project->addMedia(public_path('img/project/img-1.jpg'))->preservingOriginal()->toMediaCollection('project_logo');
            $project->addMedia(public_path('img/project/img-1.jpg'))->preservingOriginal()->toMediaCollection('project_images');
            $project->addMedia(public_path('img/project/img-2.jpg'))->preservingOriginal()->toMediaCollection('project_images');
            $project->addMedia(public_path('img/project/img-3.jpg'))->preservingOriginal()->toMediaCollection('project_images');
        }
    }
}
