<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('user','category')
            ->where('status', '1')
            ->latest()
            ->simplePaginate(6);

        return view('front.home.index', [
            'latest_post' => Article::with('User', 'Category')->whereStatus(1)->latest()->firstOrFail(),
            'articles' => $articles,
        ]);
    }
}

