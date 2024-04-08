<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')
            ->where('status', '1')
            ->latest()
            ->simplePaginate(6);

        $parentCategories = Category::whereNull('parent_id')
            ->with('children')
            ->latest()
            ->get();

        $categories = Category::whereDoesntHave('children')
            ->latest()
            ->get();

        return view('front.home.index', [
            'latest_post' => Article::whereStatus(1)->latest()->firstOrFail(),
            'articles' => $articles,
            'parentCategories' => $parentCategories,
            'categories' => $categories,
        ]);
    }
}

