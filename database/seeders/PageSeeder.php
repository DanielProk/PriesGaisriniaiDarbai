<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Pagrindinis',
                'slug' => 'home',
                'content' => 'Pagrindinio puslapio turinys',
                'meta_title' => 'Priešgaisriniai Darbai - Pagrindinis',
                'meta_description' => 'Priešgaisrinių sistemų montavimas, projektavimas ir priežiūra',
            ],
            [
                'title' => 'FireBlock',
                'slug' => 'fireblock',
                'content' => 'FireBlock sistemos aprašymas',
                'meta_title' => 'FireBlock Sistema - Priešgaisriniai Darbai',
                'meta_description' => 'FireBlock priešgaisrinio sandarinimo sistema',
            ],
            [
                'title' => 'Projektavimas',
                'slug' => 'design',
                'content' => 'Projektavimo paslaugų aprašymas',
                'meta_title' => 'Projektavimas - Priešgaisriniai Darbai',
                'meta_description' => 'Priešgaisrinių sistemų projektavimo paslaugos',
            ],
            [
                'title' => 'Produktai',
                'slug' => 'products',
                'content' => 'Produktų sąrašas ir aprašymai',
                'meta_title' => 'Produktai - Priešgaisriniai Darbai',
                'meta_description' => 'Priešgaisrinės įrangos ir medžiagų katalogas',
            ],
            [
                'title' => 'Montavimo Darbai',
                'slug' => 'installation',
                'content' => 'Montavimo darbų aprašymas',
                'meta_title' => 'Montavimo Darbai - Priešgaisriniai Darbai',
                'meta_description' => 'Priešgaisrinių sistemų montavimo paslaugos',
            ],
            [
                'title' => 'Dažymo Darbai',
                'slug' => 'painting',
                'content' => 'Dažymo darbų aprašymas',
                'meta_title' => 'Dažymo Darbai - Priešgaisriniai Darbai',
                'meta_description' => 'Priešgaisrinių konstrukcijų dažymo paslaugos',
            ],
            [
                'title' => 'Kontaktai',
                'slug' => 'contact',
                'content' => 'Kontaktinė informacija',
                'meta_title' => 'Kontaktai - Priešgaisriniai Darbai',
                'meta_description' => 'Susisiekite su mumis',
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
