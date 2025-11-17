<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    public function getArticles($category)
    {
        return Article::with('categories')
            ->when($category, function ($query) use ($category) {
                $query->whereHas('categories', function ($q) use ($category) {
                    $q->where('id', $category);
                });
            })
            ->orderBy('created_at', 'desc')
            ->paginate(5);
    }

    public function getCategories()
    {
        return \App\Models\Category::all();
    }
}
