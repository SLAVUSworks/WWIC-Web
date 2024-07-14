<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
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

        return view('front.article.index', [
            'articles' => $articles,
            'keyword' => $keyword,
        ]);
    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        $article -> increment('views');
        $article -> with('user','category');
        
        return view('front.article.show', [
            'article' => $article,
        ]);
    }
}
