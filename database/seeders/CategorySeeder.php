<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'FireBlock sistema',
                'description' => 'Informacija apie FireBlock priešgaisrinio sandarinimo sistemą',
                'slug' => 'fireblock-sistema',
            ],
            [
                'name' => 'Projektavimas',
                'description' => 'Priešgaisrinių sistemų projektavimo paslaugos',
                'slug' => 'projektavimas',
            ],
            [
                'name' => 'Montavimo darbai',
                'description' => 'Priešgaisrinių sistemų montavimo darbai',
                'slug' => 'montavimo-darbai',
            ],
            [
                'name' => 'Dažymo darbai',
                'description' => 'Priešgaisrinis konstrukcijų dažymas',
                'slug' => 'dazymo-darbai',
            ],
            [
                'name' => 'Produktai',
                'description' => 'Priešgaisrinės įrangos ir medžiagų katalogas',
                'slug' => 'produktai',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
