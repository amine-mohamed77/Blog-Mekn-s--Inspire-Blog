<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Tag::count() === 0) {
            $this->call(TagSeeder::class);
        }

        $tags = Tag::all();

        // Create articles and attach random tags
        $articles = Article::factory(20)->create();

        $articles->each(function ($article) use ($tags) {
            $randomTags = $tags->random(rand(2, 5))->pluck('id');
            $article->tags()->attach($randomTags);
        });
    }
    }

