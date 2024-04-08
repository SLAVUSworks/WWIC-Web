<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $keyword = request()->keyword;

        if ($keyword) {
            $articles = Article::with('Category')
            ->whereStatus(1)
            ->where('title','like','%' .$keyword. '%')
            ->latest()
            ->paginate(9);
        } else {
            $articles = Article::with('Category')
            ->where('status', '1')
            ->latest()
            ->simplePaginate(9);
        }

        $parentCategories = Category::whereNull('parent_id')
            ->with('children')
            ->latest()
            ->get();
    
        return view('front.article.index', [
            'articles' => $articles,
            'keyword' => $keyword,
            'parentCategories' => $parentCategories,
        ]);
    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        $article -> increment('views');

        $parentCategories = Category::whereNull('parent_id')
            ->with('children')
            ->latest()
            ->get();

        return view('front.article.show', [
            'article' => $article,
            'categories' => Category::whereDoesntHave('children')->latest()->get(),
            'parentCategories' => $parentCategories,
        ]);
    }
}
