<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'name' => 'Music',
                'slug' => 'music',
                'color' => 'violet'
            ],
            [
                'name' => 'Art',
                'slug' => 'art',
                'color' => 'orchid'
            ],
            [
                'name' => 'Collectible',
                'slug' => 'collectible',
                'color' => 'amber'
            ],
            [
                'name' => 'Game',
                'slug' => 'game',
                'color' => 'asparagus'
            ],
            [
                'name' => 'Metaverse',
                'slug' => 'metaverse',
                'color' => 'pearl'
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
                'color' => 'blue'
            ],
            [
                'name' => 'Utility',
                'slug' => 'utility',
                'color' => 'tan'
            ]
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'color' => $category['color'],
                'slug' => $category['slug']
            ]);
        }

    }
}
