<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(
        private ArticleService $service
    ) {}

    public function index(Request $request)
    {
        $category = $request->get('category');

        return view('articles.index', [
            'articles'   => $this->service->getArticles($category),
            'categories' => $this->service->getCategories(),
            'selectedCategory' => $category
        ]);
    }

    public function destroy($id)
    {
        \App\Models\Article::findOrFail($id)->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
